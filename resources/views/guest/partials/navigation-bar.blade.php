<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            LARAVEL
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('landing.page') }}">Home <span class="sr-only">(current)</span></a>
                </li>
        
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products.index') }}">Products</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('orders.index') }}">Blogs</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item" style="border-right: 1px solid gray;">
                    <a class="nav-link" href="#">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Cart</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Sign In</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Sign Up</a>
                </li>
            </ul>
        </div>
    </div>
</nav>