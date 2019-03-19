@extends('tasks.layout')

@section('content')

<div class="container">
    <ul>
        @foreach ($tasks as $task)
        <a href="/tasks/{{ $task->id }}">    
            <li class="card-panel center">{{ $task->title }} </li>
        </a>
        @endforeach
    </ul>
</div>
@endsection