@extends('layouts.master')

@section('title', 'Permissions')

@section('content')

<section class="content-header">
	<h3>Permissions</h3>
	<ol class="breadcrumb">
		
	</ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-xs-12">
			@include('layouts.alert-message')
		</div>
		
		<div class="col-xs-4">
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title">Add Permission</h3>
				</div>
				<div class="box-body">
					<form action="{{ isset($permission) ? route('permissions.update', $permission->id) : route('permissions.store') }}" method="POST">
						@if(isset($permission))
							@method('PUT')
						@endif
						@csrf
						<div class="form-group @error('name') has-error @enderror">
							<label for="name">Name</label>
							<input type="text" name="name" value="{{ isset($permission) ? $permission->name : '' }}" id="name" class="form-control" placeholder="Enter Name">

							@error('name')
					          <span class="help-block">{{ $message }}</span>
					        @enderror
						</div>

						<div class="form-group @error('display_name') has-error @enderror">
							<label for="display_name">Display Name</label>
							<input type="text" name="display_name" value="{{ isset($permission) ? $permission->display_name : '' }}" id="display_name" class="form-control" placeholder="Enter Display Name">
							@error('display_name')
					          <span class="help-block">{{ $message }}</span>
					        @enderror
						</div>

						<div class="form-group">
							<label for="description">Description</label>
							<textarea type="text" name="description" id="description" class="form-control" placeholder="Enter Description">{{ isset($permission) ? $permission->description : '' }}</textarea>
						</div>

						<div class="form-group">
							<button class="btn btn-primary btn-flat">{{ isset($permission) ? 'Update' : 'Create' }}</button>
							<a href="#" class="btn btn-danger btn-flat">Cancel</a>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-xs-8">
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title">Permissions List</h3>
				</div>

				<div class="box-body">
					<table id="example2" class="table table-bordered table-stripe table-hover">
						<thead>
							<tr>
								<th>Permissions</th>
								<th></th>
							</tr>
						</thead>

						<tbody>
							@foreach($permissions as $permission)
								<tr>
									<td>{{ $permission->name }}</td>
									
									<td>
										<form action="{{ route('permissions.destroy', $permission->id) }}" method="POST">
											@method('DELETE')
											@csrf
											<a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-primary btn-xs btn-flat" data-toggle="tooltip" data-placement="top" title="edit permission">
												<i class="fa fa-edit"></i>
											</a>

											<button type="submit" class="btn btn-warning btn-xs btn-flat" data-toggle="tooltip" data-placement="top" title="delete permission">
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
</section>

@endsection