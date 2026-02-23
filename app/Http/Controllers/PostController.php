<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        Post::create(['title' => $request->input('title'),
        'content' => $request->input('content')]);
        return 'success';
    }
    public function index(){
        return Post::all();
    }
}

