@extends('layouts.web.app')
@section('page_title', 'Register')

@section('style')
    <style>
        .btn-primary{
            background: #6366F1;
        }
    </style>
@endsection

@section('content')

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="card" >
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-md-12 mt-3 mb-2">
                            <img src="{{asset('/assets/images/logos/ebalaji-logo-84-62.jpg')}}" ></td><br>
                            <h4 class="mt-2"><b>Welcome, Ebalaji Services</b></h4>
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
                                    @foreach ($roles as $list)
                                        <option value="{{$list->id}}" role-amount="{{$list->amount}}">{{ucwords($list->role)}}</option>
                                    @endforeach
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
                                    @foreach ($countries as $list)
                                        <option value="{{$list->id}}" >{{ucwords($list->country)}}</option>
                                    @endforeach
                                </select>                                    
                            </div>
                            <div class="col-md-4">
                                <select name="state_id" id="state_id" class="form-select form-select-sm">
                                    <option selected disabled>State</option>
                                    
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

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            
            $(document).on('change','#role_id', function (e) {
                e.preventDefault();
                var amount = $(this).find('option:selected').attr('role-amount');
                $('#fees').val(amount);
            });

            $(document).on('change','#country_id', function (e) {
                e.preventDefault();

                var country_id = $(this).val();
                getStateByCountry(country_id);
            });

            $(document).on('change','#state_id', function (e) {
                e.preventDefault();

                var state_id = $(this).val();
                getCityByState(state_id);
            });


        });


        

        

        // function manageRole(){
        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         }
        //     });

        //     var formData = new FormData($("#roleForm")[0]);
        //     $.ajax({
        //         type: "post",
        //         url: "manage-role",
        //         data: formData,
        //         dataType: "json",
        //         cache: false,
        //         contentType: false, 
        //         processData: false, 
        //         success: function (response) {
        //             //console.log(response);
        //             if(response.status === 400)
        //             {
        //                 $('#role_err').html('');
        //                 $('#role_err').addClass('alert alert-danger');
        //                 var count = 1;
        //                 $.each(response.errors, function (key, err_value) { 
        //                     $('#role_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
        //                 });

        //             }else{
        //                 $('#role_err').html('');
        //                 $('#roleModal').modal('hide');
        //                 window.location.reload();
        //             }
        //         }
        //     });
        // }

    </script>
@endsection