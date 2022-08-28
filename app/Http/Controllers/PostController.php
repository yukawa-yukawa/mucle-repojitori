<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return $post->get();
    }   
    
    public function menu()
    {
        return view('posts/menu');
    }

}
