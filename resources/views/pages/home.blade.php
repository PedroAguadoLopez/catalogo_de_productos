@extends('layouts.app')

@section('title', 'Catálogo | Hoja & Taza')

@section('content')
    <style>
        .intro { max-width: 60ch; margin-bottom: 2rem; }
        .intro h1 { font-size: clamp(2rem, 4vw, 2.8rem); margin: 0 0 .5rem; color: var(--verde); }
        .products { display: grid; grid-template-columns: repeat(auto-fill, minmax(240px, 1fr)); gap: 1.5rem; }
    </style>

    <section class="intro">
        <h1>Tés e infusiones a granel</h1>
        <p>Tenemos {{ $products->count() }} productos seleccionados. Todos se envían en bolsa hermética de 100 g.</p>
    </section>

    <section class="products">
        @forelse ($products as $product)
            @include('partials.product-card', ['product' => $product])
        @empty
            <p>Todavía no hay productos. Ejecuta <code>php artisan db:seed</code> para añadirlos.</p>
        @endforelse
    </section>
@endsection