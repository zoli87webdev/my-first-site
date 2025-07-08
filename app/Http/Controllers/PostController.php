<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($post): mixed
    {
        return view("post", compact('post'));
    }
}
