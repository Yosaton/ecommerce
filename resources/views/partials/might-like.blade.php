<div class="might-like-section">
    <div class="container">
        <h2>You might also like...</h2>
        <div class="might-like-grid">
<<<<<<< HEAD
            @foreach($mightAlsoLike as $recommendedProduct)
                <a href="{{route('shop.show', $recommendedProduct->slug)}}" class="might-like-product">
                    <img src="{{ asset('img/products/'.$recommendedProduct->slug.'.jpg') }}" alt="product">
                    <div class="might-like-product-name">{{$recommendedProduct->name}}</div>
                    <div class="might-like-product-price">{{$recommendedProduct->presentPrice()}}</div>
                </a>
            @endforeach
=======
            @foreach ($mightAlsoLike as $product)
                <a href="{{ route('shop.show', $product->slug) }}" class="might-like-product">
                    <img src="{{ productImage($product->image) }}" alt="product">
                    <div class="might-like-product-name">{{ $product->name }}</div>
                    <div class="might-like-product-price">{{ $product->presentPrice() }}</div>
                </a>
            @endforeach

>>>>>>> 983ed292933fab690c9448f5e66fb0aaa37c93c8
        </div>
    </div>
</div>
