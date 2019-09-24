@extends('guest.guest-layout')

@section('title', 'Landing Page')


@section('content')
	
	<div class="container-fluid">
		<div class="row padding">
			<div class="col-md-3">
				<div class="list-group nav nav-tabs">
				  	<a href="#all-categories" class="list-group-item list-group-item-action active" data-toggle="tab">
				  		All Categories
				  	</a>

				  	<a href="#laptops" class="list-group-item list-group-item-action" data-toggle="tab">
				  		<i class="fa fa-book"></i>
				  		<span>Laptops</span>
				  	</a>
				  	<a href="#books" class="list-group-item list-group-item-action" data-toggle="tab">
				  		<i class="fa fa-book"></i>
				  		<span>Books</span>
				  	</a>
				  	<a href="#school-supplies" class="list-group-item list-group-item-action" data-toggle="tab">
				  		<i class="fa fa-book"></i>
				  		<span>School Supplies</span>
				  	</a>
				  	<a href="#shoes" class="list-group-item list-group-item-action" data-toggle="tab">
						<i class="fa fa-book"></i>
				  		<span>Shoes</span>
				  	</a>
				  	<a href="#shirts" class="list-group-item list-group-item-action" data-toggle="tab">
						<i class="fa fa-book"></i>
				  		<span>Shirts</span>
				  	</a>
				</div>
			</div>

			<div class="col-md-9">
				<div class="tab-content">
					<div class="tab-pane active" id="all-categories">
						<div class="row padding">
							<div class="col-md-3">
								<div class="card">
					                <img class="card-img-top" src="/assets/images/avatar/person3.jpg" alt="...">
					                <div class="card-body">
					                    <h4 class="card-title">Lenovo Flex 125</h4>
					                    <p class="card-text">
					                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, pariatur commodi error consequatur vero iure quos. Quas et doloremque numquam laboriosam, suscipit hic iure quibusdam ad saepe enim eveniet dolor.
					                    </p>
					                    <h4 class="card-title price">$99.00</h4>
					                    <button type="button" class="btn btn-outline-secondary btn-md">View Info</button>
					                    <a href="" class="btn btn-outline-secondary btn-md">Add to cart</a>
					                </div>
					            </div>
							</div>

							<div class="col-md-3">
								<div class="card">
					                <img class="card-img-top" src="/assets/images/avatar/person3.jpg" alt="...">
					                <div class="card-body">
					                    <h4 class="card-title">The Book Of Enoch</h4>
					                    <p class="card-text">
					                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, pariatur commodi error consequatur vero iure quos. Quas et doloremque numquam laboriosam, suscipit hic iure quibusdam ad saepe enim eveniet dolor.
					                    </p>
					                    <h4 class="card-title price">$29.00</h4>
					                    <button type="button" class="btn btn-outline-secondary btn-md">View Info</button>
					                    <a href="" class="btn btn-outline-secondary btn-md">Add to cart</a>
					                </div>
					            </div>
							</div>

							<div class="col-md-3">
								<div class="card">
					                <img class="card-img-top" src="/assets/images/avatar/person3.jpg" alt="...">
					                <div class="card-body">
					                    <h4 class="card-title">Pencil Case</h4>
					                    <p class="card-text">
					                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, pariatur commodi error consequatur vero iure quos. Quas et doloremque numquam laboriosam, suscipit hic iure quibusdam ad saepe enim eveniet dolor.
					                    </p>
					                    <h4 class="card-title price">$1.00</h4>
					                    <button type="button" class="btn btn-outline-secondary btn-md">View Info</button>
					                    <a href="" class="btn btn-outline-secondary btn-md">Add to cart</a>
					                </div>
					            </div>
							</div>

							<div class="col-md-3">
								<div class="card">
					                <img class="card-img-top" src="/assets/images/avatar/person3.jpg" alt="...">
					                <div class="card-body">
					                    <h4 class="card-title">Nike Air Jordan</h4>
					                    <p class="card-text">
					                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, pariatur commodi error consequatur vero iure quos. Quas et doloremque numquam laboriosam, suscipit hic iure quibusdam ad saepe enim eveniet dolor.
					                    </p>
					                    <h4 class="card-title price">$10,423.75</h4>
					                    <button type="button" class="btn btn-outline-secondary btn-md">View Info</button>
					                    <a href="" class="btn btn-outline-secondary btn-md">Add to cart</a>
					                </div>
					            </div>
							</div>
						</div>		
					</div>

					<div class="tab-pane" id="laptops">
						<div class="row padding">
							<div class="col-md-3">
								<div class="card">
					                <img class="card-img-top" src="/assets/images/avatar/person3.jpg" alt="...">
					                <div class="card-body">
					                    <h4 class="card-title">Nike Air Jordan</h4>
					                    <p class="card-text">
					                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, pariatur commodi error consequatur vero iure quos. Quas et doloremque numquam laboriosam, suscipit hic iure quibusdam ad saepe enim eveniet dolor.
					                    </p>
					                    <h4 class="card-title price">$10,423.75</h4>
					                    <button type="button" class="btn btn-outline-secondary btn-md">View Info</button>
					                    <a href="" class="btn btn-outline-secondary btn-md">Add to cart</a>
					                </div>
					            </div>
							</div>

							<div class="col-md-3">
								<div class="card">
					                <img class="card-img-top" src="/assets/images/avatar/person3.jpg" alt="...">
					                <div class="card-body">
					                    <h4 class="card-title">Nike Air Jordan</h4>
					                    <p class="card-text">
					                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, pariatur commodi error consequatur vero iure quos. Quas et doloremque numquam laboriosam, suscipit hic iure quibusdam ad saepe enim eveniet dolor.
					                    </p>
					                    <h4 class="card-title price">$10,423.75</h4>
					                    <button type="button" class="btn btn-outline-secondary btn-md">View Info</button>
					                    <a href="" class="btn btn-outline-secondary btn-md">Add to cart</a>
					                </div>
					            </div>
							</div>
						</div>			
					</div>

					<div class="tab-pane" id="books">
						<div class="row">
							<div class="col-md-3">
								<div class="card">
					                <img class="card-img-top" src="/assets/images/avatar/person3.jpg" alt="...">
					                <div class="card-body">
					                    <h4 class="card-title">Nike Air Jordan</h4>
					                    <p class="card-text">
					                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, pariatur commodi error consequatur vero iure quos. Quas et doloremque numquam laboriosam, suscipit hic iure quibusdam ad saepe enim eveniet dolor.
					                    </p>
					                    <h4 class="card-title price">$10,423.75</h4>
					                    <button type="button" class="btn btn-outline-secondary btn-md">View Info</button>
					                    <a href="" class="btn btn-outline-secondary btn-md">Add to cart</a>
					                </div>
					            </div>
							</div>


							<div class="col-md-3">
								<div class="card">
					                <img class="card-img-top" src="/assets/images/avatar/person3.jpg" alt="...">
					                <div class="card-body">
					                    <h4 class="card-title">Nike Air Jordan</h4>
					                    <p class="card-text">
					                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, pariatur commodi error consequatur vero iure quos. Quas et doloremque numquam laboriosam, suscipit hic iure quibusdam ad saepe enim eveniet dolor.
					                    </p>
					                    <h4 class="card-title price">$10,423.75</h4>
					                    <button type="button" class="btn btn-outline-secondary btn-md">View Info</button>
					                    <a href="" class="btn btn-outline-secondary btn-md">Add to cart</a>
					                </div>
					            </div>
							</div>
						</div>			
					</div>

					<div class="tab-pane" id="school-supplies">
						<div class="row">
							<div class="col-md-3">
								<div class="card">
					                <img class="card-img-top" src="/assets/images/avatar/person3.jpg" alt="...">
					                <div class="card-body">
					                    <h4 class="card-title">Nike Air Jordan</h4>
					                    <p class="card-text">
					                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, pariatur commodi error consequatur vero iure quos. Quas et doloremque numquam laboriosam, suscipit hic iure quibusdam ad saepe enim eveniet dolor.
					                    </p>
					                    <h4 class="card-title price">$10,423.75</h4>
					                    <button type="button" class="btn btn-outline-secondary btn-md">View Info</button>
					                    <a href="" class="btn btn-outline-secondary btn-md">Add to cart</a>
					                </div>
					            </div>
							</div>
						</div>
					</div>

					<div class="tab-pane" id="shoes">
						<div class="row padding">
							<div class="col-md-3">
								<div class="card">
					                <img class="card-img-top" src="/assets/images/avatar/person3.jpg" alt="...">
					                <div class="card-body">
					                    <h4 class="card-title">Nike Air Jordan</h4>
					                    <p class="card-text">
					                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, pariatur commodi error consequatur vero iure quos. Quas et doloremque numquam laboriosam, suscipit hic iure quibusdam ad saepe enim eveniet dolor.
					                    </p>
					                    <h4 class="card-title price">$10,423.75</h4>
					                    <button type="button" class="btn btn-outline-secondary btn-md">View Info</button>
					                    <a href="" class="btn btn-outline-secondary btn-md">Add to cart</a>
					                </div>
					            </div>
							</div>
						</div>
					</div>

					<div class="tab-pane" id="shirts">
						<div class="row padding">
							<div class="col-md-3">
								<div class="card">
					                <img class="card-img-top" src="/assets/images/avatar/person3.jpg" alt="...">
					                <div class="card-body">
					                    <h4 class="card-title">Nike Air Jordan</h4>
					                    <p class="card-text">
					                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, pariatur commodi error consequatur vero iure quos. Quas et doloremque numquam laboriosam, suscipit hic iure quibusdam ad saepe enim eveniet dolor.
					                    </p>
					                    <h4 class="card-title price">$10,423.75</h4>
					                    <button type="button" class="btn btn-outline-secondary btn-md">View Info</button>
					                    <a href="" class="btn btn-outline-secondary btn-md">Add to cart</a>
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