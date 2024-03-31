<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        dd('index');
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
