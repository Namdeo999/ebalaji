<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Ebajaji Services</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{ asset('assets/user/css/fontawesome-free/css/all.min.css') }}" />  
  <link rel="stylesheet" href="{{ asset('assets/user/css/icheck-bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/user/css/adminlte.min.css') }}" />
  <style>
    .login-page {
        height: 60vh; 
    }
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="{{url('/login')}}" class="h1"><b>Ebajaji </b>Services</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="{{url('/user-login')}}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="number" name="mobile" class="form-control form-control-sm" placeholder="Mobile">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control form-control-sm" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('assets/user/js/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/user/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/user/js/adminlte.min.js') }}"></script>

<script>
$(document).ready(function () {
    
    // fetch('http://localhost:1700/api/country')
    // .then((response) => response.json())
    // .then((data) => console.log(data));
});
</script>

</body>
</html>


{{-- @extends('layouts.web.app')
@section('page_title', 'Ebala Ji Services')

@section('content')
<div class="inner-banner">
<div class="container">
<div class="inner-title text-center">
<h3>Log In</h3>
<ul>
<li>
<a href="index.html">Home</a>
</li>
<li>
<i class='bx bx-chevrons-right'></i>
</li>
<li>Log In</li>
</ul>
</div>
</div>
<div class="inner-shape">
<img src="assets/images/shape/inner-shape.png" alt="Images">
</div>
</div>

<div class="user-area pt-100 pb-70">
<div class="container">
 <div class="row align-items-center">
<div class="col-lg-6">
<div class="user-img">
<img src="assets/images/user-img.jpg" alt="Images">
</div>
</div>
<div class="col-lg-6">
<div class="user-form">
<div class="contact-form">
<h2>Log In</h2>
<form>
<div class="row">
<div class="col-lg-12 ">
<div class="form-group">
<input type="text" class="form-control" required data-error="Please enter your Username or Email" placeholder="Username or Email">
</div>
</div>
<div class="col-12">
<div class="form-group">
<input class="form-control" type="password" name="password" placeholder="Password">
</div>
</div>
<div class="col-lg-12 form-condition">
<div class="agree-label">
<input type="checkbox" id="chb1">
<label for="chb1">
Remember Me <a class="forget" href="forget-password.html">Forgot My Password?</a>
</label>
</div>
</div>
<div class="col-lg-12 ">
<button type="submit" class="default-btn btn-bg-two">
Log In Now
</button>
</div>
<div class="col-12">
<p class="account-desc">
Not a Member?
<a href="{{url('/register')}}" >Register Now</a>
</p>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection --}}