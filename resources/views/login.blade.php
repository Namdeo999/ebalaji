<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Ebalaji Services</title>
        <link rel="icon" type="image/x-icon" href="{{asset('assets/images/logos/favicon.png')}}">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="{{ asset('assets/user/css/fontawesome-free/css/all.min.css') }}" />  
        <link rel="stylesheet" href="{{ asset('assets/user/css/icheck-bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/user/css/adminlte.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/user/css/user-style.css') }}" />
        
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
        <!-- /.login-logo -->
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="{{url('/login')}}" class="h2"><b>Ebalaji </b>Services</a>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">Sign in to start your session</p>
                    @if(session()->has('msg'))
                        <div class="alert alert-info" role="alert">
                            {{session('msg')}} 
                        </div>
                    @endif  
                    <form action="{{url('/user-login')}}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="number" name="mobile" class="form-control form-control-sm" placeholder="Mobile">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control form-control-sm" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-lock"></span></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember">
                                    <label for="remember">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="submit" class="btn btn-primary btn-sm text-end">Login</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-md-6">
                            <p><a href="/">Forgot Password</a></p>
                        </div>
                        <div class="col-md-6 ">
                            <p style="float:right;"><a href="/">Back To Home</a></p>
                        </div>
                    </div>
                    @if(session()->has('error'))
                        <div class="alert alert-danger mt-2" role="alert">
                            {{session('error')}} 
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <script src="{{ asset('assets/user/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/user/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/user/js/adminlte.min.js') }}"></script>

    </body>
</html>

