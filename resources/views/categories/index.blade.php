@extends('layouts.app')

@section('title', 'Categories')

@section('content')

<div class="card">

    <div class="card-header">
        <h1>Categories</h1>

        <button
            type="button"
            id="show-create-category"
            class="btn"
        >
            Nieuwe categorie
        </button>
    </div>

    @include('categories.partials.create')

    <ul class="list">

        @forelse ($categories as $category)

            <li class="list-item">

                <div>
                    <span class="list-item-title">
                        {{ $category->name }}
                    </span>

                    <small>
                        {{ $category->products_count }}
                        {{ $category->products_count === 1 ? 'product' : 'producten' }}
                    </small>
                </div>

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

                        <button
                            type="submit"
                            class="btn btn-danger"
                            @disabled(!$category->canDelete())
                            title="{{ !$category->canDelete()
                                ? 'Deze categorie heeft gekoppelde producten'
                                : 'Categorie verwijderen' }}"
                        >
                            Verwijderen
                        </button>
                    </form>

                </div>

            </li>

        @empty

            <li class="list-item">
                Geen categorieën gevonden.
            </li>

        @endforelse

    </ul>

</div>

@endsection