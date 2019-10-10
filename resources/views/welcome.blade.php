@extends('guest.guest-layout')

@section('title', 'Landing Page')


@section('content')

{{-- JUMBOTRON SECTION--}}
@include('guest.partials.jumbotron')

{{-- WELCOME SECTION --}}
@include('guest.partials.welcome')


{{-- OUR BLOGS --}}

<div class="container-fluid">
    <div class="row jumbotron text-center">
        <div class="col-12">
            <h2>Our Blogs</h2>
        </div>
    </div>
</div>

{{-- TWO COLUMN SECTION --}}
@include('guest.partials.connect')

{{-- FOOTER --}}
@include('guest.partials.footer')


@endsection