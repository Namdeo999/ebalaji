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
                                <div class="col-sm-4">
                                    <div class="card mb-3" >
                                        <div class="card-header"> <b>{{ucwords($list->role)}}</b> </div>
                                        <div class="card-body">
                                            <div class="input-group mt-2 mb-2">
                                                <div class="input-group-text ">
                                                    <input class="form-check-input mt-0 role_checkbox" type="checkbox" value="{{$list->id}}">
                                                </div>
                                                <input type="text" name="partner_price" class="form-control partner_price" disabled>
                                                <button class="btn btn-outline-secondary setPartnerPriceBtn" type="button" disabled ><i class="fas fa-paper-plane"></i> Set</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{-- <div class="col-sm-4">
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
                            <div class="col-sm-4">
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
                            </div> --}}
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
                </div>
                <div class="row">
                    <div class="col-sm-12">
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

        $(document).on('change','#p_master_check', function (e) {
            e.preventDefault();
            if( $(this).is(':checked') ) {   
                $('#p_master').prop("disabled", false);
                $('#pMasterSetBtn').prop("disabled", false);
            } else {                      
                $('#p_master').prop("disabled", true);
                $('#pMasterSetBtn').prop("disabled", true);
            } 
        });

        $(document).on('change','#p_retailer_check', function (e) {
            e.preventDefault();
            if( $(this).is(':checked') ) {   
                $('#p_retailer').prop("disabled", false);
                $('#pRetailerSetBtn').prop("disabled", false);
            } else {                      
                $('#p_retailer').prop("disabled", true);
                $('#pRetailerSetBtn').prop("disabled", true);
            }
        });

        $(document).on('change','#e_master_check', function (e) {
            e.preventDefault();
            if( $(this).is(':checked') ) {   
                $('#e_master').prop("disabled", false);
                $('#eMasterSetBtn').prop("disabled", false);
            } else {                      
                $('#e_master').prop("disabled", true);
                $('#eMasterSetBtn').prop("disabled", true);
            } 
        });

        $(document).on('change','#e_retailer_check', function (e) {
            e.preventDefault();
            if( $(this).is(':checked') ) {   
                $('#e_retailer').prop("disabled", false);
                $('#eRetailerSetBtn').prop("disabled", false);
            } else {                      
                $('#e_retailer').prop("disabled", true);
                $('#eRetailerSetBtn').prop("disabled", true);
            }
        });

        

        
            
    });

    // function savePartner() {
        
    //     $.ajaxSetup({
    //         headers: {
    //             "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    //         },
    //     });

    //     var formData = new FormData($("#partnerForm")[0]);
    //     $.ajax({
    //         type: "post",
    //         url: "save-partner",
    //         data: formData,
    //         dataType: "json",
    //         cache: false,
    //         contentType: false,
    //         processData: false,
    //         success: function (response) {
    //             console.log(response);
                
    //             if(response.status === 400)
    //             {
    //                 $('#partner_err').html('');
    //                 $('#partner_err').addClass('alert alert-danger');
    //                 var count = 1;
    //                 $.each(response.errors, function (key, err_value) { 
    //                     $('#partner_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
    //                 });
    //             }else{
    //                 $('#partner_err').html('');
    //                 $('#partnerModal').modal('hide');
    //                 window.location.reload();
    //                 // $('#show_user_detail').html('');
    //                 // $('#show_user_detail').append(response.html);
    //                 // $('#userDetailModal').modal('show');
    //             }
    //         },
    //     });

    // }

  </script>

@endsection
 

