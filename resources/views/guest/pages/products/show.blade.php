@extends('guest.guest-layout')

@section('title', 'Landing Page')

@section('content')

@include('guest.partials.jumbotron')

<div class="container">
	<div class="row justify-content-center" style="margin-top: 30px;">
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
					<img src="/assets/images/products/macbook.jpg" alt="..." width="500" height="500" class="img-fluid mx-auto d-block">
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<h5>MacBook Pro 8</h5>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, distinctio non quae hic ipsam ducimus minus esse sequi obcaecati perspiciatis eveniet quam nam odio voluptas rem earum nobis sint numquam!</p>
			<h6>PHP 52, 000.00</h6>
			<a href="#" class="btn btn-outline-secondary btn-md">view more details</a>
			<div class="row padding">
				<div class="col-sm-12 col-md-6">
					<input type="number" min="1" value="1" class="form-control input-sm">
				</div>
				<div class="col-sm-12 col-md-6">
					<a href="#" class="btn btn-outline-secondary btn-md">Add to Cart</a>
				</div>
			</div>
		</div>
	</div>
</div>

@stop