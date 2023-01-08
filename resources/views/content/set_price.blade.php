@extends('layouts.user.app')
@section('page_title', 'Set Price')

@section('content-header')
    <div class="content-header mt-1">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="m-0"><b>Set Price</b></h3>
            </div>
            <div class="col-sm-6">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end ">
                    {{-- <button type="button" id="newPartner" class="btn btn-primary btn-flat  "><i class="fas fa-plus"></i> Create New Partner</button> --}}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content') 

<div class="row">
    <div class="col-md-7">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header"><h5 class="card-title">Set Partner Price</h5></div>
                    <div class="card-body">
                        <div class="row">

                            @foreach ($roles as $list)
                                @if (session('LOGIN_ROLE') == MyApp::MASTER_DISTRIBUTOR)
                                    @if ($list->id != MyApp::ADMIN)
                                        <div class="col-sm-6">
                                            <div class="card mb-3" >
                                                <div class="card-header"> <b>{{ucwords($list->role)}}</b> </div>
                                                <div class="card-body">
                                                    <div class="input-group mt-2 mb-2">
                                                        <div class="input-group-text ">
                                                            <input class="form-check-input mt-0 role_checkbox" type="checkbox" value="{{$list->id}}">
                                                        </div>
                                                        @php
                                                            $price = getPartnerPrice($list->id);
                                                        @endphp
                                                        <input type="text" name="partner_price" class="form-control partner_price" value="{{$price}}" disabled>
                                                        <button class="btn btn-outline-primary setPartnerPriceBtn" type="button" disabled ><i class="fas fa-paper-plane"></i> Set</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @else
                                    <div class="col-sm-4">
                                        <div class="card mb-3" >
                                            <div class="card-header"> <b>{{ucwords($list->role)}}</b> </div>
                                            <div class="card-body">
                                                <div class="input-group mt-2 mb-2">
                                                    <div class="input-group-text ">
                                                        <input class="form-check-input mt-0 role_checkbox" type="checkbox" value="{{$list->id}}">
                                                    </div>
                                                    @php
                                                        $price = getPartnerPrice($list->id);
                                                    @endphp
                                                    <input type="text" name="partner_price" class="form-control partner_price" value="{{$price}}" disabled>
                                                    <button class="btn btn-outline-primary setPartnerPriceBtn" type="button" disabled ><i class="fas fa-paper-plane"></i> Set</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                            @endforeach

                            <div id="partner_price_err"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-5">
        <div class="card ">
            <div class="card-header ">
              <h5 class="card-title">Set Coupon Price</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header"><h5 class="card-title">P-Coupon</h5></div>
                            <div class="card-body">
                                <div class="row">
                                    @foreach ($roles as $list)
                                        @if ($list->id != MyApp::ADMIN)
                                            <div class="col-sm-6">
                                                <div class="card mb-3" >
                                                    <div class="card-header"> <b>{{ucwords($list->role)}}</b>  </div>
                                                    <div class="card-body">
                                                        <div class="input-group mt-2 mb-2">
                                                            <div class="input-group-text">
                                                                <input class="form-check-input mt-0 coupon_check" type="checkbox" value="{{$list->id}}" coupon-type="{{MyApp::P_COUPON}}">
                                                            </div>
                                                            @php
                                                                $price = getCouponPrice($list->id, MyApp::P_COUPON);
                                                            @endphp
                                                            <input type="text" class="form-control coupon_price" value="{{$price}}" disabled>
                                                            <button class="btn btn-outline-primary setCouponPriceBtn" type="button" disabled ><i class="fas fa-paper-plane"></i> Set</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="coupon_price_err"></div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header"><h5 class="card-title">E-Coupon</h5></div>
                            <div class="card-body">
                                <div class="row">

                                    @foreach ($roles as $list)
                                        @if ($list->id != MyApp::ADMIN)
                                            <div class="col-sm-6">
                                                <div class="card mb-3" >
                                                    <div class="card-header"> <b>{{ucwords($list->role)}}</b>  </div>
                                                    <div class="card-body">
                                                        <div class="input-group mt-2 mb-2">
                                                            <div class="input-group-text">
                                                                <input class="form-check-input mt-0 coupon_check" type="checkbox" value="{{$list->id}}" coupon-type="{{MyApp::E_COUPON}}">
                                                            </div>
                                                            @php
                                                                $price = getCouponPrice($list->id, MyApp::E_COUPON);
                                                            @endphp
                                                            <input type="text" class="form-control coupon_price" value="{{$price}}" disabled>
                                                            <button class="btn btn-outline-primary setCouponPriceBtn" type="button" disabled ><i class="fas fa-paper-plane"></i> Set</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                    
                                </div>
                            </div>
                          </div>
                    </div>
                  </div>
            </div>
          </div>
    </div>
</div>


  {{-- <div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header"><h5 class="card-title">P-Coupon</h5></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card mb-3" >
                            <div class="card-header"> <b>Master Distributor</b> </div>
                            <div class="card-body">
                                <div class="input-group mt-2 mb-2">
                                    <div class="input-group-text">
                                      <input class="form-check-input mt-0" type="checkbox" id="p_master_check" aria-label="Checkbox for following text input">
                                    </div>
                                    <input type="text" class="form-control" id="p_master" disabled>
                                    <button class="btn btn-outline-secondary" type="button" id="pMasterSetBtn" disabled ><i class="fas fa-paper-plane"></i> Set</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card mb-3" >
                            <div class="card-header"> <b>Retailer</b> </div>
                            
                            <div class="card-body">
                                <div class="input-group mt-2 mb-2">
                                    <div class="input-group-text">
                                      <input class="form-check-input mt-0" type="checkbox" id="p_retailer_check" aria-label="Checkbox for following text input">
                                    </div>
                                    <input type="text" class="form-control" id="p_retailer" disabled>
                                    <button class="btn btn-outline-secondary" type="button" id="pRetailerSetBtn" disabled><i class="fas fa-paper-plane"></i> set</button>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="card">
            <div class="card-header"><h5 class="card-title">E-Coupon</h5></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card mb-3" >
                            <div class="card-header"><b>Master Distributor</b></div>
                            <div class="card-body">
                                <div class="input-group mt-2 mb-2">
                                    <div class="input-group-text">
                                      <input class="form-check-input mt-0" type="checkbox" id="e_master_check">
                                    </div>
                                    <input type="text" class="form-control" id="e_master" disabled>
                                    <button class="btn btn-outline-secondary" type="button" id="eMasterSetBtn" disabled><i class="fas fa-paper-plane"></i> set</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card mb-3" >
                            <div class="card-header"><b>Retailer</b></div>
                            <div class="card-body">
                                <div class="input-group mt-2 mb-2">
                                    <div class="input-group-text">
                                      <input class="form-check-input mt-0" type="checkbox" id="e_retailer_check">
                                    </div>
                                    <input type="text" class="form-control" id="e_retailer" disabled>
                                    <button class="btn btn-outline-secondary" type="button" id="eRetailerSetBtn" ><i class="fas fa-paper-plane"></i> set</button>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
          </div>
    </div>
  </div> --}}

  



@endsection 

@section('script')
{{-- <script src="{{asset('public/sdpl-assets/user/js/slider.js')}}"></script> --}}
  <script>
    $(document).ready(function () {

        $(document).on('change','.role_checkbox', function (e) {
            e.preventDefault();
            var status = $(this).is(':checked');
            if(status == true){
                // $(this).parent().parent().find('.partner_price').css("background-color", "yellow");
                $(this).parent().parent().find('.partner_price').prop("disabled", false);
                $(this).parent().parent().find('.setPartnerPriceBtn').prop("disabled", false);
            }else{
                $(this).parent().parent().find('.partner_price').prop("disabled", true);
                $(this).parent().parent().find('.setPartnerPriceBtn').prop("disabled", true);
            }
        });

        $(document).on('change','.coupon_check', function (e) {
            e.preventDefault();
            var status = $(this).is(':checked');
            if(status == true){
                $(this).parent().parent().find('.coupon_price').prop("disabled", false);
                $(this).parent().parent().find('.setCouponPriceBtn').prop("disabled", false);
                
            }else{
                $(this).parent().parent().find('.coupon_price').prop("disabled", true);
                $(this).parent().parent().find('.setCouponPriceBtn').prop("disabled", true);
                
            }
        });

        $(document).on('click','.setPartnerPriceBtn', function (e) {
            e.preventDefault();
            var object = $(this);
            setPartnerPrice(object);            
        });

        $(document).on('click','.setCouponPriceBtn', function (e) {
            e.preventDefault();
            var object = $(this);
            setCouponPrice(object);            
        });

            
    });

    function setPartnerPrice(object) {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        var role_id = $(object).parent().parent().find('.role_checkbox').val();
        var partner_price = $(object).parent().parent().find('.partner_price').val();
    
        var data = {
            role_id:role_id,
            partner_price:partner_price,
        }

        // var formData = new FormData($("#partnerForm")[0]);
        $.ajax({
            type: "post",
            url: "set-partner-price",
            data: data,
            dataType: "json",
            // cache: false,
            // contentType: false,
            // processData: false,
            success: function (response) {
                // console.log(response);
                
                if(response.status === 400)
                {
                    $('#partner_price_err').html('');
                    $('#partner_price_err').addClass('alert alert-danger');
                    var count = 1;
                    $.each(response.errors, function (key, err_value) { 
                        $('#partner_price_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
                    });
                }else{
                    $('#partner_price_err').html('');
                    // $('#partnerModal').modal('hide');
                    window.location.reload();
                    
                }
            },
        });

    }
    function setCouponPrice(object) {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        var coupon_type = $(object).parent().parent().find('.coupon_check').attr('coupon-type');
        var role_id = $(object).parent().parent().find('.coupon_check').val();
        var coupon_price = $(object).parent().parent().find('.coupon_price').val();
    
        var data = {
            coupon_type:coupon_type,
            role_id:role_id,
            coupon_price:coupon_price,
        }

        // var formData = new FormData($("#partnerForm")[0]);
        $.ajax({
            type: "post",
            url: "set-coupon-price",
            data: data,
            dataType: "json",
            // cache: false,
            // contentType: false,
            // processData: false,
            success: function (response) {
                // console.log(response);
                if(response.status === 400)
                {
                    $('#coupon_price_err').html('');
                    $('#coupon_price_err').addClass('alert alert-danger');
                    var count = 1;
                    $.each(response.errors, function (key, err_value) { 
                        $('#coupon_price_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
                    });
                }else{
                    $('#coupon_price_err').html('');
                    window.location.reload();
                }
            },
        });

    }

  </script>

@endsection
 

