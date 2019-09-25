@extends('guest.guest-layout')

@section('title', 'My Cart')

@section('content')

<div class="container">
	<div class="row padding">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="table-responsive">
				<table class="table table-striped">

				    <thead class="thead-light">
				      <tr>
				      	<th>Product</th>
				        <th></th>
				        <th>Price</th>
				        <th>Qty</th>
				        <th>Total</th>
				        <th>remove</th>
				      </tr>
				    </thead>

				    <tbody>
				      <tr>
				        <td>
				        	<img src="/assets/images/avatar/avatar2.jpg" alt="...">
				        </td>
				        <td>
				        	Asus Zenbook
				        </td>
				        <td class="price">29, 000</td>
				        <td>
				        	<input type="number" min="1" value="1" class="form-control">
				        </td>
				        <td class="price">29, 000</td>
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
				        <td>Pencil Case</td>
				        <td class="price">30.00</td>
				        <td>
				        	<input type="number" min="1" value="3" class="form-control">
				        </td>
				        <td class="price">90.00</td>
				        <td>
				        	<button type="button" class="btn btn-outline-secondary btn-sm">
				        		<i class="fa fa-trash"></i>
				        	</button>
				        </td>
				      </tr>
				      <tr>
				        <td>
				        	<img src="/assets/images/avatar/person3.jpg" alt="...">
				        </td>
				        <td>Book Of Enoch</td>
				        <td class="price">150.00</td>
				        <td>
				        	<input type="number" min="1" value="4" class="form-control">
				        </td>
				        <td class="price">600.00 </td>
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

		<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
			<div class="input-group">
			  	<input type="text" class="form-control" placeholder="Enter Coupon Code">
			  	<div class="input-group-append">
			    	<button class="btn btn-secondary" type="button">APPLY CODE</button>
			  	</div>
			</div>
		</div>

		<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
			<a href="{{ route('products.index') }}" class="btn btn-outline-secondary">Continue Shopping</a>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<a href="#" class="btn btn-outline-secondary form-control">Update Cart</a>
		</div>
	</div>

	<div class="row padding">
		<div class="col-md-12">
			<table class="table table-striped">
				<tbody>
					<tr>
						<td style="text-align:left;">Subtotal</td>
						<td style="text-align:right;">29, 000.00</td>
					</tr>

					<tr>
						<td style="text-align:left;">Tax</td>
						<td style="text-align:right;">0.00</td>
					</tr>

					<tr>
						<td style="text-align:left;">Total</td>
						<td style="text-align:right;">29, 000.00</td>
					</tr>
				</tbody>
			</table>
		</div>
		
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			<a href="{{ route('checkout.index') }}" class="btn btn-primary btn-md">Proceed to checkout</a>
		</div>
	</div>
</div>
@stop