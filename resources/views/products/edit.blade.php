<!-- resources/views/products/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>Edit Product</h2>

    <form action="{{ route('products.update', $product->id) }}" method="post">
        @csrf
        @method('PATCH')

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $product->name }}" required>

        <label for="description">Description:</label>
        <textarea name="description" id="description" required>{{ $product->description }}</textarea>

        <label for="price">Price:</label>
        <input type="number" name="price" id="price" value="{{ $product->price }}" required>

        <label for="category_id">Category:</label>
        <select name="category_id" id="category_id" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $category->id === $product->category_id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        <button type="submit">Update Product</button>
    </form>

    <a href="{{ route('products.show', $product->id) }}">Back to Product</a>
@endsection
