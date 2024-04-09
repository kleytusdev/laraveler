<?php

namespace App\Http\Controllers\Api;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Resources\TagResource;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    public function index()
    {
        return TagResource::collection(Tag::all());
    }

    public function show(Tag $tag)
    {
        dd('show');
    }

    public function update(Tag $tag)
    {
        dd('update');
    }

    public function store(Request $request)
    {
        // return Tag::firstOrCreate(
        //     ['name' => $request->name],
        //     ['name' => $request->name]
        // );

        $tag = Tag::where('name', $request->name)->first();

        if (!$tag) return Tag::create($request->all());

        return response()->json($tag);
    }

    public function destroy(Tag $tag)
    {
        dd('destroy');
    }
}
