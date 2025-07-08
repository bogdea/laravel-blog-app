<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderByDesc('published_at')->get();
        return view('blog', compact('posts'));
    }

    public function show($id) {
        $post = Post::findOrFail($id);
        return view('post.show', compact('post'));
    }
}
