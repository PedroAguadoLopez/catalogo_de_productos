@extends('layouts.app')

@section('title', 'Catálogo | Hoja & Taza')

@section('content')
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