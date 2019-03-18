@extends('tasks.layout')

@section('content')
    <h3>Edit Task</h3>
    <form action="/tasks/{{ $tasks->id }}" method="post">
        {{ csrf_field() }}
        @method('patch')
        <input type="text" name="title" value="{{ $tasks->title }}">
        <input type="text" name="description" value="{{ $tasks->description }}">
        <button type="submit" class="btn">Update</button>
    </form>
@endsection