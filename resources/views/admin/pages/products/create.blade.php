@extends('guest.guest-layout')

@section('title', 'Landing Page')

@section('content')

<div class="container-fluid">
	<div class="row justify-content-center">
		
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			
			<div class="card">
				<div class="card-header"></div>

				<div class="card-body">
					<form action="#" method="POST">
						
						<div class="form-group">
							<label for="category_id">Category</label>
							<select type="combobox" name="category_id" id="category_id" class="form-control">
								<option value=""> Select Category </option>
								@include('partials.categories.department-categories')
							</select>
						</div>

						<div class="form-group">
							<label for="department_id">Department</label>
							<select type="combobox" name="department_id" id="department_id" class="form-control">
								{{-- <option> Select Department </option> --}}
							</select>
						</div>

						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" name="name" id="name" class="form-control" placeholder="Enter product name">
						</div>

						<div class="form-group">
							<label for="description">Description</label>
							<textarea type="text" name="description" id="description" class="form-control"></textarea>
						</div>

						<div class="row">
							<div class="col-sm-12 col-md-6">
								<div class="form-group">
									<label for="price">Price</label>
									<input type="text" name="price" id="price" class="form-control" placeholder="Product price">
								</div>
							</div>

							<div class="col-sm-12 col-md-6">
								<div class="form-group">
									<label for="quantity">Quantity</label>
									<input type="number" name="quantity" id="quantity" class="form-control" min="1" value="1">
								</div>
							</div>
						</div>

						<button type="submit" class="btn btn-primary">Submit</button>
						<a href="{{ route('products.index') }}" class="btn btn-danger">Back</a>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>

@stop

@section('custom_js')

<script type="text/javascript">
	
	$(function(){

		$('select[name="category_id"]').on('change', function(){

			var categoryId = $(this).val();
			var departmentOption = $('select[name="department_id"]');

			$.ajax({

				method : `GET`,
				url : `/category/department/${categoryId}`,
			}).done(res => {

				departmentOption.empty();
				departmentOption.prepend(`<option value=""> select department </option>`)
				res.departments.forEach(function(department){

					departmentOption.append(`<option value="${department.id}">${department.name }</option>`);
					
				});

			}).fail(error => {
				console.log(error)
			});

		});

	});
</script>

@endsection