@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xs-12 col-sm-6 col-md-4 py-2">
                <div class="card h-100">
                    <a href="{{ route('display.products') }}">
                        <img src="/assets/images/logos/printing.png" alt="..." class="img-fluid mx-auto d-block" height="500" width="500">
                    </a>

                    <div class="card-body">
                        <h5 class="text-center align-text-bottom cart-title">Go Shopping</h5>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 py-2">
                <div class="card h-100">
                    <a href="">
                        <img src="/assets/images/logos/printing.png" alt="..." class="img-fluid mx-auto d-block" height="500" width="500">
                    </a>

                    <div class="card-body">
                        <h5 class="card-title text-center">Printing Services</h5>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 py-2">
                <div class="card h-100">
                    <a href="{{ route('categories.index') }}">
                        <img src="/assets/images/logos/printing.png" alt="..." class="img-fluid mx-auto d-block" height="500" width="500">
                    </a>

                    <div class="card-body">
                        <h5 class="text-center card-title">Categories</h5>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 py-2">
                <div class="card h-100">
                    <a href="{{ route('departments.index') }}">
                        <img src="/assets/images/logos/printing.png" alt="..." class="img-fluid mx-auto d-block" height="500" width="500">
                    </a>

                    <div class="card-body">
                        <h5 class="text-center card-title">Departments</h5>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 py-2">
                <div class="card h-100">
                    <a href="{{ route('products.index') }}">
                        <img src="/assets/images/logos/printing.png" alt="..." class="img-fluid mx-auto d-block" height="500" width="500">
                    </a>

                    <div class="card-body">
                        <h5 class="text-center card-title">Products</h5>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 py-2">
                <div class="card h-100">
                    <a href="{{ route('orders.index') }}">
                        <img src="/assets/images/logos/printing.png" alt="..." class="img-fluid mx-auto d-block" height="500" width="500">
                    </a>

                    <div class="card-body">
                        <h5 class="text-center card-title">Orders</h5>
                    </div>
                </div>
            </div>

        </div>
    </div>

{{--     <div class="container-fluid padding">

        <div class="row padding">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">
                        All Categories
                    </a>
                    @foreach($categories as $category)
                        <a class="list-group-item list-group-item-action" id="list-{{ $category->id }}-list" data-toggle="list" href="#list-{{ $category->id }}" role="tab" aria-controls="{{ $category->id }}">
                            <i class="fa fa-notebook"></i>
                            <span>{{ $category->name }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                        <div class="row padding">
                            @foreach($products as $product)
                                @include('partials.products.list')
                            @endforeach
                        </div>
                    </div>
                    @foreach($categories as $category)
                        <div class="tab-pane fade" id="list-{{ $category->id }}" role="tabpanel" aria-labelledby="list-{{ $category->id }}-list">
                            <div class="row padding">
                                @foreach($category->products as $product)
                                    @include('partials.products.list')      
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div> --}}


@endsection
