@extends('layouts.master')

@section('title', 'Add Role')

@section('content')
	
	<section class="content-header">
		<h3>Add Role</h3>
		<ol class="breadcrumb">
			<li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="{{ route('roles.index') }}"><i class="fa fa-users"></i> Roles</a></li>
	    	<li class="active">add role</li>
		</ol>
	</section>

	<section class="content container-fluid">
		<div class="row">
			<div class="col-xs-12">
				@include('layouts.alert-message')
			</div>
			<form action="{{ isset($role) ? route('roles.update', $role->id) : route('roles.store') }}" method="POST">
				@if(isset($role))
					@method('PUT')
				@endif
				@csrf
				<div class="col-xs-6">
					<div class="box box-primary">
						<div class="box-header">
							
						</div>

						<div class="box-body">
							<div class="input-group @error('name') has-error @enderror">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
                				<input type="text" name="name" value="{{ isset($role) ? $role->name : old('name')  }}" class="form-control" placeholder="Enter Name">
							</div>
                				@error('name')
                				<span class="help-block">{{ $message }}</span>
                				@enderror
							<br>
							<div class="input-group @error('display_name') has-error @enderror">
								<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                				<input type="text" name="display_name" value="{{ isset($role) ? $role->display_name : old('display_name')  }}" class="form-control" placeholder="Enter Display Name">
							</div>
							@error('display_name')
							<span class="help-block text-danger">{{ $message }}</span>
            				@enderror
							<br>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                				<textarea type="text" name="description" value="{{ isset($role) ? $role->description : old('description')  }}"class="form-control" placeholder="Enter Display Name"></textarea>
							</div>
							<br>
							<div class="form-group">
								<button type="submit" name="edit-user" class="btn btn-primary btn-flat">Save Changes</button>
								<a href="{{ route('roles.index') }}" class="btn btn-danger btn-flat">Cancel</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xs-6">
					<div class="box box-primary">
						<div class="box-header">
							<h3 class="box-title">Permissions</h3>
						</div>

						<div class="box-body">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>
											<input type="checkbox" name="check-all" id="#check-all">
										</th>
										<th>permissions</th>
									</tr>
								</thead>

								<tbody>
									@foreach($permissions as $permission)
										@if(isset($role))	
										@php
											$checked = '';
										@endphp
										@foreach($role->permissions as $role_permission)
											@if($role_permission->id == $permission->id)
												@php
													$checked = 'checked';
												@endphp
											@endif
										@endforeach
										@endif
										<tr>
											<td>
												<input type="checkbox" name="permissions[]" id="#role-id" value="{{ $permission->id }}" {{ isset($role) ? $checked : '' }}>
											</td>
											<td>{{ $permission->name }}</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</form>
		</div>
		
	</section>

@endsection