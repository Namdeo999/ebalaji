@extends('layouts.user.app')
@section('page_title', 'Partners')

@section('content-header')
    <div class="content-header mt-1">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="m-0"><b>Partners</b></h3>
            </div>
            <div class="col-sm-6">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end ">
                    <button type="button" id="newPartner" class="btn btn-primary btn-flat  "><i class="fas fa-plus"></i> Create New Partner</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content') 

<div class="modal fade" id="partnerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Create Partner</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="card" >
                        <div class="card-body">
                            <form id="partnerForm">
                                @csrf
                               
                                <div id="partner_err"></div>
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

                                {{-- <input type="hidden" name="partner_id" id="partner_id" value="{{session('LOGIN_ID')}}"> --}}
                                
                            </form>
        
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="savePartnerBtn" class="btn btn-primary btn-sm">Save</button>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">

            <div class="card-header">
                    
                <div class="row">
                    <div class="col-md-8 col-lg-8 col-xl-8">
                        <h3 class="card-title">Partners</h3>
                    </div>
                    <div class=" col-md-2 col-lg-2 col-xl-2">
                        <select id="filter_city_id" class="form-select form-select-sm select_chosen">
                            <option selected disabled>Role</option>
                            @foreach ($roles as $key => $list)
                                <option value="{{$list->id}}" >{{ucwords($list->role)}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2">
                        <div class="card-tools">
                            <div class="input-group input-group-sm" >
                                <input type="text" name="table_search" class="form-control float-right search" placeholder="Search">
    
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="card-body table-responsive p-0" style="height: 450px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Date</th>
                            <th>Unique Id</th>
                            <th>Role</th>
                            <th>Name</th>
                            <th>State</th>
                            <th>City</th>
                            <th>Pin Code</th>
                            {{-- <th>Created By</th> --}}
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($partners as $key => $list)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{date('d-m-Y', strtotime($list->created_at))}}</td>
                                <td>{{$list->unique_id }}</td>
                                <td>{{ucwords($list->role) }}</td>
                                <td>{{ucwords($list->name)}}</td>
                                <td>{{ucwords($list->state)}}</td>
                                <td>{{ucwords($list->city)}}</td>
                                <td>{{$list->pincode}}</td>
                                {{-- <td>Created By</td> --}}

                                <td> 
                                    @if ($list->active == MyApp::ACTIVE)
                                        <span class="badge bg-success text-light">Active</span>
                                    @else
                                        <span class="badge bg-warning text-dark">Pending</span>
                                    @endif
                                </td>
                                <td>
                                    {{-- <button type="button" class="btn btn-info btn-sm editAdminBtn mr-1" value="{{$list->id}}"><i class="fas fa-edit"></i></button> --}}
                                    {{-- <button type="button" class="btn btn-danger btn-sm deleteAdminBtn ml-1" value="{{$list->id}}"><i class="fas fa-trash"></i></button> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

@endsection 

@section('script')
{{-- <script src="{{asset('public/sdpl-assets/user/js/slider.js')}}"></script> --}}
  <script>
    $(document).ready(function () {

        $(document).on('click','#newPartner', function (e) {
            e.preventDefault();
            
            $('#partnerModal').modal('show');
            $('#partner_err').html('');
            $('#partner_err').removeClass('alert alert-danger');
            $("#partnerForm").trigger("reset"); 
            $('#savePartnerBtn').removeClass('hide');
            $('#updatePartnerBtn').addClass('hide');

            // const country_id = $('#country_id').val();
            // getStateByCountry(country_id);
        });

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

        $(document).on('click','#savePartnerBtn', function (e) {
            e.preventDefault();
            savePartner();
        });
            
    });

    function savePartner() {
        
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        var formData = new FormData($("#partnerForm")[0]);
        $.ajax({
            type: "post",
            url: "save-partner",
            data: formData,
            dataType: "json",
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                console.log(response);
                
                if(response.status === 400)
                {
                    $('#partner_err').html('');
                    $('#partner_err').addClass('alert alert-danger');
                    var count = 1;
                    $.each(response.errors, function (key, err_value) { 
                        $('#partner_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
                    });
                }else{
                    $('#partner_err').html('');
                    $('#partnerModal').modal('hide');
                    window.location.reload();
                    // $('#show_user_detail').html('');
                    // $('#show_user_detail').append(response.html);
                    // $('#userDetailModal').modal('show');
                }
            },
        });

    }

  </script>

@endsection
 

