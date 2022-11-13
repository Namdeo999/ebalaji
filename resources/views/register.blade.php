@extends('layouts.web.app')
@section('page_title', 'Ebala Ji Services')


@section('content') 

{{-- <div class="inner-banner">
    <div class="container">
        <div class="inner-title text-center">
            <h3>Register</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <i class='bx bx-chevrons-right'></i>
                </li>
                <li>Register</li>
            </ul>
        </div>
    </div>
    <div class="inner-shape">
        <img src="assets/images/shape/inner-shape.png" alt="Images">
    </div>
</div> --}}


<div class="container pt-100 pb-70">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-center"> User Registeration</h4>
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#mob"><h6>Mobile</h6></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#otp"><h6>Otp Verification</h6> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#user"><h6>User Info</h6> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#pay"><h6>Payment</h6> </a>
                </li>
            </ul> 

            <div class="tab-content">
                <div class="tab-pane container active pt-50 pb-50" id="mob">
                    <div class="user-area">
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
                                            <h2>Mobile Number</h2>
                                            <form >
                                            @csrf
                                                <div class="row">
                                                    <div class="col-lg-12 ">
                                                        <div class="form-group">
                                                            <input name="mobile" id="mobile" type="text" class="form-control" required placeholder="Enter mobile no.">
                                                        </div>
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" id="i_agree" name="i_agree" value="true">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                i agree
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="col-lg-12 ">
                                                <button id="saveMobileBtn" class="default-btn btn-bg-two">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
                <div class="tab-pane container pt-50 pb-50" id="otp">
                    <div class="user-area">
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
                                            <h2>OTP Verification</h2>
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-12 ">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" required data-error="Please enter your Username or Email" placeholder="Enter 6-digit otp">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 ">
                                                        <button type="submit" class="default-btn btn-bg-two">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>

                <div class="tab-pane container pt-50 pb-50" id="user">
                    <div class="user-area">
                        <div class="container">
                            <div class="row">
                              <div class="col-12">
                                  <div class="user-form">
                                      <div class="contact-form">
                                      <h2>User Information</h2>
                                            <form>
                                            <div class="row">
                                                <div class="col-6">
                                                    <select class="form-select form-select-lg" aria-label="Default select example">
                                                        <option selected disabled>Services</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" required data-error="Please enter your Username or Email" placeholder="Service Fees">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" required data-error="Please enter your Username or Email" placeholder="Vle Id">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" required data-error="Please enter your Username or Email" placeholder="Vle Name">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" required data-error="Please enter your Username or Email" placeholder="Contact Person">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" required data-error="Please enter your Username or Email" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" required data-error="Please enter your Username or Email" placeholder="Pan No.">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" required data-error="Please enter your Username or Email" placeholder="Pin Code">
                                                    </div>
                                                </div>
                                                <div class="col-4 mb-5">
                                                    <select class="form-select form-select-lg" aria-label="Default select example">
                                                        
                                                    </select>
                                                </div>
                                                <div class="col-4 mb-5">
                                                    <select class="form-select form-select-lg" aria-label="Default select example">
                                                        <option selected>State</option>
                                                        <option value="1">madhya pradesh</option>
                                                    </select>
                                                </div>
                                                <div class="col-4 mb-5">
                                                    <select class="form-select form-select-lg" aria-label="Default select example">
                                                        <option selected>City</option>
                                                        <option value="1">Jabalpur</option>
                                                        <option value="2">Indore</option>
                                                        <option value="3">Pune</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-12 ">
                                                        <button type="submit" class="default-btn btn-bg-two">Submit</button>
                                                </div>
                                            </div>
                                            </form>
                                      </div>
                                  </div>
                              </div>  
                            </div>
                        </div>
                    </div>  
                </div>

                <div class="tab-pane container pt-50 pb-50" id="pay">
                    <div class="user-area">
                        <div class="container">
                            <div class="row align-items-center">
                                <h4 class="mb-5">Total Payble Amount - 100000</h5>
                                <div class="col-lg-12 ">
                                    <button type="submit" class="default-btn btn-bg-two">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>                
            </div>
        </div>
    </div>
</div> 

@endsection

@section('script')
<script src="{{ asset('assets/user/js/jquery.min.js') }}"></script>
  <script>
    $(document).ready(function () {
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).on('click','#saveMobileBtn', function (e) {
                
            e.preventDefault();
    
            var mobile = $("#mobile").val();
            var i_agree = $("#i_agree").val();

            // var password = $("input[name=password]").val();
            // var email = $("input[name=email]").val();
    
            $.ajax({
                type:'POST',
                url:'user-register',
                data:{mobile:mobile, i_agree:i_agree},
                success:function(data){
                    alert(data);
                }
            });
            
            console.log(mobile);
    
        });
    });
  </script>

@endsection

