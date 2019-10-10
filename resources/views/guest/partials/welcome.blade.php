<div class="container">
    <div class="row welcome text-center">
        <div class="col-12">
            <h2>Our Products</h2>
        </div>
    </div>

    <div class="row justify-content-center">
    	@foreach($products as $product)
	    	@include('guest.pages.products.partials.product-list')
    	@endforeach
    </div>

    <div class="row text-center">
    	<div class="col-12">
    		<a href="{{ route('shop') }}" class="btn btn-outline-secondary btn-md">View More Products</a>
    	</div>
    </div>
</div>