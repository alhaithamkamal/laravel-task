@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-3 text-center">Create Task</h1>

        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary text-black">Create Task</button>
        </form>
    </div>
@endsection