@extends('tasks.layout')

@section('content')
<div class="container">
    <form action="/tasks/{{ $tasks->id }}/edit" method="get">
    <label for="title">Title</label>
    <h5>{{$tasks->title}}</h5>
    <br/>    
    <label for="description">Description</label>
    <h5>{{ $tasks->description }}</h5>
    <br/>
    <button type="submit" class="btn">Edit</button>
    </form>
    <form action="/tasks/{{ $tasks->id }}/delete" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn red">Delete</button>
    </form>
</div>
@endsection