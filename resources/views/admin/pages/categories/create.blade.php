@extends('guest.guest-layout')

@section('title', 'Landing Page')

@section('content')


<div class="container padding">
	<div class="row justify-content-center">
		<div class="col-md-8">

			<div class="card">
				<div class="card-header"></div>

				<div class="card-body">
					<form action="{{ isset($category) ? route('category.update', ['id' => $category->id]) : route('category.store') }}" method="POST">
						@if(isset($category))
							@method('PUT')
						@endif

						@csrf
						<div class="form-group">
						    <label for="name">Name</label>
						    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ isset($category) ? $category->name : '' }}" placeholder="Enter Category Name">
						</div>

						@error('name')
							<div class="alert alert-danger" role="alert">{{ $message }}</div>
					    @enderror

						<div class="form-group">
						    <label for="description">Description</label>
						    <textarea type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" placeholder="Enter Description">{{ isset($category) ? $category->description : '' }}</textarea>
						</div>

						@error('description')
							<div class="alert alert-danger" role="alert">{{ $message }}</div>
					    @enderror

					    @if(isset($category))
							<div class="form-group">
								<label>Status</label>
								<select type="combobox" name="category_status" class="form-control">
									<option value="1" {{ $category->status == true ? 'selected' : ''}}>Active</option>
									<option value="0" {{ $category->status == false ? 'selected' : ''}}>Inactive</option>
								</select>
							</div>
					    @endif

						<button type="submit" class="btn btn-primary">{{ isset($category) ? 'UPDATE' : 'SUBMIT' }}</button>
						<a href="{{ route('categories') }}" class="btn btn-danger">Back</a>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@stop