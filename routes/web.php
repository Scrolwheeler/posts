<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PostController;

Route::get('/posts/create', [PostController::class, 'create']);
Route::post('/posts', [PostController::class, 'store']);
// Route::get('/form', function () {
//     return view('posts');
// });

// Route::get('/form/create', function () {
//     return view('posts');
// });


