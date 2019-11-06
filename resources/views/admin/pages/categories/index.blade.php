@extends('layouts.master')

@section('title', 'Categories')


@section('content')

<section class="content-header">
  <h1>
    Categories
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Categories</li>
  </ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-xs-12 col-md-4">
			<div class="box box-primary">
		    	<div class="box-header with-border">
		    		<h3 class="box-title">
		    			add category
		    		</h3>
		    	</div>

		    	<form action="{{ isset($category) ? route('category.update', ['id' => $category->id]) : route('category.store') }}" method="POST">
					@if(isset($category))
						@method('PUT')
					@endif
		    		@csrf
		    		<div class="box-body">
		    			<div class="form-group">
		    				<label for="name">Name</label>
                  			<input type="text" name="name" value="{{ isset($category) ? $category->name : '' }}" class="form-control" id="name" placeholder="Enter Name">
		    			</div>

		    			<div class="form-group">
		    				<label for="description">Description</label>
                  			<textarea type="text" name="description" class="form-control" id="description" placeholder="Enter Description">{{ isset($category) ? $category->description : '' }}</textarea>
		    			</div>

		    			<button type="submit" class="btn btn-success btn-flat">{{ isset($category) ? 'Update' : 'Submit' }}</button>
		    			<a href="{{ route('categories.index') }}" class="btn btn-danger btn-flat">Cancel</a>
		    		</div>
		    	</form>
		    </div>
		</div>
		<div class="col-sm-12 col-md-8">
			<div class="box box-primary">
		    	<div class="box-header with-border">
		    		<h3 class="box-title">
		    			table categories
		    		</h3>
		    	</div>

		    	<div class="box-body">
		    		<table id="example2" class="table table-bordered table-hover">
		    			<thead>
		    				<tr>
		    					<th>name</th>
		    					<th>description</th>
		    					<th>status</th>
		    					<th>action</th>
		    				</tr>
		    			</thead>
		    			<tbody>
		    				@foreach($categories as $category)	
			    				<tr>
			    					<td>{{ $category->name}}</td>
			    					<td>{{ $category->description }}</td>
			    					<td>
			    						<span class="{{ $category->status == true ? 'label label-success' : 'label label-danger' }}">{{ $category->status == true ? 'Active' : 'Inactive' }}</span>
			    					</td>
			    					<td>
			    						<form action="{{ route('status.update', ['id' => $category->id])}}" method="POST">
			    							@method('PUT')
			    							@csrf
				    						<a href="{{ route('category.edit', ['id' => $category->id]) }}" class="btn btn-primary btn-flat btn-xs">
				    							<i class="fa fa-edit"></i>
				    						</a>

				    						<button type="submit" class="btn btn-warning btn-flat btn-xs">
				    							<i class="fa fa-download"></i>
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
</section>


	
	
    
{{-- 
<div class="container-fluid">

	<nav aria-label="breadcrumb">
	  	<ol class="breadcrumb">
	    	<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
	    	<li class="breadcrumb-item active" aria-current="page">Categories</li>
	  	</ol>
	</nav>

	<div class="row justify-content-center">
		<div class="col-10">
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
						<table class="table table-striped">
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
 --}}
@stop