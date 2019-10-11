@extends('layouts.app')

@section('title', 'Order')

@section('content')

<nav aria-label="breadcrumb">
  	<ol class="breadcrumb">
    	<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    	<li class="breadcrumb-item active" aria-current="page">Orders</li>
  	</ol>
</nav>

<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-12">

			@if(session()->has('success'))
				<div class="alert alert-success">{{ session('success') }}</div>
			@endif

			<div class="card">
				<div class="card-header">
					Orders
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Order Number</th>
									<th>Created</th>
									<th>Amount</th>
									<th>Contact Person</th>
									<th>Status</th>
									<th></th>
								</tr>
							</thead>
							
							<tbody>
								@foreach($orders as $order)
									<tr>
										<td>
											<a href="#">{{ $order->order_number }}</a>
										</td>
										<td>{{ $order->created_at->diffForHumans() }}</td>
										<td>{{ $order->total_price }}</td>
										<td>{{ $order->contact_person }}</td>
										<td>
											<span class="{{ $order->statuses->class }}">{{ $order->statuses->status }}</span>
										</td>
										<td>
											<a href="{{ route('orders.edit', ['id' => $order->id]) }}" class="btn btn-outline-secondary btn-sm">
												<i class="fa fa-spinner"></i>
											</a>
											<a href="#" class="btn btn-outline-secondary btn-sm">
												<i class="fa fa-edit"></i>
											</a>
											<a href="#" class="btn btn-outline-secondary btn-sm">
												<i class="fa fa-print"></i>
											</a>
											<a href="#" class="btn btn-outline-secondary btn-sm">
												<i class="fa fa-download"></i>
											</a>
										</td>
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

@endsection
