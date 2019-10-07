@extends('guest.guest-layout')

@section('title', 'Landing Page')

@section('content')

<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">

			@if(session()->has('success'))
				<div class="alert alert-success">{{ session('success') }}</div>
			@endif

			<div class="card">
				<div class="card-header">
					<div class="float-right">
						<a href="{{ route('product.create') }}" class="btn btn-outline-secondary btn-sm">Add Products</a>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Image</th>
									<th>Name</th>
									<th>Category</th>
									<th>Department</th>
									<th>Price</th>
									<th>Quantity</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							
							<tbody>
								@foreach($products as $product)
									<tr>
										<td>
											<img src="{{ asset('/assets/images/products/macbook.jpg') }}" alt="" class="img-fluid" width="50" height="50">
										</td>
										<td>{{ $product->product_name }}</td>
										<td>{{ $product->product_description }}</td>
										<td>{{ $product->category_id }}</td>
										<td>{{ $product->department_id }}</td>
										<td>{{ $product->price }}</td>
										<td>{{ $product->quantity }}</td>
										<td>{{ $product->status }}</td>
										<td>
											<a href="#" class="btn btn-outline-secondary btn-sm">
												<i class="fa fa-edit"></i>
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

@stop