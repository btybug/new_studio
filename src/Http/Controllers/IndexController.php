<?php

namespace BtyBugHook\NewStudio\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PhpJsonParser;
use BtyBugHook\NewStudio\Models\NewStudios;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function getIndex(Request $request)
    {
        $path = plugins_path('vendor' . DS . 'btybug.hook' . DS . 'newstudio' . DS . 'src' . DS . 'storage' . DS . 'studios');
        $directories = PhpJsonParser::getFoldersWithChildrens($path);
        $slug = $request->get('type');
        $group = $request->get('group');
        $studios = NewStudios::where("group", $group)->where('type', $slug)->get();
        return view('newstudio::index', compact(['slug', 'directories', 'studios', 'group']));
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
        $file = $request->file;
        $file_name = $request->get('name', "new_" . str_random(4) . rand(111, 999));
        $type = $request->get('type');
        $group = $request->get('group');
        $path = plugins_path('vendor' . DS . 'btybug.hook' . DS . 'newstudio' . DS . 'src' . DS . 'storage' . DS . 'studios' . DS . $group . DS . $type);
        if (\File::exists($path)) {
            $file->move($path, $file_name.'.blade.php');
            $insert = new NewStudios();
            $insert->group = $group;
            $insert->type = $type;
            $insert->name = $file_name;
            $insert->hint_path = 'st_hint_path::' . $group . '.' . $type . '.' . $file_name;
            $insert->save();
        }
        return \Response::json(['error'=>false]);
    }
}