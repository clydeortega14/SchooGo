@extends('guest.guest-layout')

@section('title', 'Landing Page')

@section('content')


<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-10">
			@if(session()->has('success'))
				<div class="alert alert-success" role="alert">{{ session('success') }}</div>
			@endif

			<div class="card">
				<div class="card-header">
					<div class="float-right">
						<a href="{{ route('category.create') }}" class="btn btn-outline-secondary btn-sm">Add Category</a>
					</div>
				</div>

				<div class="card-body">
					
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Name</th>
									<th>Description</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>

							<tbody>
								@foreach($categories as $category)
									<tr>
										<td>{{ $category->name }}</td>
										<td>{{ $category->description }}</td>
										<td>
											<span class="{{ $category->status == true ? 'badge badge-success' : 'badge badge-danger' }}">
												{{ $category->status == true ? 'Active' : 'Inactive' }}
											</span>
										</td>
										<td>
											<a href="{{ route('category.edit', ['id' => $category->id]) }}" class="btn btn-outline-secondary btn-sm">
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