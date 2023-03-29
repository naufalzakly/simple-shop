<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function create(Request $request)
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $post = Post::create([
            'title' => $data['title'],
            'description' => $data['description'],
        ]);

        return redirect()->route('post.index');
    }
}
