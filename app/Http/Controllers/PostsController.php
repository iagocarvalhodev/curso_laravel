<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{

    public function index()
    {
        $posts = Post::all();

        return view('index', ['posts' => $posts]);
    }

    public function create()
    {

        return view('post-create');

    }

    public function store(Request $request)
    {
        $post = new Post;

        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();

        return redirect()->to('home');


    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('show', ['post' => $post]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
