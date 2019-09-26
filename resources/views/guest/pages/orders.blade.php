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
						        	<img src="/assets/images/products/bible.jpg" alt="..." height="195" width="195">
						        </td>
						        <td>{{ $cart->products->product_name }}</td>
						        <td> &#8369; {{ $cart->products->presentPrice() }}</td>
						        <td>{{ $cart->quantity}}</td>
						        <td> &#8369; {{ $cart->presentPrice() }}</td>
						        <td>
						        	<button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="delete">
						        		<i class="fa fa-trash"></i>
						        	</button>
						        </td>
					      	</tr>
				      	@endforeach
				    </tbody>
				</table>
			</div>
		</div>

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
	</div>

	<div class="row padding">
		<div class="col-md-6">
			<table class="table table-striped">
				<tbody>
					<tr>
						<td style="text-align:left;">Subtotal</td>
						<td style="text-align:right;">
							{{ number_format($carts->sum('total'), 2) }}
							<input type="hidden" value="{{ number_format($carts->sum('total'), 2) }}" name="subtotal">
						</td>
					</tr>

					<tr>
						<td style="text-align:left;">Tax</td>
						<td style="text-align:right;">
							0.00
							<input type="hidden" value="0.00" name="tax">
						</td>
					</tr>

					<tr>
						<td style="text-align:left;">Total</td>
						<td style="text-align:right;" id="total">
							29, 000.00
							<input type="hidden" name="total">
						</td>
					</tr>
				</tbody>
			</table>

			<a href="{{ route('checkout.index') }}" class="btn btn-primary btn-lg">Proceed to checkout</a>
		</div>
		
		<div class="col-md-6">
			
		</div>
	</div>
</div>

@stop