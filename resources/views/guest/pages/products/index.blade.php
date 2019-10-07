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
			
			<div class="col-md-9 d-flex align-items-center">
				<div class="tab-content">
					<div class="tab-pane active" id="all-categories">
						<div class="row padding">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
								<div class="card">
					                <img class="card-img-top" src="/assets/images/products/macbook.jpg" alt="..." class="img-fluid" height="250" width="250">
					                <div class="card-body">
					                    <h4 class="card-title">Macbook Pro</h4>
					                    <p class="card-text">
					                        This is the latest release macbook
					                    </p>
					                    <h4 class="card-title price">52, 000.00</h4>
					                    <a href="#" class="btn btn-outline-secondary btn-md">Select</a>
					                </div>
					            </div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
								<div class="card">
					                <img class="card-img-top" src="/assets/images/products/macbook.jpg" alt="..." class="img-fluid" height="250" width="250">
					                <div class="card-body">
					                    <h4 class="card-title">Macbook Pro</h4>
					                    <p class="card-text">
					                        This is the latest release macbook
					                    </p>
					                    <h4 class="card-title price">52, 000.00</h4>
					                    <a href="#" class="btn btn-outline-secondary btn-md">Select</a>
					                </div>
					            </div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
								<div class="card">
					                <img class="card-img-top" src="/assets/images/products/macbook.jpg" alt="..." class="img-fluid" height="250" width="250">
					                <div class="card-body">
					                    <h4 class="card-title">Macbook Pro</h4>
					                    <p class="card-text">
					                        This is the latest release macbook
					                    </p>
					                    <h4 class="card-title price">52, 000.00</h4>
					                    <a href="#" class="btn btn-outline-secondary btn-md">Select</a>
					                </div>
					            </div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
								<div class="card">
					                <img class="card-img-top" src="/assets/images/products/macbook.jpg" alt="..." class="img-fluid" height="250" width="250">
					                <div class="card-body">
					                    <h4 class="card-title">Macbook Pro</h4>
					                    <p class="card-text">
					                        This is the latest release macbook
					                    </p>
					                    <h4 class="card-title price">52, 000.00</h4>
					                    <a href="#" class="btn btn-outline-secondary btn-md">Select</a>
					                </div>
					            </div>
							</div>
						</div>		
					</div>
				</div>
			</div>
		</div>
	</div>
@stop