@extends('landing-page.layouts.landing-page-layout')

@section('title', 'Landing Page')

@section('content')

{{-- JUMBOTRON SECTION--}}

<div class="container-fluid">
    <div class="row jumbotron justify-content-center text-center">
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xs-10">
            <h1 class="display-4">Welcome to SchooGo</h1>
            <p class="lead">
                The newest online book and school supplies purchasing and printing services
            </p>
            <button type="button" class="btn btn-outline-secondary btn-md">Get Started</button>
        </div>
    </div>
</div>

{{-- PRODUCTS SECTION --}}

<div class="container">
    <div class="row welcome text-center">
        <div class="col-12">
            <h2>OUR SERVICES</h2>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row jumbotron justify-content-center text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 py-2">
                    <div class="card h-100">
                        <img src="/assets/images/logos/shopping.jpg" alt="..." class="card-img-top" height="300" width="300">
                        <div class="card-body">
                            <h3 class="card-title">Online Purchasing</h3>
                            <p class="card-text">Purchase books and shool supplies online</p>
                            <a href="#" class="text-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 py-2">
                    <div class="card h-100">
                        <img src="/assets/images/logos/printing.png" alt="..." class="card-img-top" height="300" width="300">
                        <div class="card-body">    
                            <h3 class="card-title">Printing Services</h3>
                            <p class="card-text">Worry less, Print More</p>
                            <a href="#" class="text-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<br>
<br>

{{-- OUR BLOGS --}}
<div class="container">
    <div class="row justify-content-center text-center">
        <div class="col-12">
            <h2>OUR BLOGS</h2>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row jumbotron justify-content-center text-center">
        <div class="col-xs-12 col-md-4 py-2">
            <div class="card h1-100">
                <img src="/assets/images/blogs/blog1.jpg" alt="" class="card-img-top" height="300" width="300">
                <div class="card-body">
                    <h4 class="card-title">Travel Together</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis tempore similique distinctio voluptatem perferendis, suscipit debitis, ad reiciendis quia, quo ex accusantium? Sapiente hic modi, neque optio nihil praesentium natus?</p>
                    <a href="" class="text-success">Read more</a>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-md-4 py-2">
            <div class="card h1-100">
                <img src="/assets/images/blogs/blog2.jpg" alt="" class="card-img-top" height="300" width="300">
                <div class="card-body">
                    <h4 class="card-title">Achivements</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis tempore similique distinctio voluptatem perferendis, suscipit debitis, ad reiciendis quia, quo ex accusantium? Sapiente hic modi, neque optio nihil praesentium natus?</p>
                    <a href="" class="text-success">Read more</a>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-md-4 py-2">
            <div class="card h1-100">
                <img src="/assets/images/blogs/blog3.jpg" alt="" class="card-img-top" height="300" width="300">
                <div class="card-body">
                    <h4 class="card-title">Wonderful World</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis tempore similique distinctio voluptatem perferendis, suscipit debitis, ad reiciendis quia, quo ex accusantium? Sapiente hic modi, neque optio nihil praesentium natus?</p>
                    <a href="" class="text-success">Read more</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center text-center">
        <div class="col-12">
            <h2>ABOUT US</h2>
        </div>
    </div>
</div>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/images/carousels/background1.jpg" class="img-fluid" alt="..." style="height: 650px; width: 100%; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="display-2">Achievers</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A saepe culpa, dolore minima officiis nesciunt natus, rem at. Esse aspernatur architecto quisquam. Error sit cupiditate corporis ut voluptatem voluptas temporibus!</p>

                {{-- <button type="button" class="btn btn-outline-light btn-lg">Features</button>
                <button type="button" class="btn btn-primary btn-lg">Get Started</button> --}}
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/images/carousels/background2.jpg" class="img-fluid" alt="..." style="height: 650px; width: 100%; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="display-2">Reliable</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A saepe culpa, dolore minima officiis nesciunt natus, rem at. Esse aspernatur architecto quisquam. Error sit cupiditate corporis ut voluptatem voluptas temporibus!</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/images/carousels/background3.jpg" class="img-fluid" alt="..." style="height: 650px; width: 100%; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="display-2">Resourceful</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A saepe culpa, dolore minima officiis nesciunt natus, rem at. Esse aspernatur architecto quisquam. Error sit cupiditate corporis ut voluptatem voluptas temporibus!</p>
            </div>
        </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

{{-- TWO COLUMN SECTION --}}
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-12">
            <h2>CONNECT</h2>
        </div>
    </div>
    <div class="row jumbotron justify-content-center text-center">
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