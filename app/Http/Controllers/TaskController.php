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
}
