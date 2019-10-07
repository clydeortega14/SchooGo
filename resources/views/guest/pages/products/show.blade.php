@extends('guest.guest-layout')

@section('title', 'Landing Page')

@section('content')

<div class="container-fluid">
	<div class="row d-flex justify-content-center">
		{{-- <div class="col-md-8">
			@if(session('error'))
		        <div class="alert alert-danger" role="alert">
				  {{ session('error') }}
				</div>
	      	@endif
		</div> --}}
		
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
			<div class="align-self-center">
				<div class="card card-body">
					<img src="/assets/images/products/macbook.jpg" alt="..." width="300" height="300" class="img-fluid">
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<h3>MacBook Pro 8</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, distinctio non quae hic ipsam ducimus minus esse sequi obcaecati perspiciatis eveniet quam nam odio voluptas rem earum nobis sint numquam!</p>
			<h5>PHP 52, 000.00</h5>
			<input type="number" min="1" value="1" class="form-control">
			<a href="#" class="btn btn-outline-secondary btn-sm">Add to Cart</a>
		</div>
	</div>
</div>

@stop