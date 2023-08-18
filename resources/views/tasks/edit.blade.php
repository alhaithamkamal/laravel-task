@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-3 text-center">Edit Task</h1>

        <form action="{{ route('tasks.update', $task) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $task->title }}" required>
            </div>

            <div class="mb-3">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" rows="3">{{ $task->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary text-black">Update Task</button>
        </form>
    </div>
@endsection