<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            PostSeeder::class,
            CommentSeeder::class,
            TagSeeder::class,
            PostTagSeeder::class,
            TaskStatusSeeder::class,
            TaskSeeder::class,
            RoleSeeder::class,
            PermissionSeeder::class
        ]);
    }
}
