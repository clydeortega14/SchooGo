@extends('guest.guest-layout')

@section('title', 'Landing Page')

@section('content')
	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
				<div class="list-group nav nav-tabs">
				  	<a href="#all-categories" class="list-group-item list-group-item-action active" data-toggle="tab">
				  		All Categories
				  	</a>
				  	<a href="#" class="list-group-item list-group-item-action" data-toggle="tab">
				  		<i class="fa fa-book"></i>
				  		<span>Books</span>
				  	</a>

				  	<a href="#" class="list-group-item list-group-item-action" data-toggle="tab">
				  		<i class="fa fa-book"></i>
				  		<span>School Supplies</span>
				  	</a>

				  	<a href="#" class="list-group-item list-group-item-action" data-toggle="tab">
				  		<i class="fa fa-book"></i>
				  		<span>Laptops</span>
				  	</a>

				  	<a href="#" class="list-group-item list-group-item-action" data-toggle="tab">
				  		<i class="fa fa-book"></i>
				  		<span>Shoes</span>
				  	</a>

				</div>
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
				
				<h3>Shop</h3>
				<hr>

				<div class="tab-content">
					<div class="tab-pane active" id="all-categories">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
					    		<div class="card">
						            <img src="/assets/images/products/macbook.jpg" alt="..." class="img-fluid mx-auto d-block" height="200" width="200">
						            <div class="card-body">
						                <h5 class="card-title">Macbook Pro</h5>
						                <p class="card-text">
						                    This is the latest release macbook
						                </p>
						                <h6 class="card-title">PHP 52, 000.00</h6>
						                <a href="#" class="btn btn-outline-secondary btn-md">Select</a>
						            </div>
						        </div>
					    	</div>

					    	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
					    		<div class="card">
						            <img src="/assets/images/products/macbook.jpg" alt="..." class="img-fluid mx-auto d-block" height="200" width="200">
						            <div class="card-body">
						                <h5 class="card-title">Macbook Pro</h5>
						                <p class="card-text">
						                    This is the latest release macbook
						                </p>
						                <h6 class="card-title">PHP 52, 000.00</h6>
						                <a href="#" class="btn btn-outline-secondary btn-md">Select</a>
						            </div>
						        </div>
					    	</div>

					    	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
					    		<div class="card">
						            <img src="/assets/images/products/macbook.jpg" alt="..." class="img-fluid mx-auto d-block" height="200" width="200">
						            <div class="card-body">
						                <h5 class="card-title">Macbook Pro</h5>
						                <p class="card-text">
						                    This is the latest release macbook
						                </p>
						                <h6 class="card-title">PHP 52, 000.00</h6>
						                <a href="#" class="btn btn-outline-secondary btn-md">Select</a>
						            </div>
						        </div>
					    	</div>

					    	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
					    		<div class="card">
						            <img src="/assets/images/products/macbook.jpg" alt="..." class="img-fluid mx-auto d-block" height="200" width="200">
						            <div class="card-body">
						                <h5 class="card-title">Macbook Pro</h5>
						                <p class="card-text">
						                    This is the latest release macbook
						                </p>
						                <h6 class="card-title">PHP 52, 000.00</h6>
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