<!-- resources/views/categories/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>Create Category</h2>

    <form action="{{ route('categories.store') }}" method="post">
        @csrf

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <button type="submit">Create Category</button>
    </form>
@endsection
