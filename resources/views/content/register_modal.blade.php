@php
    use App\Models\Role;
    use App\Models\Country;
    $roles = Role::all();
    $countries = Country::all();
@endphp

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
                            <form id="registerForm">
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
                                    <div class="col-md-5">
                                        <input type="number"  name="mobile"  id="mobile" class="form-control form-control-sm" placeholder="Mobile" >
                                    </div>
                                    <div class="col-md-4">
                                        <select name="role_id" id="role_id" class="form-select form-select-sm">
                                            <option selected disabled>Services</option>
                                            @foreach ($roles as $list)
                                                <option value="{{$list->id}}" role-amount="{{$list->amount}}">{{ucwords($list->role)}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" name="join_amount" id="join_amount" class="form-control form-control-sm" placeholder="Fees" readonly >
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
                                        <input type="text" name="pan"  id="pan" class="form-control form-control-sm" placeholder="PAN No">
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
            var amount = $(this).find('option:selected').attr('role-amount');
            $('#join_amount').val(amount);
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