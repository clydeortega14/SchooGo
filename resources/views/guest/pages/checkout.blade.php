@extends('layouts.app')

@section('title', 'Checkout')

@section('content')

<div class="container-fluid">
	<form action="{{ route('checkout.store') }}" method="POST">

		@csrf
		<div class="row padding">
			
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="card">
					<div class="card-body">
						
						<div class="container">
							<div class="row padding">
								<h5 class="card-title">Your Information</h5>
								<hr>
								<div class="col-12">
									<div class="form-group">
										<label>Firstname</label>
										<input type="text" name="firstname" value="{{ auth()->user()->firstname }}" class="form-control @error('firstname') is-invalid @enderror ">
									</div>

									@error('firstname')
										<div class="alert alert-danger" role="alert">{{ $message }}</div>
								    @enderror

									<div class="form-group">
										<label>Lastname</label>
										<input type="text" name="lastname" value="{{ auth()->user()->lastname }}" class="form-control @error('lastname') is-invalid @enderror">
									</div>

									@error('lastname')
										<div class="alert alert-danger" role="alert">{{ $message }}</div>
								    @enderror

									<div class="form-group">
										<label>Email</label>
										<input type="email" name="email" value="{{ auth()->user()->email }}" class="form-control @error('email') is-invalid @enderror ">
									</div>

									@error('email')
										<div class="alert alert-danger" role="alert">{{ $message }}</div>
								    @enderror


									<div class="form-group">
										<label>Contact Number</label>
										<input type="text" name="contact" value="{{ auth()->user()->contact }}" class="form-control @error('contact') is-invalid @enderror">
									</div>

									@error('contact')
										<div class="alert alert-danger" role="alert">{{ $message }}</div>
								    @enderror

									<div class="form-group">
										<label>Address</label>
										<input type="text" name="address" value="{{ auth()->user()->address }}" class="form-control @error('address') is-invalid @enderror ">
									</div>

									@error('address')
										<div class="alert alert-danger" role="alert">{{ $message }}</div>
								    @enderror
								</div>

								<h5 class="card-title">Delivery Address</h5>
								<hr>

								<div class="col-12">
									<p>Delivery address is the same as your information ? <input type="checkbox" id="check-info"> </p>

									<div class="form-group">
										<label>Location </label>
										<input type="text" name="location" class="form-control @error('location') is-invalid @enderror ">
									</div>

									@error('location')
										<div class="alert alert-danger" role="alert">{{ $message }}</div>
								    @enderror

									<div class="form-group">
										<label>Contact Person </label>
										<input type="text" name="contact_person" class="form-control @error('contact_person') is-invalid @enderror ">
									</div>

									@error('contact_person')
										<div class="alert alert-danger" role="alert">{{ $message }}</div>
								    @enderror

									<div class="form-group">
										<label>Contact Number</label>
										<input type="text" name="contact_number" class="form-control @error('contact_number') is-invalid @enderror ">
									</div>

									@error('contact_number')
										<div class="alert alert-danger" role="alert">{{ $message }}</div>
								    @enderror
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
									@foreach($carts->where('confirmed', false) as $cart)
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
						
						@if(count($carts->where('confirmed', false)) > 0)
							<p class="text-success">Have a coupon code ?</p>
							<div class="col-xs-12 col-sm-12">
								<div class="input-group">
								  	<input type="text" class="form-control" placeholder="Enter Coupon Code">
								  	<div class="input-group-append">
								    	<button class="btn btn-secondary" type="button">apply code</button>
								  	</div>
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
								    	<input type="hidden" name="total_price" value="{{ $carts->sum('total') + ( $carts->sum('total') * config('app.tax') ) }}">
								  	</li>
								</ul>
								<br>

								<button class="btn btn-primary btn-md float-right" type="submit">ORDER NOW</button>
							</div>
						@endif
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
@stop

@section('custom_js')

<script>
	
	$(function(){

		var fname = $('input[name="firstname"]');
		var lname = $('input[name="lastname"]');
		var contact_person = fname.val() + ' ' + lname.val();
		var userAddress = $('input[name="address"]');
		var userContact = $('input[name="contact"]'); 
		var dLocation = $('input[name="location"]');
		var dContactP = $('input[name="contact_person"]');
		var dContactN = $('input[name="contact_number"]');

		$('#check-info').change(function(){

			if($(this).is(":checked")){

				dLocation.val(userAddress.val());
				dContactP.val($('input[name="firstname"]').val() +' '+ $('input[name="lastname"]').val());
				dContactN.val(userContact.val());

			}else{

				if(dLocation.val() !== '' || dContactP.val() !== '' || dContactN.val() !== ''){

					dLocation.val('');
					dContactP.val('');
					dContactN.val('');
				}
			}
		})

	});

</script>

@endsection

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
	


