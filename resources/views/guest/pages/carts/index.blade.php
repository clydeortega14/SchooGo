@extends('layouts.app')

@section('title', 'My Cart')

@section('content')

<nav aria-label="breadcrumb">
  	<ol class="breadcrumb">
    	<li class="breadcrumb-item"><a href="{{ route('display.products') }}">Go back Shopping</a></li>
    	<li class="breadcrumb-item active" aria-current="page">My Cart</li>
  	</ol>
</nav>

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
						<a href="{{ route('display.products') }}" class="btn btn-outline-secondary btn-sm">Continue Shopping </a>
					@else
						<div class="row">
							<div class="col-sm-12 col-md-12">
								<h5>You have no items in your cart</h5>
								<a href="{{ route('display.products') }}" class="btn btn-outline-secondary btn-sm">Go Shopping</a>
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
											<a href="{{ route('shop.product', ['id' => $cart->products->id]) }}">
												<img src="{{ asset('/assets/images/products/'. $cart->products->image) }}" alt="..." height="100" width="100" class="img-fluid mx-auto d-block">
											</a>
										</td>
										<td>
											{{ $cart->products->product_name }} <br>
											<a href="#">save for later</a>
										</td>
										<td>{{ $cart->products->presentPrice() }}</td>
										<td>{{ $cart->quantity }}</td>
										<td>{{ $cart->presentPrice() }}</td>
										<td>
											<a href="#" class="btn btn-outline-danger btn-sm">
												<i class="fa fa-trash"></i>
											</a>
										</td>
									</tr>
								@endforeach
						    </tbody>
							
							@if(count($carts) > 0)
						    <tfoot>
						    	<tr>
						    		<td></td>
						    		<td></td>
						    		<td>Total Items</td>
						    		<td>{{ $carts->sum('quantity') }}</td>
						    		<td>{{ number_format($carts->sum('total'), 2) }}</td>
						    		<td></td>
						    	</tr>
						    </tfoot>
						    @endif
						</table>
					</div>

				</div>
				
				@if(count($carts) > 0)
					<div class="card-footer">
						<div class="row justify-content-end">

							<div class="col-md-6">
								<div class="float-right">
									<a href="{{ route('checkout.index') }}" class="btn btn-primary btn-md">Proceed to checkout</a>
								</div>
							</div>
						</div>
					</div>
				@endif
			</div>
		</div>
	</div>
</div>

@stop