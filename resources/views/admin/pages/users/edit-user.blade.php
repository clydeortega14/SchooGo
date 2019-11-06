@extends('layouts.master')

@section('title', 'Edit User')

@section('content')
	
	<section class="content-header">
		<h3>Edit User</h3>
		<ol class="breadcrumb">
			<li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="{{ route('users.index') }}"><i class="fa fa-users"></i> Users</a></li>
	    	<li class="active">edit user</li>
		</ol>
	</section>

	<section class="content container-fluid">
		<div class="row">
			<div class="col-xs-12">
				@include('layouts.alert-message')
			</div>
			<form action="{{ route('users.update', ['id' => $user->id]) }}" method="POST">
				@method('PUT')
				@csrf
				<div class="col-xs-6">
					<div class="box box-primary">
						<div class="box-header">
							{{-- <h3 class="box-title">Edit User</h3> --}}
						</div>

						<div class="box-body">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
                				<input type="text" name="username" class="form-control" value="{{ $user->username }}">
							</div>
							<br>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                				<input type="email" name="email" class="form-control" value="{{ $user->email }}">
							</div>
							<br>
							<div class="form-group">
								<button type="submit" name="edit-user" class="btn btn-primary btn-flat">Save Changes</button>
								<a href="{{ route('users.index') }}" class="btn btn-danger btn-flat">Cancel</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xs-6">
					<div class="box box-primary">
						<div class="box-header">
							<h3 class="box-title">Roles</h3>
						</div>

						<div class="box-body">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>
											<input type="checkbox" name="check-all" id="#check-all">
										</th>
										<th>Roles</th>
										<th>Permissions</th>
									</tr>
								</thead>

								<tbody>
									@foreach($roles as $role)
										@php
											$checked = '';
										@endphp
										@foreach($user->roles as $user_role)
											@if($user_role->id == $role->id)
												@php
													$checked = 'checked';
												@endphp
											@endif
										@endforeach
										<tr>
												<td>
													<input type="checkbox" name="roles[]" id="#role-id" value="{{ $role->id }}" {{ $checked }}>
												</td>
												<td>{{ $role->name }}</td>
												<td>
													<span class="label label-info">has {{ count($role->permissions) }} permissions</span>
													<a href="#" data-toggle="tooltip" data-placement="top" title="see permissions">
														<i class="fa fa-eye"></i>
													</a>
												</td>
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