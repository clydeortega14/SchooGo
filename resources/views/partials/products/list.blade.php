<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 py-2">
	<div class="card h-100">
		<a href="{{ route('display.product.show', ['id' => $product->id]) }}">
			<img src="{{ asset('/assets/images/products/'.$product->image) }}" alt="..." class="img-fluid mx-auto d-block" height="200" width="200">
		</a>

		<div class="card-body">
			<h5 class="card-title">{{ $product->product_name }}</h5>
            <p class="card-text">
                {{ $product->product_description == null ? 'No description' : $product->product_description }}
            </p>
            <h6 class="card-title"> &#8369; {{ $product->presentPrice() }}</h6>
            @auth
            <a href="{{ route('display.product.show', ['id' => $product->id]) }}" class="btn btn-outline-secondary btn-md">Select</a>
            @endauth
		</div>
	</div>
</div>