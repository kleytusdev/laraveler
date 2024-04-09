<?php

namespace Database\Seeders;

use App\Enums\TagEnum;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    public function run(): void
    {
        foreach(TagEnum::cases() as $tag)
        {
            Tag::create(['name' => $tag]);
        }
    }
}
