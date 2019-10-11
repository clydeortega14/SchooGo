@extends('layouts.app')

@section('title', 'Display Products')

@section('content')

	<div class="container-fluid padding">

		<nav aria-label="breadcrumb">
		  	<ol class="breadcrumb">
		    	<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
		    	<li class="breadcrumb-item active" aria-current="page">Shop</li>
		  	</ol>
		</nav>

		<div class="row padding">
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			    <div class="list-group" id="list-tab" role="tablist">
			    	<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">
			    		All Categories
			    	</a>
			    	@foreach($categories as $category)
			      		<a class="list-group-item list-group-item-action" id="list-{{ $category->id }}-list" data-toggle="list" href="#list-{{ $category->id }}" role="tab" aria-controls="{{ $category->id }}">
			      			<i class="fa fa-notebook"></i>
			      			<span>{{ $category->name }}</span>
			      		</a>
			    	@endforeach
			    </div>
			</div>
		  	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
			    <div class="tab-content" id="nav-tabContent">
			    	<div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
						<div class="row padding">
							@foreach($products as $product)
								@include('partials.products.list')
							@endforeach
						</div>
			    	</div>
			    	@foreach($categories as $category)
				      	<div class="tab-pane fade" id="list-{{ $category->id }}" role="tabpanel" aria-labelledby="list-{{ $category->id }}-list">
				      		<div class="row padding">
				      			@foreach($category->products as $product)
									@include('partials.products.list')		
				      			@endforeach
				      		</div>
				      	</div>
			    	@endforeach
			    </div>
			</div>
		</div>
	</div>

@endsection