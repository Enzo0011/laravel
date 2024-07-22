@extends('layouts.app')

@section('title', 'Edit Book')

@section('content')
<div class="mt-5">
    <h1>Edit Book</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ $book->title }}" required>
        </div>
        <div class="form-group">
            <label for="author">Author:</label>
            <input type="text" id="author" name="author" class="form-control" value="{{ $book->author }}" required>
        </div>
        <div class="form-group">
            <label for="year">Year:</label>
            <input type="number" id="year" name="year" class="form-control" value="{{ $book->year }}" required>
        </div>
        <div class="form-group">
            <label for="genre">Genre:</label>
            <input type="text" id="genre" name="genre" class="form-control" value="{{ $book->genre }}">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Back to list</a>
    </form>
</div>
@endsection