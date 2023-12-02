<!-- resources/views/categories/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>Category List</h2>

    <a href="{{ route('categories.create') }}">Create New Category</a>

    <ul>
        @foreach($categories as $category)
            <li>
                <a href="{{ route('categories.show', $category->id) }}">
                    {{ $category->name }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
