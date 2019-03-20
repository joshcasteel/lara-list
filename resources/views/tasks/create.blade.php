@extends('tasks.layout')

@section('content')
    <div class="container">    
        <form action="/tasks" method="post">
            @csrf
            <label for="title">Title</label>
            <input type="text" name="title" value="{{ old('title') }}">
            <label for="description">Description</label>
            <input type="text" name="description" value="{{ old('description') }}">
            <button type="submit" class="btn">Create</button>
        </form>
    </div>
    <div class="container">
        <ul>
            @foreach ($errors->all() as $error)
            
                <li class="card-panel red lighten-2">{{ $error }}</li>
            
            @endforeach
        </ul>
    </div>
@endsection