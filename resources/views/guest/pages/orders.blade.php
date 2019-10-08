@extends('guest.guest-layout')

@section('title', 'My Cart')

@section('content')

<div class="container-fluid">
	<div class="row justify-content-center">

		<div class="col-md-10">
			
			@if(session()->has('success_message'))
				<div class="alert alert-success" role="alert">
				  {{ session('success_message') }}
				</div>
			@endif

			<div class="card">
				<div class="card-header">
					@if(count($carts) > 0)
				
						<h5>You have ( {{ count($carts) }} ) items in your cart</h5>
						<hr>
					@else
						
						<div class="row">
							<div class="col-sm-12 col-md-12">
								<h5>You have no items in your cart</h5>
								<a href="{{ route('products.index') }}" class="btn btn-outline-secondary btn-sm">Go Shopping</a>
							</div>
						</div>
						
					@endif
				</div>

				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped">
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

								<tr>
									<td>
										<img src="/assets/images/products/macbook.jpg" alt="..." height="100" width="100" class="img-fluid mx-auto d-block">
									</td>
									<td>Macbook Pro 7</td>
									<td>25,000.00</td>
									<td>2</td>
									<td>50,000</td>
									<td>
										<a href="#" class="btn btn-outline-danger btn-sm">
											<i class="fa fa-trash"></i>
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<img src="/assets/images/products/macbook.jpg" alt="..." height="70" width="70" class="img-fluid mx-auto d-block">
									</td>
									<td>Macbook Pro 7</td>
									<td>25,000.00</td>
									<td>2</td>
									<td>50,000</td>
									<td>
										<a href="#" class="btn btn-outline-danger btn-sm">
											<i class="fa fa-trash"></i>
										</a>
									</td>
								</tr>
						    </tbody>
						</table>
					</div>

					<div class="row justify-content-between">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
							<div class="input-group">
							  	<input type="text" class="form-control" placeholder="Enter Coupon Code">
							  	<div class="input-group-append">
							    	<button class="btn btn-secondary" type="button">apply code</button>
							  	</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
							<a href="#" class="btn btn-outline-secondary form-control">Update Cart</a>
						</div>
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

				</div>

				<div class="card-footer">
					<div class="row justify-content-end">

						<div class="col-md-6">
							<div class="float-right">
								<a href="{{ route('checkout.index') }}" class="btn btn-primary btn-md">Proceed to checkout</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


</div>


{{-- @foreach($carts as $cart)
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
	@endforeach --}}

@stop