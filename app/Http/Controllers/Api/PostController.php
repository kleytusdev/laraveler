<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Http\Resources\PostCollection;

class PostController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Post::class);

        return new PostCollection(Post::with(['comments', 'tags'])->withCount('comments')->get());
    }

    public function show(Post $post)
    {
        $this->authorize('view', $post);

        return new PostResource(Post::with(['comments', 'tags'])->withCount('comments')->find($post->id));
    }

    public function update(Post $post)
    {
        $this->authorize('update', $post);
    }

    public function store(Request $request)
    {
        $this->authorize('create', Post::class);

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
