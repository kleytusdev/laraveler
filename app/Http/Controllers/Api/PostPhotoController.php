<?php

namespace App\Http\Controllers\Api;

use App\Models\PostPhoto;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Traits\Base64Decodable;
use App\Http\Controllers\Controller;


class PostPhotoController extends Controller
{
    use Base64Decodable;

    public function index()
    {
        return PostPhoto::all();
    }

    public function storeFile(Request $request)
    {
        return PostPhoto::create([
            'uri' => $request->file('photo')->store('posts', 'images'),
            'post_id' => 1,
        ]);
    }

    public function storeBase64(Request $request)
    {
        return PostPhoto::create([
            'uri' => $this->saveImage($request->photo, 'posts', Str::uuid()),
            'post_id' => 1,
        ]);
    }
}
