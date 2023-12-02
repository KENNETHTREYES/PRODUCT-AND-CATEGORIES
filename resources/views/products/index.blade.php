<!-- resources/views/products/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>Product List</h2>

    <a href="{{ route('products.create') }}">Create New Product</a>

    <ul>
        @foreach($products as $product)
            <li>
                <a href="{{ route('products.show', $product->id) }}">
                    {{ $product->name }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
