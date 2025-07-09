<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
public function index()
{
    $posts = Post::orderByDesc('published_at')->get();

    $recentComments = \App\Models\Comment::with('post', 'user')
        ->latest()
        ->take(5)
        ->get();

    return view('blog', compact('posts', 'recentComments'));
}

    public function show($id) {
        $post = Post::findOrFail($id);

        $recentPosts = Post::orderByDesc('published_at')
        ->where('id', '!=', $id)
        ->take(5)
        ->get();

        return view('post.show', compact('post', 'recentPosts'));
    }
}
