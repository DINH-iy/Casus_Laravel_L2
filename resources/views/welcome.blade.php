@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="hero">
    <div class="hero-content">
        <p class="eyebrow">Laravel applicatie</p>

        <h1>Welkom bij My Laravel App</h1>

        <p class="hero-text">
            Beheer hier de verschillende onderdelen van de applicatie.
        </p>

        <div class="hero-actions">
            <a href="{{ route('categories.index') }}" class="btn">
                Bekijk categorieën
            </a>
        </div>
    </div>
</section>

@endsection