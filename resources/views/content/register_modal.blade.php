@php
    use App\Models\Role;
    use App\Models\Country;
    $roles = Role::all();
    $countries = Country::all();
@endphp
<style>
    .hide{
        display: none;
    }
</style>

<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Register</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="card" >
                        <div class="card-body">
                            <form id="registerForm" >
                                @csrf
                                <div class="row text-center">
                                    <div class="col-md-12 mt-3 mb-2">
                                        <img src="{{asset('/assets/images/logos/ebalaji-logo-84-62.jpg')}}" ></td><br>
                                        <h4 class="mt-2"><b>Welcome, Ebalaji Services</b></h4>
                                    </div>
                                </div>
                                <hr>
                                {{-- <form action="{{url('/user-register')}}" method="post"> --}}
                                
                                <div id="register_err"></div>

                                <div class="row mt-4">
                                    <div class="col-md-3">
                                        <input type="number"  name="mobile"  id="mobile" class="form-control form-control-sm" placeholder="Mobile" >
                                    </div>
                                    <div class="col-md-3">
                                        <select name="role_id" id="role_id" class="form-select form-select-sm">
                                            <option selected disabled>Services</option>
                                            @foreach ($roles as $list)
                                                <option value="{{$list->id}}" role-amount="{{$list->amount}}">{{ucwords($list->role)}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="join_amount" id="join_amount" class="form-control form-control-sm" placeholder="Fees" readonly >
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="name"  id="name" class="form-control form-control-sm" placeholder="Name">
                                    </div>
                                </div>
                                
                                <div class="row mt-3">
                                    <div class="col-md-5">
                                        <input type="email" name="email"  id="email" class="form-control form-control-sm" placeholder="Email">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="pan"  id="pan" class="form-control form-control-sm" placeholder="PAN No">
                                    </div>
                                    <div class="col-md-3">
                                        <select name="country_id" id="country_id" class="form-select form-select-sm">
                                            <option selected disabled>Country</option>
                                            @foreach ($countries as $list)
                                                <option value="{{$list->id}}" >{{ucwords($list->country)}}</option>
                                            @endforeach
                                        </select> 
                                    </div>
                                </div>
                                
                                <div class="row mt-3">
                                    <div class="col-md-3">
                                        <select name="state_id" id="state_id" class="form-select form-select-sm">
                                            <option selected disabled>State</option>
                                        </select>                                    
                                    </div>
                                    <div class="col-md-3">
                                        <select name="city_id" id="city_id" class="form-select form-select-sm">
                                            <option selected disabled>City</option>
                                        </select>                                    
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="pincode"  id="pincode" class="form-control form-control-sm" placeholder="Pincode">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="domain"  id="domain" class="form-control form-control-sm hide" placeholder="Your Domain">
                                    </div>
        
                                </div>

                                <div class="row mt-3 hide" id="white_level_section">
                                    <div class="col-md-3">
                                        <label for="formFileSm" class="form-label">Aadhar Front Side</label>
                                        <input type="file" name="aadhar_front" id="aadhar_front" class="form-control form-control-sm" >
                                    </div>
                                    <div class="col-md-3">
                                        <label for="formFileSm" class="form-label">Aadhar Back Side</label>
                                        <input type="file" name="aadhar_back" id="aadhar_back" class="form-control form-control-sm" >
                                    </div>
                                    <div class="col-md-3">
                                        <label for="formFileSm" class="form-label">PAN Front Side</label>
                                        <input type="file" name="pan_front" id="pan_front" class="form-control form-control-sm" >
                                    </div>
                                    <div class="col-md-3">
                                        <label for="formFileSm" class="form-label">PAN Back Side</label>
                                        <input type="file" name="pan_back" id="pan_back" class="form-control form-control-sm" >
                                    </div>

                                </div>

                                
                            </form>
        
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="saveUserBtn" class="btn btn-primary btn-sm">Register</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="userDetailModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">User Detail</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="show_user_detail"></div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-sm">Payment</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
            
        $(document).on('change','#role_id', function (e) {
            e.preventDefault();
            var role_id = $(this).val();
            var amount = $(this).find('option:selected').attr('role-amount');
            $('#join_amount').val(amount);
            if (role_id == {{MyApp::ADMIN}}) {
                $('#domain').removeClass('hide');
                $('#white_level_section').removeClass('hide');
            }else{
                $('#domain').addClass('hide');
                $('#white_level_section').addClass('hide');
            }
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
</script>