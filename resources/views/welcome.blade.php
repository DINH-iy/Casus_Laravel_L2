@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="shop-hero">
    <div class="shop-hero-content">
        <p class="eyebrow">Welkom bij My Laravel Shop</p>

        <h1>Vind precies wat je zoekt.</h1>

        <p class="shop-hero-text">
            Bekijk ons assortiment en ontdek producten uit verschillende categorieën.
        </p>

        <div class="shop-hero-actions">
            <a href="{{ route('products.index') }}" class="btn btn-large">
                Bekijk producten
            </a>

            <a href="{{ route('categories.index') }}" class="btn btn-outline btn-large">
                Bekijk categorieën
            </a>
        </div>
    </div>

    <div class="shop-hero-visual">
        <div class="hero-product-card">
            <span>Nieuw assortiment</span>
            <strong>Shop nu</strong>
        </div>
    </div>
</section>


<section class="home-section">
    <div class="section-heading">
        <div>
            <p class="eyebrow">Categorieën</p>
            <h2>Shop per categorie</h2>
        </div>

        <a href="{{ route('categories.index') }}" class="text-link">
            Alle categorieën
        </a>
    </div>

    <div class="category-grid">
        <a href="{{ route('categories.index') }}" class="category-card">
            <div class="category-icon">01</div>
            <h3>Bekijk categorieën</h3>
            <p>Ontdek ons assortiment per categorie.</p>
        </a>

        <a href="{{ route('products.index') }}" class="category-card">
            <div class="category-icon">02</div>
            <h3>Alle producten</h3>
            <p>Bekijk direct alle beschikbare producten.</p>
        </a>
    </div>
</section>


<section class="home-section">
    <div class="section-heading">
        <div>
            <p class="eyebrow">Assortiment</p>
            <h2>Uitgelichte producten</h2>
        </div>

        <a href="{{ route('products.index') }}" class="text-link">
            Bekijk alles
        </a>
    </div>

    <div class="product-grid">

        <article class="product-card">
            <div class="product-image">
                Product afbeelding
            </div>

            <div class="product-info">
                <span class="product-category">Categorie</span>

                <h3>Voorbeeld product</h3>

                <div class="product-bottom">
                    <strong class="product-price">€ 29,95</strong>

                    <a href="{{ route('products.index') }}" class="btn">
                        Bekijken
                    </a>
                </div>
            </div>
        </article>


        <article class="product-card">
            <div class="product-image">
                Product afbeelding
            </div>

            <div class="product-info">
                <span class="product-category">Categorie</span>

                <h3>Voorbeeld product</h3>

                <div class="product-bottom">
                    <strong class="product-price">€ 49,95</strong>

                    <a href="{{ route('products.index') }}" class="btn">
                        Bekijken
                    </a>
                </div>
            </div>
        </article>


        <article class="product-card">
            <div class="product-image">
                Product afbeelding
            </div>

            <div class="product-info">
                <span class="product-category">Categorie</span>

                <h3>Voorbeeld product</h3>

                <div class="product-bottom">
                    <strong class="product-price">€ 19,95</strong>

                    <a href="{{ route('products.index') }}" class="btn">
                        Bekijken
                    </a>
                </div>
            </div>
        </article>

    </div>
</section>

@endsection