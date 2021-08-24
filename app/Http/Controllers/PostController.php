<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();

        $data=[
           'posts'=>$posts,
        ];

        return view('Post.index', $data);
    }

    public function show($id) {
        $post=Post::find($id);

        $data=[
          'post'=>$post
        ];

        return view('Post.show', $data);
    }
}
