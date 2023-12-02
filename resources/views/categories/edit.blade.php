<!-- resources/views/categories/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>Edit Category</h2>

    <form action="{{ route('categories.update', $category->id) }}" method="post">
        @csrf
        @method('PATCH')

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $category->name }}" required>

        <button type="submit">Update Category</button>
    </form>

    <a href="{{ route('categories.show', $category->id) }}">Back to Category</a>
@endsection
