@extends('guest.guest-layout')

@section('title', 'My Cart')

@section('custom_css')
<style type="text/css">
	
	td {

		font-size: 1.2rem;
	}
</style>

@endsection

@section('content')

<div class="container">
	<div class="row padding">
		
		<div class="col-md-12">
			@if(session()->has('success_message'))
				<div class="alert alert-success" role="alert">
				  {{ session('success_message') }}
				</div>
			@endif
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			
			@if(count($carts) > 0)
				
				<h3>You have ( {{ count($carts) }} ) items in your cart</h3>
				<hr>
			@else

				<h3>You have no items in your cart</h3>
				<hr>
				<a href="{{ route('products.index') }}" class="btn btn-outline-secondary btn-lg">Go Shopping</a>

			@endif

		</div>

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="table-responsive">
				<table class="table">
				    <thead class="thead-light">
				      <tr>
				      	<th>Product</th>
				        <th></th>
				        <th>Price</th>
				        <th>Qty</th>
				        <th>Total</th>
				        <th>remove</th>
				      </tr>
				    </thead>

				    <tbody>
				    	@foreach($carts as $cart)
					      	<tr>
						        <td>
						        	<a href="{{ route('products.show', $cart->products->id) }}">
						        		<img src="/assets/images/products/bible.jpg" alt="..." height="195" width="195">
						        	</a>
						        </td>
						        <td>
						        	<a href="{{ route('products.show', $cart->products->id) }}">
						        		{{ $cart->products->product_name }}
						        	</a>
						        </td>
						        <td> &#8369; {{ $cart->products->presentPrice() }}</td>
						        <td>{{ $cart->quantity}}</td>
						        <td> &#8369; {{ $cart->presentPrice() }}</td>
						        <td>
						        	<form action="{{ route('orders.destroy', $cart->id) }}" method="POST">
						        		@csrf
						        		@method('DELETE')

							        	<button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="delete">
							        		<i class="fa fa-trash"></i>
							        	</button>
						        	</form>
						        </td>
					      	</tr>
				      	@endforeach
				    </tbody>
				</table>
			</div>
		</div>
		
		@if(count($carts) > 0)
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
				<div class="input-group">
				  	<input type="text" class="form-control" placeholder="Enter Coupon Code">
				  	<div class="input-group-append">
				    	<button class="btn btn-secondary" type="button">APPLY CODE</button>
				  	</div>
				</div>
			</div>

			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
				<a href="{{ route('products.index') }}" class="btn btn-outline-secondary">Continue Shopping</a>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<a href="#" class="btn btn-outline-secondary form-control">Update Cart</a>
			</div>
		@endif
	</div>

	<div class="row justify-content-end">
		<div class="col-md-6">
			<table class="table table-striped">
				<tbody>
					<tr>
						<td class="text-left">Subtotal</td>
						<td class="text-right">
							&#8369; {{ $carts->sum('total') }}
						</td>
					</tr>

					<tr>
						<td class="text-left">Tax (3%)</td>
						<td class="text-right">
							<span class="text-danger"> +  &#8369; {{ $carts->sum('total') * config('app.tax') }}</span>
						</td>
					</tr>

					<tr>
						<td class="text-left">Total</td>
						<td class="text-right" id="total">
							<span class="text-success"> &#8369; {{ $carts->sum('total') + ( $carts->sum('total') * config('app.tax') ) }}</span>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	
	@if(count($carts) > 0)
		<div class="row justify-content-end">
			<div class="col-md-6">
				<a href="{{ route('checkout.index') }}" class="btn btn-primary btn-lg form-control">Proceed to checkout</a>
			</div>
		</div>
	@endif
</div>

@stop