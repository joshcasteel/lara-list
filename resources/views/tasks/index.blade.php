@extends('tasks.layout')

@section('content')
<h1>Tasks</h1>

<ul>
    @foreach ($tasks as $task)
    <a href="/tasks/{{ $task->id }}">    
        <li>{{ $task->title }} </li>
    </a>
    @endforeach
</ul>

@endsection