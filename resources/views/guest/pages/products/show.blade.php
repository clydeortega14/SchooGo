@extends('guest.guest-layout')

@section('title', 'Landing Page')


@section('content')

<div class="container">
	<div class="row padding">
		<div class="col-md-12">
			@if(session('error'))
		        <div class="alert alert-danger" role="alert">
				  {{ session('error') }}
				</div>
	      	@endif
		</div>
		

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
			<div class="card card-body">
				<img src="/assets/images/products/bible.jpg" alt="...">
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
			
			<h2>{{ $product->product_name }}</h2>
			<p>{{ $product->product_description}}</p>

			<form action="{{ route('orders.store') }}" method="POST">
				@csrf
				<h4> 
					PHP {{ number_format( $product->price, 2) }}
					<input type="hidden" name="prod_price" value="{{ number_format($product->price, 2) }}"> 
				</h4>


				<input type="hidden" name="prod_id" value="{{ $product->id}}">

				<input type="number" name="quantity" min="1" value="1" class="form-control col-sm-4">

				<br>

				<button type="submit" class="btn btn-outline-secondary">Add to Cart</button>
			</form>
		</div>
	</div>
</div>

<div class="container-fluid">

	<h3>Some products you might like</h3>
	<hr>
    <div class="row jumbotron">

    	@foreach($products as $p)
	        <div class="col-sm-6 col-md-3">
	            <div class="card">
	            	<img class="card-img-top" src="/assets/images/products/bible.jpg" alt="..." height="50" width="50">            	
	            	<div class="card-body">
	            		<h4 class="card-title">{{ $p->product_name}}</h4>
	            		<p>{{ $p->product_description }}</p>
	            		<a href="{{ route('products.show', ['id' => $p->id]) }}" class="btn btn-outline-secondary btn-md">
	            			See details
	            		</a>
	            	</div>
	            </div>
	        </div>
        @endforeach
    </div>
</div>

@stop