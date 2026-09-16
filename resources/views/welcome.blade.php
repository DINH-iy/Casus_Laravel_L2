@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="shop-hero">
    <div class="shop-hero-content">
        <p class="eyebrow">Webshop</p>

        <h1>Vind wat je zoekt.</h1>

        <p class="shop-hero-text">
            Bekijk ons assortiment en ontdek onze nieuwste producten.
        </p>

        <div class="shop-hero-actions">
            <a href="{{ route('products.index') }}" class="btn btn-large">
                Bekijk producten
            </a>

            <a href="{{ route('categories.index') }}" class="btn btn-outline btn-large">
                Categorieën
            </a>
        </div>
    </div>

    <div class="shop-stats">
        <div class="shop-stat">
            <strong>{{ $categories->count() }}</strong>
            <span>Categorieën</span>
        </div>

        <div class="shop-stat">
            <strong>{{ $products->count() }}</strong>
            <span>Nieuwste producten</span>
        </div>
    </div>
</section>


<section class="home-section">

    <div class="section-heading">
        <div>
            <p class="eyebrow">Ontdek</p>
            <h2>Categorieën</h2>
        </div>

        <a href="{{ route('categories.index') }}" class="text-link">
            Alle categorieën
        </a>
    </div>

    <div class="category-grid">

        @forelse($categories as $category)

            <a
                href="{{ route('categories.show', $category->id) }}"
                class="category-card"
            >
                <div>
                    <h3>{{ $category->name }}</h3>

                    <p>
                        {{ $category->products_count }}
                        {{ $category->products_count === 1 ? 'product' : 'producten' }}
                    </p>
                </div>

                <span class="category-arrow">→</span>
            </a>

        @empty

            <p>Er zijn nog geen categorieën.</p>

        @endforelse

    </div>
</section>


<section class="home-section">

    <div class="section-heading">
        <div>
            <p class="eyebrow">Assortiment</p>
            <h2>Nieuwste producten</h2>
        </div>

        <a href="{{ route('products.index') }}" class="text-link">
            Alle producten
        </a>
    </div>

    <div class="product-grid">

        @forelse($products as $product)

            <article class="product-card">

                <div class="product-card-header">

                    @if($product->category)
                        <span class="product-category">
                            {{ $product->category->name }}
                        </span>
                    @endif

                    <span class="review-count">
                        {{ $product->reviews_count }}
                        {{ $product->reviews_count === 1 ? 'review' : 'reviews' }}
                    </span>

                </div>

                <div class="product-card-body">

                    <h3>{{ $product->name }}</h3>

                    <p class="product-description">
                        {{ \Illuminate\Support\Str::limit($product->description, 120) }}
                    </p>

                </div>

                <div class="product-card-footer">

                    <div class="product-price">

                        @if($product->currentPrice)

                            € {{ number_format(
                                $product->currentPrice->price,
                                2,
                                ',',
                                '.'
                            ) }}

                        @else

                            Geen prijs

                        @endif

                    </div>

                    <a
                        href="{{ route('products.show', $product->id) }}"
                        class="btn"
                    >
                        Bekijken
                    </a>

                </div>

            </article>

        @empty

            <p>Er zijn nog geen producten.</p>

        @endforelse

    </div>
</section>

@endsection