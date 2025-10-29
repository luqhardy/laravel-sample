<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {

        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('posts.index', ['posts' => $posts]);
    }
}