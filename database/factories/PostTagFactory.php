<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostTagFactory extends Factory
{
    public function definition(): array
    {
        return [
            'post_id' => Post::all()->random()->id,
            'tag_id' => Tag::all()->random()->id,
        ];
    }
}
