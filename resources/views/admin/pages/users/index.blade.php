@extends('layouts.master')

@section('title', 'Users')

@section('content')

<section class="content-header">
	<h3>Users</h3>
	<ol class="breadcrumb">
		<li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    	<li class="active">Users</li>
	</ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-xs-12">
			@if(session()->has('success'))
				<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
					<h4>
						<i class="icon fa fa-check"></i>
						<span>Alert!</span>
					</h4>
					{{ session('success') }}
				</div>
			@endif
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title">Users Lists</h3>
				</div>

				<div class="box-body">
					<table id="example2" class="table table-bordered table-stripe table-hover">
						<thead>
							<tr>
								<th>Username</th>
								<th>Email</th>
								<th>Roles</th>
								<th>Status</th>
								<th>Actions</th>
							</tr>
						</thead>

						<tbody>
							@foreach($users as $user)
								<tr>
									<td>{{ $user->username }}</td>
									<td>{{ $user->email }}</td>
									<td>
										<span class="label label-default">has {{ count($user->roles ) }} Roles</span>
									</td>
									<td>
										<span class="{{ $user->status == true ? 'label label-success' : 'label label-danger'}}">
											{{ $user->status == true ? 'Active' : 'Inactive' }}
										</span>
									</td>
									<td>
										<a href="{{ route('users.edit', ['id' => $user->id]) }}" class="btn btn-primary btn-xs btn-flat">
											<i class="fa fa-edit"></i>
										</a>
										<a href="#" class="btn {{ $user->status == true ? 'btn-danger' : 'btn-success'}} btn-xs btn-flat" data-toggle="modal" data-target="#change-status-{{ $user->id}}">
											<i class="fa fa-eye"></i>
										</a>
									</td>
								</tr>
								
								@include('admin.pages.users.modals.change-status')
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection