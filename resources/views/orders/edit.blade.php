@extends('layouts.app')

@section('title', 'Process Order')

@section('content')

<nav aria-label="breadcrumb">
  	<ol class="breadcrumb">
    	<li class="breadcrumb-item"><a href="{{ route('orders.index') }}">Orders</a></li>
    	<li class="breadcrumb-item active" aria-current="page">Confirmation Order</li>
  	</ol>
</nav>

<div class="container padding">
	<div class="row padding">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<div class="row justify-content-between">
						<div class="col-xs-12 col-sm-12 col-md-6">
							<div class="form-group">
								<label>Name</label>
								<input type="text" value="{{ $order->contact_person }}" class="form-control input-sm" readonly>
							</div>

							<div class="form-group">
								<label>Email</label>
								<input type="email" value="{{ $order->user->email }}" class="form-control input-sm" readonly>
							</div>

							<div class="form-group">
								<label>Address</label>
								<input type="text" value="{{ $order->address }}" class="form-control input-sm" readonly>
							</div>

							<div class="form-group">
								<label>Contact</label>
								<input type="text" value="{{ $order->contact_number }}" class="form-control input-sm" readonly>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-6">
				
							<form>
								<div class="form-group">
									<label>Select Shipper </label>
									<select type="combobox" name="shipper" class="form-control">
										<option> -- Shipper -- </option>
										@foreach($shippers as $shipper)
											@if($shipper->hasRole('shipper'))
												<option> {{ $shipper->firstname }} </option>
											@endif
										@endforeach
									</select>
								</div>
								
								<div class="form-group">
									<label>Date of arrival</label>
									<input type="date" name="arrival_date" class="form-control">
								</div>
								
								<div class="float-right">
									<button type="submit" class="btn btn-primary">Confirm</button>
								</div>
							</form>

						</div>

						<div class="col-12">
							<div class="table-responsive">
								<table class="table table-striped">
									<thead>
										<tr>
											<th>Product</th>
											<th></th>
											<th>Quantity</th>
											<th>Total</th>
										</tr>
									</thead>

									<tbody>
										@foreach($order->user->carts as $cart)
											<tr>
												<td>
													<img src="{{ asset('/assets/images/products/'.$cart->products->image)}}" alt="..." height="70" width="70" class="img-fluid mx-auto d-block">
												</td>
												<td>{{ $cart->products->product_name }}</td>
												<td>{{ $cart->quantity}}</td>
												<td>{{ $cart->presentPrice() }}</td>
											</tr>
										@endforeach
									</tbody>
								</table>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection