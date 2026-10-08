{{-- Partial: un producto individual. Recibe la variable $product --}}
<article class="product-card">
    <img class="product-card__image" src="{{ asset($product->image) }}" alt="{{ $product->name }}">

    <div class="product-card__body">
        <span class="product-card__category">{{ $product->category }}</span>
        <h3 class="product-card__name">{{ $product->name }}</h3>
        <p class="product-card__description">{{ $product->description }}</p>

        <div class="product-card__footer">
            <strong class="product-card__price">{{ $product->formatted_price }}</strong>
            @if ($product->stock > 0)
                <button class="btn">Añadir al carrito</button>
            @else
                <span>Agotado</span>
            @endif
        </div>
    </div>
</article>