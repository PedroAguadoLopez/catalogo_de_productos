{{-- Partial: un producto individual. Recibe la variable $product --}}
<article style="background:#fff; border:1px solid #DDE2D6; border-radius:6px; overflow:hidden; display:flex; flex-direction:column;">
    <img src="{{ $product->image }}" alt="{{ $product->name }}" style="width:100%; aspect-ratio:4/3; object-fit:cover; display:block;">

    <div style="padding:1rem; display:flex; flex-direction:column; gap:.4rem; flex:1;">
        <span style="font-size:.85rem; color:var(--hoja); font-weight:600;">{{ $product->category }}</span>
        <h3 style="margin:0; font-size:1.15rem;">{{ $product->name }}</h3>
        <p style="margin:0; font-size:.95rem; color:#4A524C;">{{ $product->description }}</p>

        <div style="margin-top:auto; padding-top:.75rem; display:flex; justify-content:space-between; align-items:center;">
            <strong style="font-size:1.2rem; color:var(--ambar);">{{ $product->formatted_price }}</strong>
            @if ($product->stock > 0)
                <button style="background:var(--verde); color:#fff; border:0; padding:.5rem .9rem; border-radius:4px; cursor:pointer;">Añadir al carrito</button>
            @else
                <span>Agotado</span>
            @endif
        </div>
    </div>
</article>