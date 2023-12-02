<!-- resources/views/products/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>{{ $product->name }}</h2>

    <p>Description: {{ $product->description }}</p>
    <p>Price: {{ $product->price }}</p>
    <p>Category: {{ $product->category->name }}</p>

    <a href="{{ route('products.edit', $product->id) }}">Edit</a>

    <form action="{{ route('products.destroy', $product->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

    <a href="{{ route('products.index') }}">Back to Product List</a>
@endsection
