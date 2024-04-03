<?php

namespace App\Http\Controllers\Api;

// use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostCollection;

class PostController extends Controller
{
    public function index()
    {
        // return new PostResource(Post::with('comments')->find(3));
        return new PostCollection(Post::with(['comments', 'tags'])->get());
    }

    public function show(Post $post)
    {
        dd('show');
    }

    public function update(Post $post)
    {
        dd('update');
    }

    public function store()
    {
        dd('store');
    }

    public function destroy(Post $post)
    {
        dd('destroy');
    }
}
