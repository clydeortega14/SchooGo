@extends('guest.guest-layout')

@section('title', 'Landing Page')


@section('content')

{{-- IMAGE SLIDER --}}
{{-- @include('guest.partials.image-slider') --}}

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

{{-- @include('guest.partials.jumbotron') --}}

{{-- THREE COLUMN SECTION --}}
{{-- @include('guest.partials.three-column') --}}

{{-- TWO COLUMN SECTION --}}
{{-- @include('guest.partials.two-column') --}}

{{-- FIXED BACKGROUND --}}
{{-- @include('guest.partials.fixed-background') --}}

{{-- EMOJI SECTION --}}
{{-- @include('guest.partials.emoji') --}}

{{-- MEET THE TEAM --}}
{{-- @include('guest.partials.meet-the-team') --}}

{{-- TWO COLUMN SECTION --}}
@include('guest.partials.connect')

{{-- FOOTER --}}
@include('guest.partials.footer')


@endsection