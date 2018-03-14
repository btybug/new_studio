<?php

namespace BtyBugHook\NewStudio\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PhpJsonParser;
use Btybug\Framework\Models\TableCss;
use BtyBugHook\NewStudio\Models\NewStudios;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function getIndex(Request $request){
        $path = plugins_path('vendor'.DS.'btybug.hook'.DS.'newstudio'.DS.'src'.DS.'storage'.DS.'studios');
        $directories = PhpJsonParser::getFoldersWithChildrens($path);
        $slug = $request->get('type','icons');
        $style_from_db = NewStudios::where("slug",$slug)->first();
        return view('newstudio::index', compact(['slug','directories','style_from_db']));
    }
    public function createFolder(){
        $path = plugins_path('vendor'.DS.'btybug.hook'.DS.'newstudio'.DS.'src'.DS.'storage'.DS.'studios');
        $new_folder_name = "new_".str_random(4).rand(111,999);
        $full_path = $path.DS.$new_folder_name;
        mkdir($full_path,0777);
        return response()->json(["dirname" => $new_folder_name]);
    }
    public function createFile($dirname){
        $path = plugins_path('vendor'.DS.'btybug.hook'.DS.'newstudio'.DS.'src'.DS.'storage'.DS.'studios'.DS.$dirname);
        $file_name = "new_".str_random(4).rand(111,999);
        $full_path = $path.DS.$file_name.".blade.php";
        if (!\File::exists($full_path)){
            \File::put($full_path,'');
            $insert = new NewStudios();
            $insert->slug = $file_name;
            $insert->name = $file_name;
            $insert->hint_path ='st_hint_path::'.$dirname.'.'.$file_name;
            $insert->save();
        }else{
            return response()->json(["error" => 1]);
        }
        return response()->json(["error" => 0,"filename" => $file_name]);
    }

    public function uploadStudio(Request $request)
    {
       dd($request->all());
    }
}