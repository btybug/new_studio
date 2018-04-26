<?php

namespace BtyBugHook\NewStudio\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PhpJsonParser;
use Btybug\User\Repository\MembershipRepository;
use Btybug\User\Repository\SpecialAccessRepository;
use BtyBugHook\NewStudio\Models\NewStudios;
use BtyBugHook\NewStudio\Repository\NewStudiosRepository;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function getIndex(
        Request $request,
        MembershipRepository $membershipRepository,
        SpecialAccessRepository $specialAccessRepository
    )
    {
        $memberships = $membershipRepository->pluck('name','id')->toArray();
        $specials = $specialAccessRepository->pluck('name','id')->toArray();
        $path = plugins_path('vendor' . DS . 'btybug.hook' . DS . 'newstudio' . DS . 'src' . DS . 'storage' . DS . 'studios');
        $directories = PhpJsonParser::getFoldersWithChildrens($path);
        $slug = $request->get('type');
        $group = $request->get('group');
        $studios = NewStudios::where("group", $group)->where('type', $slug)->get();
        return view('newstudio::index', compact(['slug', 'directories', 'studios', 'group','memberships','specials']));
    }

    public function createFolder()
    {
        $path = plugins_path('vendor' . DS . 'btybug.hook' . DS . 'newstudio' . DS . 'src' . DS . 'storage' . DS . 'studios');
        $new_folder_name = "new_" . str_random(4) . rand(111, 999);
        $full_path = $path . DS . $new_folder_name;
        mkdir($full_path, 0777);
        return response()->json(["dirname" => $new_folder_name]);
    }

    public function createFile($dirname)
    {
        $path = plugins_path('vendor' . DS . 'btybug.hook' . DS . 'newstudio' . DS . 'src' . DS . 'storage' . DS . 'studios' . DS . $dirname);
        $folder_name = "new_" . str_random(4) . rand(111, 999);
        $full_path = $path . DS . $folder_name;
        if (!\File::isDirectory($full_path)) {
            \File::makeDirectory($full_path);
        } else {
            return response()->json(["error" => 1]);
        }
        return response()->json(["error" => 0, "filename" => $folder_name]);
    }

    public function uploadStudio(Request $request)
    {
        $v = \Validator::make($request->all(), [
            'file' => 'required|file',
            'name' => 'required|alpha',
            'image' => 'file|image'
        ]);

        if ($v->fails()) {
            return redirect()->back()->with(['flash'=>['message'=>$v->messages()]]);
        }
        $file = $request->file;
        $file_name = $request->get('name', "new_" . str_random(4) . rand(111, 999));
        $type = $request->get('type');
        $group = $request->get('group');
        $path = plugins_path('vendor' . DS . 'btybug.hook' . DS . 'newstudio' . DS . 'src' . DS . 'storage' . DS . 'studios' . DS . $group . DS . $type);
        if (\File::exists($path)) {
            $file->move($path, $file_name . '.blade.php');
            $insert = new NewStudios();
            $insert->uploadImage($request->image);
            $insert->group = $group;
            $insert->type = $type;
            $insert->description = $request->get('description');
            $insert->name = $file_name;
            $insert->hint_path = 'st_hint_path::' . $group . '.' . $type . '.' . $file_name;
            $insert->save();
        }
        return redirect()->back();
    }

    public function getEeditGroupName(Request $request)
    {
        $v = \Validator::make($request->all(), [
            'old_name' => 'required',
            'new_name' => 'required|alpha'
        ]);
        if ($v->fails()) {
            return \Response::json(['error' => true, 'messages' => $v->messages()]);
        }
        $path = plugins_path('vendor' . DS . 'btybug.hook' . DS . 'newstudio' . DS . 'src' . DS . 'storage' . DS . 'studios' . DS . $request->get('old_name'));
        $new_path = plugins_path('vendor' . DS . 'btybug.hook' . DS . 'newstudio' . DS . 'src' . DS . 'storage' . DS . 'studios' . DS . $request->get('new_name'));
        if (\File::isDirectory($path) && !\File::isDirectory($new_path)) {
            $studios = NewStudios::where('group', $request->get('old_name'))->get();
            foreach ($studios as $studio) {
                $studio->group = $request->get('new_name');
                $studio->editHintPath($request->get('old_name'), $request->get('new_name'));
            };
            \File::copyDirectory($path, $new_path);
            \File::deleteDirectory($path);
            return \Response::json(['error' => false, 'url' => route('new_studio') . '?group=' . $request->get('new_name')]);
        }
        return \Response::json(['error' => true, 'messages' => ['group exist!!!']]);

    }

    public function getEeditSubGroupName(Request $request)
    {
        $v = \Validator::make($request->all(), [
            'old_name' => 'required',
            'new_name' => 'required|alpha',
            'group' => 'required',
        ]);
        if ($v->fails()) {
            return \Response::json(['error' => true, 'messages' => $v->messages()]);
        }
        $path = plugins_path('vendor' . DS . 'btybug.hook' . DS . 'newstudio' . DS . 'src' . DS . 'storage' . DS . 'studios' . DS . $request->get('group') . DS . $request->get('old_name'));
        $new_path = plugins_path('vendor' . DS . 'btybug.hook' . DS . 'newstudio' . DS . 'src' . DS . 'storage' . DS . 'studios' . DS . $request->get('group') . DS . $request->get('new_name'));

        if (\File::isDirectory($path) && !\File::isDirectory($new_path)) {
            $studios = NewStudios::where('group', $request->get('group'))->where('type', $request->get('old_name'))->get();
            foreach ($studios as $studio) {
                $studio->type = $request->get('new_name');
                $studio->editHintPath($request->get('old_name'), $request->get('new_name'));
            };
            \File::copyDirectory($path, $new_path);
            \File::deleteDirectory($path);
            return \Response::json(['error' => false, 'url' => route('new_studio') . '?group=' . $request->get('group') . '&type=' . $request->get('new_name')]);
        }
        return \Response::json(['error' => true, 'messages' => ['group exist!!!']]);

    }

    public function getEeditStudioForm(Request $request)
    {
        $id = $request->get('id');
        $studio = NewStudios::find($id);
        return \Response::json(['error' => false, 'html' => \View::make('newstudio::_partials.edit_studio_form', compact('studio'))->render()]);
    }

    public function getEeditStudio(Request $request)
    {
        $v = \Validator::make($request->all(), [
            'image' => 'file|image',
            'file' => 'file|'
        ]);

        if ($v->fails()) {
          return redirect()->back()->with('message',$v->messages());
        }

        $data = $request->except(['image', 'file', 'token']);
        $file = $request->file('file');
        $image = $request->file('image');
        $studio = NewStudios::find($data['id']);
        if ($file) {
            $path = plugins_path('vendor' . DS . 'btybug.hook' . DS . 'newstudio' . DS . 'src' . DS . 'storage' . DS . 'studios' . DS . $studio->group . DS . $studio->type);
            \File::delete($path . DS . $studio->name);
            $file->move($path, $data['name'] . '.blade.php');
            $data['hint_path'] = 'st_hint_path::' . $studio->group . '.' . $studio->type . '.' . $data['name'];
        }
        if ($image) {
            $data['image'] = $studio->changeUploadedImage($image);
        }
        $studio->update($data);
        return redirect()->back();

    }

    public function getDeleteStudio(Request $request,NewStudiosRepository $repository)
    {
        $id=$request->id;
        $repository->delete($id);
        return redirect()->back();

    }

    public function getAllStudios ()
    {
        return view('newstudio::all-studios', compact(''));
    }

    public function getAllItems ()
    {
        return view('newstudio::all-items', compact(''));
    }
}