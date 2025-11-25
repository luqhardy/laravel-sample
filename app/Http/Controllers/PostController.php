<?php

namespace App\Http\Controllers;

use App\Models\Post; // ★ Postモデルを use
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * 
     *
     * @param string $id
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('posts.index', ['posts' => $posts]);
    }
    public function show($id)
    {
        $post = Post::with('comments')->findOrFail($id);

        return view('posts.show', ['post' => $post]);
    }
}