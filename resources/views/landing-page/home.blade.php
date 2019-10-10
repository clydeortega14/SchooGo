@extends('landing-page.layouts.landing-page-layout')

@section('title', 'Landing Page')

@section('content')

{{-- JUMBOTRON SECTION--}}

<div class="container-fluid">
    <div class="row jumbotron justify-content-center text-center">
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xs-10">
            <h1 class="display-4">NEW SEASON COLLECTIONS</h1>
            <p class="lead">CHECKOUT ALL THE NEW TRENDS</p>
            <button type="button" class="btn btn-outline-secondary btn-md">SHOP NOW</button>
        </div>
    </div>
</div>

{{-- PRODUCTS SECTION --}}

<div class="container">
    <div class="row welcome text-center">
        <div class="col-12">
            <h2>Our Products</h2>
        </div>
    </div>

    <div class="row justify-content-center">
    	@foreach($products as $product)
	    	@include('partials.products.list')
    	@endforeach
    </div>

    <div class="row text-center">
    	<div class="col-12">
    		<a href="{{ route('shop') }}" class="btn btn-outline-secondary btn-md">View More Products</a>
    	</div>
    </div>
</div>


{{-- OUR BLOGS --}}
<div class="container-fluid">
    <div class="row jumbotron text-center">
        <div class="col-12">
            <h2>Our Blogs</h2>
        </div>
    </div>
</div>

{{-- TWO COLUMN SECTION --}}
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-12">
            <h2>Connect Us</h2>
        </div>

        <div class="col-12 social padding">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-youtube"></i></a>
        </div>
    </div>
</div>

{{-- FOOTER --}}

<footer>
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-md-4">
                <hr class="light">
                <h5>Contact Us</h5>
                <hr class="light">
                <p>5555-555-555</p>
                <p>example123@example.com</p>
                <p>101 colon street</p>
                <p>Cebu, cebu city, 6001</p>
            </div>

            <div class="col-md-4">
                <hr class="light">
                <h5>Our Hours</h5>
                <hr class="light">
                <p> M-W-F: 9: 00 AM - 6 : 00 PM</p>
                <p> T-TH: 7 : 00 AM - 3 : 00 PM</p>
                <p>No work on Saturdays and Sundays</p>
            </div>

            <div class="col-md-4">
                <hr class="light">
                <h5>Service Area</h5>
                <hr class="light">
                <p>Cebu, cebu city, 6001</p>
                <p>Cebu, cebu city, 6001</p>
                <p>Cebu, cebu city, 6001</p>
                <p>Cebu, cebu city, 6001</p>
            </div>

            <div class="col-12">
                <hr class="light-100">
                <h5>&copy; SchooGo 2019.All rights reserved</h5>
            </div>
        </div>
    </div>
</footer>

@endsection