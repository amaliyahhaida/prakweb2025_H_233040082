<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Menampilkan semua post — perbaikan N+1 Problem dengan with()
    public function index()
    {
        // Eager Loading relationships
        $posts = Post::with(['author', 'category'])->get();

        return view('posts', compact('posts'));
    }

    // Menampilkan single post — perbaikan N+1 Problem dengan load()
    public function show(Post $post)
    {
        // Lazy Eager Loading
        $post->load(['author', 'category']);

        return view('post', compact('post'));
    }
}
