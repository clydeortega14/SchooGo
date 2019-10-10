<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    
    <div class="container">
        <a class="navbar-brand" href="{{ route('landing.page') }}">
            <h3 class="text-secondary">LARAVEL</h3>
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
                    <a class="nav-link" href="{{ route('shop') }}">Shop</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Blogs</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                {{-- <li class="nav-item" style="border-right: 1px solid gray;">
                    <a class="nav-link" href="#">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Cart</span>
                    </a>
                </li> --}}

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