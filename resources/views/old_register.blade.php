<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Ebalaji Services</title>
        <link rel="icon" type="image/x-icon" href="{{asset('assets/images/logos/favicon.png')}}">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="{{ asset('assets/web/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/user/css/fontawesome-free/css/all.min.css') }}" />  
        <link rel="stylesheet" href="{{ asset('assets/user/css/icheck-bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/user/css/adminlte.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/user/css/user-style.css') }}" />
        <style>
            .btn-primary{
                background: #6366F1;
            }
        </style>
    </head>
    <body>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">

                    <div class="card" >
                       
                        <div class="card-body">
                            <div class="row text-center">
                                <div class="col-md-12 mt-3 mb-2">
                                    <img src="{{asset('/assets/images/logos/ebalaji-logo-84-62.jpg')}}" ></td><br>
                                    <h4><b>Welcome, Ebalaji Services</b></h4>
                                </div>
                            </div>
                            <hr>
                            <form action="{{url('/user-register')}}" method="post">
                            @csrf

                                <div class="row mt-4">
                                    <div class="col-md-5">
                                        <input type="number"  name="mobile"  id="mobile" class="form-control form-control-sm" placeholder="Mobile" >
                                    </div>
                                    <div class="col-md-5">
                                        <select name="role_id" id="role_id" class="form-select form-select-sm">
                                            <option selected disabled>Services</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="fees" id="fees" class="form-control form-control-sm" placeholder="Fees" readonly disabled>
                                    </div>
                                </div>
                                
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <input type="text" name="name"  id="name" class="form-control form-control-sm" placeholder="Name">
                                    </div>
                                    <div class="col-md-5">
                                        <input type="email" name="email"  id="email" class="form-control form-control-sm" placeholder="Email">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" name="pan_no"  id="pan_no" class="form-control form-control-sm" placeholder="PAN No">
                                    </div>
                                </div>
                                
                                <div class="row mt-3">
                                    <div class="col-md-3">
                                        <select name="country_id" id="country_id" class="form-select form-select-sm">
                                            <option selected disabled>Country</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>                                    
                                    </div>
                                    <div class="col-md-4">
                                        <select name="state_id" id="state_id" class="form-select form-select-sm">
                                            <option selected disabled>State</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>                                    
                                    </div>
                                    <div class="col-md-3">
                                        <select name="city_id" id="city_id" class="form-select form-select-sm">
                                            <option selected disabled>City</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>                                    
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="pincode"  id="pincode" class="form-control form-control-sm" placeholder="Pincode">
                                    </div>

                                </div>
                                <div class="d-grid gap-2 mt-4 mb-3">
                                    <button class="btn btn-primary" type="button">Register</button>
                                </div>
                                <div class="row">
                                    <span> Already have an account ? <a href="/login">Login</a></span>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <script src="{{ asset('assets/user/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/user/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/user/js/adminlte.min.js') }}"></script>

    </body>
</html>

