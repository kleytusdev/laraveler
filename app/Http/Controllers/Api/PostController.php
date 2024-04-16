<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostCollection;

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
        return Post::updateOrCreate(
            [
                'title' => $request->title,
                'user_id' => $request->user_id
            ],
            [
                'body' => $request->body
            ]
        );
    }

    public function destroy(Post $post)
    {
        dd('destroy');
    }
}
