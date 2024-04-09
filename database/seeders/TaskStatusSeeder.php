<?php

namespace Database\Seeders;

use App\Models\TaskStatus;
use App\Enums\TaskStatusEnum;
use Illuminate\Database\Seeder;

class TaskStatusSeeder extends Seeder
{
    public function run(): void
    {
        foreach(TaskStatusEnum::cases() as $task)
        {
            TaskStatus::create(['name' => $task]);
        }
    }
}
