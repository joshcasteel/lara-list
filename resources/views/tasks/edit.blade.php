@extends('tasks.layout')

@section('content')
    <h3>Edit Task</h3>
    <form action="/tasks/{{ $task->id }}" method="post">
        @csrf
        @method('patch')
        <input type="text" name="title" value="{{ $task->title }}">
        <input type="text" name="description" value="{{ $task->description }}">
        <button type="submit" class="btn">Update</button>
    </form>
@endsection