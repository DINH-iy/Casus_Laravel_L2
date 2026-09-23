@extends('layouts.app')

@section('title', 'Categories')

@section('content')

<div class="card">

    <div class="card-header">
        <h1>Categories</h1>

        <button type="button" id="show-create-category" class="btn">
            Nieuwe categorie
        </button>
    </div>

    @include('categories.partials.create')
    
    <ul class="list">
        @foreach ($categories as $category)
            <li class="list-item">

                <span class="list-item-title">
                    {{ $category->name }}
                </span>

                <div class="list-actions">

                    <a
                        href="{{ route('categories.get', $category->id) }}"
                        class="btn"
                    >
                        Bekijken
                    </a>

                    <form
                        method="POST"
                        action="{{ route('categories.destroy', $category->id) }}"
                    >
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">
                            Verwijderen
                        </button>
                    </form>

                </div>

            </li>
        @endforeach
    </ul>

</div>

@endsection