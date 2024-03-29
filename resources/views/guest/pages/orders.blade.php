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
						<a href="{{ route('guest.products') }}" class="btn btn-outline-secondary btn-sm">Continue Shopping </a>
					@else
						<div class="row">
							<div class="col-sm-12 col-md-12">
								<h5>You have no items in your cart</h5>
								<a href="{{ route('guest.products') }}" class="btn btn-outline-secondary btn-sm">Go Shopping</a>
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
								@foreach($carts as $cart)
									<tr>
										<td>
											<a href="{{ route('guest.product', ['id' => $cart->products->id]) }}">
												<img src="{{ asset('/assets/images/products/'. $cart->products->image) }}" alt="..." height="100" width="100" class="img-fluid mx-auto d-block">
											</a>
										</td>
										<td>
											{{ $cart->products->product_name }} <br>
											<a href="#">save for later</a>
										</td>
										<td> &#8369; {{ $cart->products->presentPrice() }}</td>
										<td>{{ $cart->quantity }}</td>
										<td> &#8369; {{ $cart->presentPrice() }}</td>
										<td>
											<a href="#" class="btn btn-outline-danger btn-sm">
												<i class="fa fa-trash"></i>
											</a>
										</td>
									</tr>
								@endforeach
						    </tbody>
						</table>
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
@stop