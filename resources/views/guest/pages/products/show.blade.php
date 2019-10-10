@extends('guest.guest-layout')

@section('title', 'Landing Page')

@section('content')

@include('guest.partials.jumbotron')

<div class="container">
	<div class="row justify-content-center" style="margin-top: 10%;">
		
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
			<div class="align-self-center">
				<div class="card card-body">
					<img src="{{ asset('/assets/images/products/'.$product->image) }}" alt="..." width="200" height="200" class="img-fluid mx-auto d-block">
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
			<form action="{{ route('carts.store') }}" method="POST">

				@csrf
				<input type="hidden" name="prod_id" value="{{ $product->id }}">
				<h5>{{ $product->product_name }}</h5>
				<p>{{ $product->product_description == null ? 'No description' : $product->product_description }}</p>
				<h5> 
					&#8369; {{ $product->presentPrice() }}
					<input type="hidden" name="prod_price" value="{{ $product->presentPrice() }}">
				</h5>
				<a href="#" class="btn btn-outline-secondary btn-md">view more details</a>
				@if(auth()->user())
					<div class="row padding">
						<div class="col-xs-6 col-sm-6">
							<input type="number" name="quantity" min="1" value="1" class="form-control input-sm">
						</div>
						<div class="col-xs-6 col-sm-6">
							<button type="submit" class="btn btn-outline-secondary btn-md">Add to Cart</button>
						</div>
					</div>
				@endif
			</form>
		</div>
	</div>
</div>

@stop