<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showPage($slug){
        $page = Page::where('slug',$slug)->firstOrFail();

        return view('pages.dynamic.page',compact('page'));
    }
}
