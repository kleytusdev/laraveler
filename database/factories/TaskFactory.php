<?php

namespace Database\Factories;

use App\Enums\TaskTagEnum;
use App\Models\TaskStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'description' => fake()->text(),
            'tags' => fake()->randomElements(TaskTagEnum::class, 3),
            'started_at' => now(),
            'finished_at' => now()->setDay(28),
            'status_id' => TaskStatus::all()->random()->id,
        ];
    }
}
