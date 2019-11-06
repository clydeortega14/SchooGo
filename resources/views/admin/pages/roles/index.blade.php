@extends('layouts.master')

@section('title', 'Roles')

@section('content')

<section class="content-header">
	<h3>Roles</h3>
	<ol class="breadcrumb">
		<li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    	<li class="active">Roles</li>
	</ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title">Roles Lists</h3>
					<a href="{{ route('roles.create') }}" class="btn btn-primary btn-flat pull-right">Add role</a>
				</div>

				<div class="box-body">
					<table id="example2" class="table table-bordered table-stripe table-hover">
						<thead>
							<tr>
								<th>Name</th>
								<th>Permissions</th>
								<th>Actions</th>
							</tr>
						</thead>

						<tbody>
							@foreach($roles as $role)
								<tr>
									<td>{{ $role->name }}</td>
									<td>
										<span class="label label-default"> has {{ count($role->permissions) }} permissions </span>
									</td>
									
									<td width="50">
										<a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary btn-xs btn-flat" data-toggle="tooltip" data-placement="top" title="edit role">
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
</section>
@endsection