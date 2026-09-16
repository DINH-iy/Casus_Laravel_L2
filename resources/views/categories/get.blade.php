@extends('layouts.app')
@section('title', $category->name)
@section('content')
<div class="card">
    <h1>Categorie aanpassen</h1>
    <form class="form" method="POST" action="{{ route('categories.update', $category->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label class="form-label" for="name">
                Naam
            </label>

            <input
                class="form-input"
                type="text"
                id="name"
                name="name"
                value="{{ old('name', $category->name) }}"
            >
        </div>

        <div class="form-actions">
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">
                Terug
            </a>

            <button type="submit" class="btn">
                Opslaan
            </button>
        </div>
    </form>
</div>

@endsection