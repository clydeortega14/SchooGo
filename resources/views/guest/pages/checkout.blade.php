@extends('guest.guest-layout')

@section('title', 'Checkout')

@section('custom_css')

<style>
	#credit-card {
		
		padding: 18px;

	}
</style>

@section('content')

<div class="container-fluid">
	<div class="row padding">

		<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Delivery Address</h5>
					<hr>

					<div class="container">
						<div class="row padding">
							<div class="col-md-12 col-lg-12">
								<div class="form-group">
									<label>Firstname</label>
									<input type="text" name="firstname" class="form-control">
								</div>

								<div class="form-group">
									<label>Lastname</label>
									<input type="text" name="lastname" class="form-control">
								</div>

								<div class="form-group">
									<label>Email</label>
									<input type="email" name="email" class="form-control">
								</div>


								<div class="form-group">
									<label>Contact Number</label>
									<input type="text" name="contact" class="form-control">
								</div>

								<div class="form-group">
									<label>Address</label>
									<input type="text" name="addreess" class="form-control">
								</div>
								
								<div class="form-group">
									<label>City</label>
									<select type="combobox" name="city" class="form-control">
										<option value=""> --- Select City --- </option>
										<option value="1"> Talisay City </option>
										<option value="2"> Cebu City </option>
										<option value="3"> Naga City </option>
										<option value="3"> Mandaue City </option>
									</select>
								</div>

								<div class="form-group">
									<label>Zip Code</label>
									<input type="text" name="zip_code" class="form-control">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Order Summary</h5>
					
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Product</th>
									<th></th>
									<th>Qty</th>
									<th>total</th>
								</tr>
							</thead>

							<tbody>
								@foreach($carts as $cart)
									<tr>
										<td>
											<img src="{{ asset('/assets/images/products/'. $cart->products->image) }}" alt="..." height="70" width="70" class="img-fluid mx-auto d-block">
										</td>
										<td>{{ $cart->products->product_name }}</td>
										<td>{{ $cart->quantity }}</td>
										<td> &#8369; {{ $cart->presentPrice() }}</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>

					<p class="text-success">Have a coupon code ?</p>
					<div class="input-group">
					  	<input type="text" class="form-control" placeholder="Enter Coupon Code">
					  	<div class="input-group-append">
					    	<button class="btn btn-secondary" type="button">apply code</button>
					  	</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

						<ul class="list-group">
						  	<li class="list-group-item d-flex justify-content-between align-items-center">
						    	<h6>Subtotal</h6>
						    	<span> &#8369; {{ $carts->sum('total') }} </span>
						  	</li>

							<li class="list-group-item d-flex justify-content-between align-items-center">
							    <h6>Tax</h6>
							    <span class="text-danger"> +  &#8369; {{ $carts->sum('total') * config('app.tax') }}</span>
							</li>

						  	<li class="list-group-item d-flex justify-content-between align-items-center">
						    	<h6>Total</h6>
						    	<span class="text-success"> &#8369; {{ $carts->sum('total') + ( $carts->sum('total') * config('app.tax') ) }}</span>
						  	</li>
						</ul>
						<br>

						<button class="btn btn-primary btn-md float-right" type="button">ORDER NOW</button>
					</div>
				</div>
			</div>
		</div>

{{-- 		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
				</div>

				<div class="card-body">
					
					<form action="#" method="POST">
						<div class="row padding">

								<br>

								<h5>Payment Methods</h5>
								<hr>

								<div class="form-group">

									<div class="custom-control custom-radio custom-control-inline">
									    <input type="radio" class="custom-control-input" id="customRadio" name="payment_method" value="cash">
									    <label class="custom-control-label" for="customRadio">Cash On Delivery</label>
									</div>

									<div class="custom-control custom-radio custom-control-inline" data-toggle="collapse" data-target="#credit-card" id="creditId">
									    <input type="radio" class="custom-control-input" id="customRadio2" name="payment_method" value="credit">
									    <label class="custom-control-label" for="customRadio2">Credit Card</label>
									</div>

									<div class="collapse" id="credit-card">
										<div class="form-group">
											<div class="form-group">
												<label>Name on Card</label>
												<input type="text" name="name_of_card" class="form-control">
											</div>
										</div>

										<div class="form-group">
											<div class="form-group">
												<label>Card Number</label>
												<input type="text" name="card_number" class="form-control" placeholder="00000000000000000">
											</div>
										</div>

										<div class="form-group">
											<div class="row padding">
												<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
													<label>MM/YY</label>
													<input type="text" name="m_y" class="form-control" placeholder="MM / YY">
												</div>

												<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
													<label>CVV</label>
													<input type="text" name="cvv" class="form-control" placeholder="CVV">
												</div>

												<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
													<label>Postal Code</label>
													<input type="text" name="post_code" class="form-control" placeholder="Postal Code">
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<button type="button" class="btn btn-primary btn-md form-control">Pay Now</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div> --}}
	</div>
</div>


@stop
