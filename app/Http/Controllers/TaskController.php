<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }
    public function show(Task $task)
    {
          
        return view('tasks.view', compact('task'));
    }
    public function edit(Task $task)
    {
          
        return view('tasks.edit', compact('task'));
    }
    public function update(Task $task)
    {
        $task->update(request((['title', 'description'])));
        
        return redirect('/tasks');
    }
    public function create()
    {
        return view('tasks/create');
    }
    public function store()
    {
        Task::create(request(['title', 'description']));
        return redirect('/tasks');
    }
    public function destroy(Task $task) {
        $task->delete();
        return redirect('/tasks');
    }
}
