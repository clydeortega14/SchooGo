@extends('layouts.app')

@section('title', 'Landing Page')

@section('content')

<div class="container padding">

	<nav aria-label="breadcrumb">
	  	<ol class="breadcrumb">
	    	<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
	    	<li class="breadcrumb-item"><a href="{{ route('departments.index') }}">Departments</a></li>
	    	<li class="breadcrumb-item active" aria-current="page">Department Create</li>
	  	</ol>
	</nav>

	<div class="row justify-content-center">
		<div class="col-md-8">
			
			<div class="card">
				<div class="card-header"></div>

				<div class="card-body">
					<form action="{{ isset($department) ? route('department.update', ['id' => $department->id]) : route('department.store') }}" method="POST">
						
						@if(isset($department))
							@method('PUT')
						@endif

						@csrf

						<div class="form-group">
						    <label for="category">Category</label>
						 
						    <select type="combobox" name="category" id="category" class="form-control @error('category') is-invalid @enderror">
						    	<option value="{{ isset($department) ? $department->category->id : '' }}"> {{ isset($department) ? $department->category->name : ' -- Select Category -- '  }} </option>
						    	@include('partials.categories.department-categories')
						    </select>
						</div>

						@error('category')
							<div class="alert alert-danger" role="alert">{{ $message }}</div>
					    @enderror

						<div class="form-group">
						    <label for="name">Name</label>
						    <input type="text" name="name" value="{{ isset($department) ? $department->name : old('name') }}" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter Category Name">
						</div>

						@error('name')
							<div class="alert alert-danger" role="alert">{{ $message }}</div>
					    @enderror

						<div class="form-group">
						    <label for="description">Description</label>
						    <textarea type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" placeholder="Enter Description">{{ isset($department) ? $department->description : old('description') }}</textarea>
						</div>

						@error('description')
							<div class="alert alert-danger" role="alert">{{ $message }}</div>
					    @enderror

					    @if(isset($department))
							<div class="form-group">
								<label for="status">Status</label>
								<select class="form-control" name="status" id="status">
									<option value="1" {{ $department->status == true ? 'selected' : ''}}>Active</option>
									<option value="0" {{ $department->status == false ? 'selected' : ''}}>Inactive</option>
								</select>
							</div>
					    @endif

						<button type="submit" class="btn btn-primary">{{ isset($department) ? 'Update' : 'Submit' }}</button>
						<a href="{{ route('departments') }}" class="btn btn-danger">Back</a>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@stop