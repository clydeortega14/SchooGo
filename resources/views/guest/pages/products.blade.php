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
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
								<div class="card">
					                <img class="card-img-top" src="/assets/images/avatar/person3.jpg" alt="...">
					                <div class="card-body">
					                    <h4 class="card-title">Lenovo Flex 125</h4>
					                    <p class="card-text">
					                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, pariatur commodi error consequatur vero iure quos. Quas et doloremque numquam laboriosam, suscipit hic iure quibusdam ad saepe enim eveniet dolor.
					                    </p>
					                    <h4 class="card-title price">$99.00</h4>
					                    <button type="button" class="btn btn-outline-secondary btn-md">View Info</button>
					                    <a href="{{ route('orders.index') }}" class="btn btn-outline-secondary btn-md">Add to cart</a>
					                </div>
					            </div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
								<div class="card">
					                <img class="card-img-top" src="/assets/images/avatar/person3.jpg" alt="...">
					                <div class="card-body">
					                    <h4 class="card-title">Lenovo Flex 125</h4>
					                    <p class="card-text">
					                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, pariatur commodi error consequatur vero iure quos. Quas et doloremque numquam laboriosam, suscipit hic iure quibusdam ad saepe enim eveniet dolor.
					                    </p>
					                    <h4 class="card-title price">$99.00</h4>
					                    <button type="button" class="btn btn-outline-secondary btn-md">View Info</button>
					                    <a href="{{ route('orders.index') }}" class="btn btn-outline-secondary btn-md">Add to cart</a>
					                </div>
					            </div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
								<div class="card">
					                <img class="card-img-top" src="/assets/images/avatar/person3.jpg" alt="...">
					                <div class="card-body">
					                    <h4 class="card-title">Lenovo Flex 125</h4>
					                    <p class="card-text">
					                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, pariatur commodi error consequatur vero iure quos. Quas et doloremque numquam laboriosam, suscipit hic iure quibusdam ad saepe enim eveniet dolor.
					                    </p>
					                    <h4 class="card-title price">$99.00</h4>
					                    <button type="button" class="btn btn-outline-secondary btn-md">View Info</button>
					                    <a href="{{ route('orders.index') }}" class="btn btn-outline-secondary btn-md">Add to cart</a>
					                </div>
					            </div>
							</div>
						</div>		
					</div>
					
					@foreach($categories as $category)
						<div class="tab-pane" id="{{ $category->name }}">
							<div class="row padding">
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
									<div class="card">
						                <img class="card-img-top" src="/assets/images/avatar/person3.jpg" alt="...">
						                <div class="card-body">
						                    <h4 class="card-title">Lenovo Flex 125</h4>
						                    <p class="card-text">
						                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, pariatur commodi error consequatur vero iure quos. Quas et doloremque numquam laboriosam, suscipit hic iure quibusdam ad saepe enim eveniet dolor.
						                    </p>
						                    <h4 class="card-title price">$99.00</h4>
						                    <button type="button" class="btn btn-outline-secondary btn-md">View Info</button>
						                    <a href="{{ route('orders.index') }}" class="btn btn-outline-secondary btn-md">Add to cart</a>
						                </div>
						            </div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
									<div class="card">
						                <img class="card-img-top" src="/assets/images/avatar/person3.jpg" alt="...">
						                <div class="card-body">
						                    <h4 class="card-title">Lenovo Flex 125</h4>
						                    <p class="card-text">
						                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, pariatur commodi error consequatur vero iure quos. Quas et doloremque numquam laboriosam, suscipit hic iure quibusdam ad saepe enim eveniet dolor.
						                    </p>
						                    <h4 class="card-title price">$99.00</h4>
						                    <button type="button" class="btn btn-outline-secondary btn-md">View Info</button>
						                    <a href="{{ route('orders.index') }}" class="btn btn-outline-secondary btn-md">Add to cart</a>
						                </div>
						            </div>
								</div>
							</div>			
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
@stop