@extends('layouts.app')

@section('title', 'Create Book')

@section('content')
<div class="mt-5">
    <h1>Create Book</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="author">Author:</label>
            <input type="text" id="author" name="author" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="year">Year:</label>
            <input type="number" id="year" name="year" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="genre">Genre:</label>
            <input type="text" id="genre" name="genre" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Create</button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Back to list</a>
    </form>
</div>
@endsection