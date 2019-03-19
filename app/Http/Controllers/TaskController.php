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
    public function show($id)
    {
        $tasks = Task::find($id);    
        return view('tasks.view', compact('tasks'));
    }
    public function edit($id)
    {
        $tasks = Task::find($id);    
        return view('tasks.edit', compact('tasks'));
    }
    public function update($id)
    {
        $tasks = Task::find($id);
        $tasks->title = request('title');
        $tasks->description = request('description');
        $tasks->save();
        return redirect('/tasks');
    }
    public function create()
    {
        return view('tasks/create');
    }
    public function store()
    {
        $tasks = new Task;
        $tasks->title = request('title');
        $tasks->description = request('description');
        $tasks->save();
        return redirect('/tasks');
    }
    public function destroy($id) {
        $tasks = Task::find($id);
        $tasks->delete();
        return redirect('/tasks');
    }
}
