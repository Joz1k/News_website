<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Http\Requests\UpdateRequest;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Post;
class PostController extends BaseController
{
    public function index()
    {
        $posts = Post::paginate(10);
        return view('news.index', compact("posts"));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Post::create($data);
        return redirect()->route('news.index');
    }

    public function show(Post $post)
    {
        return view('news.show', compact('post'));
    }

    public function edit(Post $post)
    {

        return view('news.edit', compact('post'));
    }

    public function update(Post $post, UpdateRequest $request)
    {
        $data = $request->validated();
        $post->update($data);
        return redirect()->route('news.show', $post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('news.index');
    }
}
