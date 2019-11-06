@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="{{ route('landing.page') }}"><b>Sign In</b> Here </a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="{{ route('login') }}" method="post">
        @csrf

      <div class="form-group @error('username') has-error @enderror">
        <input type="text" name="username" class="form-control" placeholder="Enter Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
          @error('username')
          <span class="help-block">{{ $message }}</span>
          @enderror
      </div>

      <div class="form-group @error('password') has-error @enderror">
        <input type="password" name="password" class="form-control" placeholder="Enter Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          @error('password')
          <span class="help-block">{{ $message }}</span>
          @enderror
      </div>

      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

{{--     <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div> --}}
    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>
    <a href="{{ route('register') }}" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

@endsection
