<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Http\Resources\PostCollection;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return new PostCollection(Post::with(['comments', 'tags'])->withCount('comments')->get());
    }

    public function show(Post $post)
    {
        dd('show');
    }

    public function update(Post $post)
    {
        dd('update');
    }

    public function store(Request $request)
    {
        return Post::create($request->all());
    }

    public function destroy(Post $post)
    {
        dd('destroy');
    }
}
