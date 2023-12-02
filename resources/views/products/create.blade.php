<!-- resources/views/products/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>Create Product</h2>

    <form action="{{ route('products.store') }}" method="post">
        @csrf

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="description">Description:</label>
        <textarea name="description" id="description" required></textarea>

        <label for="price">Price:</label>
        <input type="number" name="price" id="price" required>

        <label for="category_id">Category:</label>
        <select name="category_id" id="category_id" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <button type="submit">Create Product</button>
    </form>
@endsection
