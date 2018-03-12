<?php

namespace BtyBugHook\NewStudio\Http\Controllers;

use App\Http\Controllers\Controller;

class IndexConroller extends Controller
{
    public function getIndex()
    {
        return view('newstudio::index');
    }
}