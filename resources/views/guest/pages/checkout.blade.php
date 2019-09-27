@extends('guest.guest-layout')

@section('title', 'Checkout')

@section('custom_css')

<style>
	#credit-card {
		
		padding: 18px;

	}
</style>

@section('content')

<div class="container">
	<div class="row padding">

		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">Checkout </h5>
				</div>

				<div class="card-body">
					
					<form action="#" method="POST">
						<div class="row padding">
							{{-- YOUR CART --}}
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
								<h5>Your Cart</h5>
								<hr>
								<ul class="list-group">
									@foreach($carts as $cart)
										<li class="list-group-item d-flex justify-content-between align-items-center">
										    {{ $cart->products->product_name}}
										    <span> &#8369; {{ $cart->presentPrice() }}</span>
										  </li>
									@endforeach
								</ul>
								<br>
								
								<h5>Shipping</h5>
								<hr>
								<ul class="list-group">
								  	<li class="list-group-item d-flex justify-content-between align-items-center">
								    	Subtotal
								    	<span> &#8369; {{ $carts->sum('total') }}</span>
								  	</li>

									<li class="list-group-item d-flex justify-content-between align-items-center">
									    Tax
									    <span class="text-danger"> +  &#8369; {{ $carts->sum('total') * config('app.tax') }}</span>
									</li>

								  	<li class="list-group-item d-flex justify-content-between align-items-center">
								    	Total
								    	<span class="text-success"> &#8369; {{ $carts->sum('total') + ( $carts->sum('total') * config('app.tax') ) }}</span>
								  	</li>
								</ul>
								<br>
								{{-- <div class="card card-body">
									<div class="input-group">
									  	<input type="text" class="form-control d-fex justify-content-right" placeholder="Enter Coupon Code">
									  	<div class="input-group-append">
									    	<button class="btn btn-secondary" type="button">APPLY CODE</button>
									  	</div>
									</div>
								</div> --}}
							</div>
							
							{{-- BILLING ADDRESS --}}
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
								<h5>Billing Address</h5>
								<hr>

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
		</div>
	</div>
</div>


@stop
