<?php

namespace BtyBugHook\NewStudio\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PhpJsonParser;
use Btybug\Framework\Models\TableCss;
use Illuminate\Http\Request;

class IndexConroller extends Controller
{
    public function getIndex(Request $request, $type = "icons"){
        $directories = [];
        $slug = $request->get('type',$type);
        $style_from_db = TableCss::where("slug",$slug)->first();
        return view('newstudio::index', compact(['slug','directories','style_from_db']));
    }
}