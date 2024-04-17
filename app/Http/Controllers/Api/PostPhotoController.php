<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostPhotoController extends Controller
{
    public function storeFile(Request $request)
    {
        dd($request->photo);
    }

    public function storeBase64(Request $request)
    {
        dd($request->photo);
    }
}
