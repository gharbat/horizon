<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showPost($slug){
        $post = Post::where('slug',$slug)->firstOrFail();
        return view('pages.posts.single-post',compact('post'));
    }

    public function allPosts(){
        return view('pages.posts.all-posts');
    }
}
