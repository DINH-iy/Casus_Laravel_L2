@extends('layouts.app')

@section('title', 'Categories')

@section('content')

    <div class="card">
        <h1>Categories</h1>

        <ul class="list">
            @foreach ($categories as $category)
                <li class="list-item">
                    {{ $category->name }}
                </li>
            @endforeach
        </ul>
    </div>

@endsection