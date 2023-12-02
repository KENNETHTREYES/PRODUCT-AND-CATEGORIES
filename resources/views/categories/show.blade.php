<!-- edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Category</h1>
    <form method="post" action="{{ route('categories.update', $category->id) }}">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $category->name }}" required>
        <button type="submit">Update Category</button>
    </form>
@endsection
