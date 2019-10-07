<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <!-- Responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }} | Landing Page</title>
        
        <!-- Bootstrap 4.3.1 -->
        <link href="/css/bootstrap.css" rel="stylesheet">

        <script src="/js/jquery.js"></script>
        <script src="/js/popper.js"></script>
        <script src="/js/bootstrap.js"></script>

        <!-- Custom Styles -->
        <link rel="stylesheet" type="text/css" href="/css/custom.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
        
        {{-- NAVIGATION BAR --}}
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm sticky-top">
    
            <div class="container-fluid">

                <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                         <a href="#" class="nav-link">Welcome to <b>E</b> Shop</a>
                     </li>
                </ul>
    
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Blogs</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        {{-- WELCOME SECTION --}}

        <div class="container-fluid padding">
            <div class="row welcome text-center">
                <div class="col-12">
                    <h1 class="display-4">Built with ease</h1>
                </div>
                <hr class="my-4">
                <div class="col-12">
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, ea! Atque consequatur, et cupiditate commodi quibusdam dolorem, quaerat aliquid accusamus dolores voluptatem dolorum blanditiis reprehenderit suscipit corrupti sequi quia ratione.</p>
                </div>
            </div>
        </div>

        {{-- THREE COLUMN SECTION --}}
        <div class="container-fluid padding">
            <div class="row text-center padding">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <i class="fa fa-code fa-4x"></i>
                    <h3>HTML5</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam consequuntur praesentium cum ipsam quisquam nam facere sed quibusdam assumenda. Voluptas est neque, recusandae ipsum. Reiciendis consequuntur possimus quod, nostrum natus.</p>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <i class="fa fa-bold fa-4x"></i>
                    <h3>BOOTSTRAP 4</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam consequuntur praesentium cum ipsam quisquam nam facere sed quibusdam assumenda. Voluptas est neque, recusandae ipsum. Reiciendis consequuntur possimus quod, nostrum natus.</p>
                </div>

                <div class="col-md-4">
                    <i class="fa fa-css3 fa-4x"></i>
                    <h3>CSS3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam consequuntur praesentium cum ipsam quisquam nam facere sed quibusdam assumenda. Voluptas est neque, recusandae ipsum. Reiciendis consequuntur possimus quod, nostrum natus.</p>
                </div>
            </div>
        </div>
        <hr class="my-4">

        {{-- TWO COLUMN SECTION --}}
        <div class="container-fluid padding">
            <div class="row padding">
                <div class="col-md-12 col-lg-6">
                    <h2>Our Blogs</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem quaerat sunt, harum, dolores vel quis fugiat reiciendis temporibus sed sint magnam consequatur fugit nemo quisquam quasi sit rerum, corporis repudiandae?</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta et nobis aspernatur iure. Cum deserunt necessitatibus libero laboriosam assumenda, exercitationem culpa ab rerum eius delectus modi, eveniet. Amet, possimus, quasi.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta et nobis aspernatur iure. Cum deserunt necessitatibus libero laboriosam assumenda, exercitationem culpa ab rerum eius delectus modi, eveniet. Amet, possimus, quasi.</p>
                    <br>
                    <button type="button" class="btn btn-primary btn-lg">Explore More</button>
                </div>
                <div class="col-lg-6">
                    <img src="/assets/images/carousels/carousel-4.jpg" class="img-fluid" alt="...">
                </div>
            </div>
        </div>
        <hr class="my-4">

        {{-- FIXED BACKGROUND --}}
        <figure>
            <div class="fixed-wrap">
                <div id="fixed">
                    
                </div>
            </div>
        </figure>


        {{-- EMOJI SECTION --}}
        <button class="fun" data-toggle="collapse" data-target="#emoji">Smiley</button>

        <div id="emoji" class="collapse">
            <div class="container-fluid padding">
                <div class="row text-center">
                    <div class="col-sm-6 col-md-3">
                        <img src="/assets/gif/birdie.gif" class="gif" alt="...">
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <img src="/assets/gif/pop-bottle.gif" class="gif" alt="...">
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <img src="/assets/gif/playing.gif" class="gif" alt="...">
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <img src="/assets/gif/winnie-da-po.gif" class="gif" alt="...">
                    </div>
                </div>
            </div>
        </div>


        {{-- MEET THE TEAM --}}
        <div class="container-fluid padding">
            <div class="row welcome text-center">
                <div class="col-12">
                    <h1 class="display-4">Meet the Team</h1>
                </div>
                <hr>
            </div>
        </div>


        {{-- CARDS --}}
        <div class="container-fluid padding">
            <div class="row padding">
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="/assets/images/avatar/person3.jpg" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">Ema G.</h4>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, pariatur commodi error consequatur vero iure quos. Quas et doloremque numquam laboriosam, suscipit hic iure quibusdam ad saepe enim eveniet dolor.
                            </p>
                            <button type="button" class="btn btn-outline-secondary btn-md">See Profile</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="/assets/images/avatar/avatar2.jpg" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">Jr. Gong</h4>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, pariatur commodi error consequatur vero iure quos. Quas et doloremque numquam laboriosam, suscipit hic iure quibusdam ad saepe enim eveniet dolor.
                            </p>
                            <button type="button" class="btn btn-outline-secondary btn-md">See Profile</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="/assets/images/avatar/avatar1.jpg" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">Stephen</h4>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, pariatur commodi error consequatur vero iure quos. Quas et doloremque numquam laboriosam, suscipit hic iure quibusdam ad saepe enim eveniet dolor.
                            </p>
                            <button type="button" class="btn btn-outline-secondary btn-md">See Profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- TWO COLUMN SECTION --}}
        <div class="container-fluid padding">
            <div class="row padding">
                <div class="col-md-12 col-lg-6">
                    <h2>Our Stories</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem quaerat sunt, harum, dolores vel quis fugiat reiciendis temporibus sed sint magnam consequatur fugit nemo quisquam quasi sit rerum, corporis repudiandae?</p>
                </div>
                <div class="col-lg-6">
                    <img src="/assets/images/website-3.png" class="img-fluid" alt="...">
                </div>
            </div>
        </div>


        {{-- CONNECT --}}
        <div class="container-fluid padding">
            <div class="row text-center padding">
                <div class="col-12">
                    <h2>Connect</h2>
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
    </body>
</html>
