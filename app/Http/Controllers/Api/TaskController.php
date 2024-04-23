<?php

namespace App\Http\Controllers\Api;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Enums\TaskStatusEnum;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:tasks.show')->only(['show']);
    }

    public function index()
    {
        // return Task::get();
        $tags = ['Archivado', 'Importante'];

        return Task::create([
            'title' => 'Test Title',
            'description' => 'Test Description',
            'tags' => $tags,
            'started_at' => now(),
            'finished_at' => now()->addDays(2),
            'status_id' => 1,
        ]);
    }

    public function store(Request $request)
    {
    }

    public function show(string $id)
    {
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
