<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\TaskRequest;
use App\Services\TaskService;

class TaskController extends Controller
{
    protected $taskService;

    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    
    public function index()
    {
        return response()->json($this->taskService->getAllTasks());
    }

    public function store(TaskRequest $request)
    {
        return response()->json($this->taskService->createTask($request->validated()));
    }

    public function show(Task $task)
    {
        return response()->json($task);
    }

    public function update(TaskRequest $request, Task $task)
    {
        return response()->json($this->taskService->updateTask($task, $request->validated()));
    }

    public function destroy(Task $task)
    {
        $this->taskService->deleteTask($task);
        return response()->json(['message' => 'Task deleted successfully']);
    }
}
