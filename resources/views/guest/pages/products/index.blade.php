@extends('guest.guest-layout')

@section('title', 'Landing Page')

@section('content')
	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-3">
				<div class="list-group nav nav-tabs">
				  	<a href="#all-categories" class="list-group-item list-group-item-action active" data-toggle="tab">
				  		All Categories
				  	</a>
					@foreach($categories as $category)
					  	<a href="#{{ $category->name }}" class="list-group-item list-group-item-action" data-toggle="tab">
					  		<i class="fa fa-book"></i>
					  		<span>{{ $category->name }}</span>
					  	</a>
				  	@endforeach
				</div>
			</div>
			
			<div class="col-md-9">
				<div class="tab-content">
					<div class="tab-pane active" id="all-categories">
						<div class="row padding">
							@foreach($products as $product)
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
									<div class="card">
						                <img class="card-img-top" src="/assets/images/products/bible.jpg" alt="...">
						                <div class="card-body">
						                    <h4 class="card-title">{{ $product->product_name}}</h4>
						                    <p class="card-text">
						                        {{ $product->product_description}}
						                    </p>
						                    <h4 class="card-title price">{{ number_format($product->price, 2) }}</h4>
						                    <a href="{{ route('products.show', ['id' => $product->id]) }}" class="btn btn-outline-secondary btn-md">Select</a>
						                </div>
						            </div>
								</div>
							@endforeach
						</div>		
					</div>
				</div>
			</div>
		</div>
	</div>
@stop