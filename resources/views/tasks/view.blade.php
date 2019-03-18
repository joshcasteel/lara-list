@extends('tasks.layout')

@section('content')
<div class="container">
    <form action="/tasks/{{ $tasks->id }}/edit" method="get">
    <label for="title">Title</label>
    <textarea name="title" id="name" cols="30" rows="10" disabled>{{ $tasks->title }}</textarea>
        
    <label for="description">Description</label>
    <textarea name="description" id="description" cols="30" rows="10" disabled>{{ $tasks->description }}</textarea>

    <button type="submit" class="btn">Edit</button>
    </form>
</div>
@endsection