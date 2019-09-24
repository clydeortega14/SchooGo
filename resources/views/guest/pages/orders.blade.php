@extends('guest.guest-layout')

@section('title', 'My Cart')

@section('custom_css')

<style type="text/css">
	.table-order img {

		height: 100%;
		width: 100%;
	}
	.price {

		font-size: 29px;
		color: #3f3f3f;
	}

	.qty {

		width: 100%;
		padding: .2rem;
	}

</style>

@section('content')


<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
			<div class="table-responsive">
				<table class="table table-order">
				    <thead>
				      <tr>
				      	<th>Product</th>
				        <th></th>
				        <th>Qty</th>
				        <th>Price</th>
				        <th>Total</th>
				        <th></th>
				      </tr>
				    </thead>
				    <tbody>
				      <tr>
				        <td>
				        	<img src="/assets/images/avatar/avatar1.jpg" alt="...">
				        </td>
				        <td class="price">Asus Zendbook</td>
				        <td class="price">29, 000</td>
				        <td>
				        	<input type="number" min="1" value="1" class="qty">
				        </td>
				        <td class="price">29, 000<td>
				        	
				        </td>
				        <td>
				        	<button type="button" class="btn btn-outline-secondary btn-sm">
				        		<i class="fa fa-trash"></i>
				        	</button>
				        </td>
				      </tr>
				      <tr>
				        <td>
				        	<img src="/assets/images/avatar/avatar1.jpg" alt="...">
				        </td>
				        <td class="price">Pencil Case</td>
				        <td class="price">30.00</td>
				        <td>
				        	<input type="number" min="1" value="3" class="qty">
				        </td>
				        <td class="price">90.00<td>
				        <td>
				        	<button type="button" class="btn btn-outline-secondary btn-sm">
				        		<i class="fa fa-trash"></i>
				        	</button>
				        </td>
				      </tr>
				      <tr>
				        <td>
				        	<img src="/assets/images/avatar/avatar1.jpg" alt="...">
				        </td>
				        <td class="price">Book Of Enoch</td>
				        <td class="price">150.00</td>
				        <td>
				        	<input type="number" min="1" value="4" class="qty">
				        </td>
				        <td class="price">600.00 <td>
				        <td>
				        	<button type="button" class="btn btn-outline-secondary btn-sm">
				        		<i class="fa fa-trash"></i>
				        	</button>
				        </td>
				      </tr>
				    </tbody>
				  </table>
			  </div>
		</div>

		<div class="col-lg-6">
			<div class="row padding">
				<div class="col-sm-12 col-md-6 col-lg-6">
					<div class="card">
						<div class="card-body">
							<div class="container-fluid">
								<div class="input-group">
								  	<input type="text" class="form-control" placeholder="Enter Code">
								  	<div class="input-group-append">
								    	<button class="btn btn-success" type="submit">APPLY CODE</button>
								  	</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<table class="table">
						<tbody>
							<tr>
								<td>SubTotal</td>
								<td>29, 360. 00</td>
							</tr>
							<tr>
								<td>Tax</td>
								<td>0.00</td>
							</tr>
							<tr>
								<td>Total</td>
								<td>29, 360. 00</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<hr class="light">
</div>

@stop