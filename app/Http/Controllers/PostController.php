<?php

namespace App\Http\Controllers;
use App\Models\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($post)
    {
        #return view("posts", compact('post'));
        $length = Post::getLength($post);
        return view('posts', compact('post', 'length'));
    }
}
