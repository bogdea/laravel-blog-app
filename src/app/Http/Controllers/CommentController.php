<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class CommentController extends Controller
{
     public function store(Request $request, Post $post)
    {
        $request->validate([
            'body' => 'required|string|max:1000',
        ]);

        $post->comments()->create([
            'body' => $request->body,
            'user_id' => auth()->id(),
        ]);
    }
}
