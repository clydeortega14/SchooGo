@extends('guest.guest-layout')

@section('title', 'Landing Page')

@section('content')

<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-xs-12 col-sm-12 col-md-12">

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
											<img src="{{ asset('/assets/images/products/'.$product->image) }}" alt="" class="img-fluid" width="70" height="70">
										</td>
										<td>{{ $product->product_name }}</td>
										<td>{{ $product->category->name }}</td>
										<td>{{ $product->department->name }}</td>
										<td>{{ $product->presentPrice() }}</td>
										<td>{{ $product->quantity }}</td>
										<td>
											<span class="{{ $product->status == true ? 'badge badge-success' : 'badge badge-danger' }}">
												{{ $product->status == true ? 'Available' : 'Out of stock' }}
											</span>
										</td>
										<td>
											<form action="{{ route('product.destroy', ['id' => $product->id]) }}" method="POST">
												@method('DELETE')

												@csrf
												<a href="{{ route('product.edit', ['id' => $product->id]) }}" class="btn btn-outline-secondary btn-sm">
													<i class="fa fa-edit"></i>
												</a>
												<button type="submit" class="btn btn-outline-danger btn-sm">
													<i class="fa fa-trash"></i>
												</button>
											</form>
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