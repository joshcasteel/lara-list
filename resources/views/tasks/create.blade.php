@extends('tasks.layout')

@section('content')
    <div class="container">    
        <form action="/tasks" method="post">
            {{ csrf_field() }}
            <label for="title">Title</label>
            <input type="text" name="title">
            <label for="description">Description</label>
            <input type="text" name="description">
            <button type="submit" class="btn">Create</button>
        </form>
    </div>
@endsection