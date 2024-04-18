<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PostPhoto;
use Illuminate\Http\Request;

class PostPhotoController extends Controller
{
    public function storeFile(Request $request)
    {
        return PostPhoto::create([
            'uri' => $request->file('photo')->store('posts', 'images'),
            'post_id' => 1,
        ]);
    }

    public function storeBase64(Request $request)
    {
        dd($request->photo);
    }
}
