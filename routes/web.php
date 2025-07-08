<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact', [
        'name'=> 'Zsuzsi',
    ]);
});

Route::get('/pass-array' , function(){
    $tasks = [
        'Learn Laravel',
        'Build a web app',
        'Deploy to production',
    ];
    return view('tasks', [
        'tasks' => $tasks,
    ]);
});

Route::get('/request-test', function () {
    return view('request-input', [
        'title' => request('title'),
    ]);
});

// Route::get('/posts/{post}', function ($post){
//     return view('posts', [
//         'post' => $post,
//     ]);
// });

// Route::get('/posts/{post}', function ($post) {
//     $posts = [
//         'first-post' => 'My first post',
//         'second-post' => 'My second post',
//         'third-post' => 'My third post',
//     ];

//     if ( ! array_key_exists($post, $posts)) { abort(404); }


//     return view('posts', [
//         'post' => $posts[$post] ,
//     ]);
// });

Route::get('/posts/{post}', [PostController::class, 'show']);




