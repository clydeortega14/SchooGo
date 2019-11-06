@extends('layouts.master')

@section('title', 'Departments')

@section('content')

	<section class="content-header">
		<h1>Departments</h1>
		  	<ol class="breadcrumb">
		    	<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
		    	<li class="breadcrumb-item active" aria-current="page">Departments</li>
		  	</ol>
	</section>

	<section class="content">
		<div class="row justify-content-center">
			<div class="col-xs-12 col-md-4">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Add Department</h3>
					</div>
					<form action="{{ isset($department) ? route('department.update', ['id' => $department->id]) :route('department.store') }}" method="POST">
						@if(isset($department))
							@method('PUT')
						@endif
						@csrf
						<div class="box-body">
							<div class="form-group">
			    				<label for="categoies">categoies</label>
	                  			<select type="combobox" name="category" class="form-control" id="categories">
	                  				@foreach($categories as $category)
	                  					<option value="{{ isset($department) ? $department->category_id : $category->id}}">{{ isset($department) ? $department->category->name : $category->name }}</option>
	                  				@endforeach
	                  			</select>
			    			</div>

							<div class="form-group">
			    				<label for="name">Name</label>
	                  			<input type="text" name="name" value="{{ isset($department) ? $department->name : '' }}" class="form-control" id="name" placeholder="Enter Name">
			    			</div>

			    			<div class="form-group">
			    				<label for="description">Description</label>
	                  			<textarea type="text" name="description" class="form-control" id="description" placeholder="Enter Description">{{ isset($department) ? $department->description : '' }}</textarea>
			    			</div>

			    			<button type="submit" class="btn btn-success btn-flat">{{ isset($department) ? 'Update' : 'Submit' }}</button>
		    				<a href="{{ route('departments') }}" class="btn btn-danger btn-flat">Cancel</a>
						</div>
					</form>
				</div>
			</div>
			<div class="col-xs-12 col-md-8">
				
				@if(session()->has('success'))
					<div class="alert alert-success">{{ session('success') }}</div>
				@endif

				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Departments</h3>
					</div>
					<div class="box-body">
						<div class="table-responsive">
							<table id="example2" class="table table-bordered table-hover">
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
												<span class="{{ $department->status == true ? 'label label-success' : 'label label-danger'}}">
													{{ $department->status == true ? 'Active' : 'Inactive' }}
												</span>
											</td>
											<td>
												<form action="{{ route('department.status.update', ['id' => $department->id]) }}" method="POST">
													@method('PUT')
													@csrf
													<a href="{{ route('department.edit', ['id' => $department->id]) }}" class="btn btn-primary btn-xs btn-flat">
														<i class="fa fa-edit"></i>
													</a>

													<button type="submit" class="btn btn-warning btn-xs btn-flat">
														<i class="fa fa-edit"></i>
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
	</section>

@stop