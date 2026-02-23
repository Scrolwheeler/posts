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
        Post::create(['title' => 'Traveling to europe',
        'content' => 'Some text context']);
        return 'success';
    }
}

