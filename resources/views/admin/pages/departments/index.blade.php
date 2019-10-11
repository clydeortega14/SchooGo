@extends('layouts.app')

@section('title', 'Departments')

@section('content')

<div class="container-fluid">
	<nav aria-label="breadcrumb">
	  	<ol class="breadcrumb">
	    	<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
	    	<li class="breadcrumb-item active" aria-current="page">Departments</li>
	  	</ol>
	</nav>

	<div class="row justify-content-center">
		<div class="col-10">
			
			@if(session()->has('success'))
				<div class="alert alert-success">{{ session('success') }}</div>
			@endif

			<div class="card">
				<div class="card-header">
					<div class="float-right">
						<a href="{{ route('department.create') }}" class="btn btn-outline-secondary btn-sm">Add Department</a>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Category</th>
									<th>Department Name</th>
									<th>Description</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							
							<tbody>
								@foreach($departments as $department)
									<tr>
										<td>{{ $department->category->name }}</td>
										<td>{{ $department->name }}</td>
										<td>{{ $department->description }}</td>
										<td>
											<span class="{{ $department->status == true ? 'badge badge-success' : 'badge badge-danger'}}">
												{{ $department->status == true ? 'Active' : 'Inactive' }}
											</span>
										</td>
										<td>
											<a href="{{ route('department.edit', ['id' => $department->id]) }}" class="btn btn-primary btn-sm">
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