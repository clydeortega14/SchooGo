@extends('layouts.master')

@section('title', 'Products')	

@section('custom_css')
  <style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
  </style>

@section('content')

<section class="content-header">
	<h3>Products</h3>
	<ol class="breadcrumb">
    	<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    	<li class="breadcrumb-item active" aria-current="page">Products</li>
  	</ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			@if(session()->has('success'))
				<div class="alert alert-success">{{ session('success') }}</div>
			@endif
			<div class="box box-primary">
				<div class="box-header">
					<button class="btn btn-primary btn-sm btn-flat pull-right" data-toggle="modal" data-target="#add-product">
						Add Products
					</button>
					{{-- MODAL --}}
					@include('admin.pages.products.modals._add-product')
				</div>
				<div class="box-body">
					<div class="table-responsive">
						<table id="example2" class="table table-striped table-bordered table-hover">
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
											<span class="{{ $product->status == true ? 'label label-success' : 'label label-danger'}}">
												{{ $product->status == true ? 'Active' : 'Inactive' }}
											</span>
										</td>
										<td>
											<form action="{{ route('two.methods', ['id' => $product->id]) }}" method="POST">

												@csrf
												<a href="#" class="btn btn-primary btn-xs btn-flat button-edit" data-toggle="modal" data-target="#edit-product-{{$product->id}}">
													<i class="fa fa-edit"></i>
												</a> |

												<button type="submit" class="btn btn-warning btn-xs btn-flat" name="product_update_status">
													<i class="fa fa-edit"></i>
												</button> | 

												<button type="submit" class="btn btn-danger btn-xs btn-flat" name="delete_product">
													<i class="fa fa-trash"></i>
												</button>
											</form>

										</td>
									</tr>
									@include('admin.pages.products.modals._edit-product')
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

@section('custom_js')

<script type="text/javascript">
	
	$(function(){

		//DEPARTMENT DROPDOWN

		$('select[name="category_id"]').on('change', function(){

			var categoryId       = $(this).val();
			var departmentOption = $('select[name="department_id"]');

			$.ajax({

				method : `GET`,
				url : `/category/department/${categoryId}`,

			}).done(res => {

				departmentOption.empty();

				departmentOption.prepend(`<option value=""> N / A </option>`)

				res.departments.forEach(function(department){

					departmentOption.append(`<option value="${department.id}">${department.name }</option>`);
					
				});

			}).fail(error => {

				console.log(error)
			});

		});
		/* END DEPARTMENT DROPDOWN */
	});
</script>

@endsection