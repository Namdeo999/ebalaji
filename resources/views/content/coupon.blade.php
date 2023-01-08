@extends('layouts.user.app')
@section('page_title', 'Coupon')

@section('content-header')
    <div class="content-header mt-1">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="m-0"><b>Coupon</b></h3>
            </div>
            <div class="col-sm-6">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end ">
                    <button type="button" id="distributeCoupon" class="btn btn-primary btn-flat  "><i class="fas fa-plus"></i> Distribute Coupon</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content') 

    <div class="modal fade" id="distributeCouponModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Distribute Coupon</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   
                    <form id="distributeCouponForm">
                        @csrf
                    
                        <div id="distribute_coupon_err"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="couponType">Coupon Type</label>
                                <select name="coupon_type" id="coupon_type" class="form-select form-select-sm">
                                    <option selected disabled>Services</option>
                                    <option value="{{MyApp::P_COUPON}}" selected>P-Coupon</option>
                                    <option value="{{MyApp::E_COUPON}}">E-Coupon</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="userId">User Id</label>
                                <input type="text" id="unique_id" class="form-control form-control-sm" placeholder="User Id" >
                                <input type="hidden" name="user_id" id="user_id" class="form-control form-control-sm" >
                            </div>
                        </div>
                        
                        <div class="row mt-2">
                            <div class="col-md-8">
                                <label for="userName">User Name</label>
                                <input type="text" name="user_name" id="user_name" class="form-control form-control-sm" placeholder="User Name" disabled readonly>
                            </div>
                            <div class="col-md-4">
                                <label for="noOfCoupon">No Of Coupon</label>
                                <input type="number" name="no_of_coupon" id="no_of_coupon" class="form-control form-control-sm" placeholder="No Of Coupon">
                            </div>
                            
                            
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label for="couponPrice">Price</label>
                                <input type="text" name="coupon_price" id="coupon_price" class="form-control form-control-sm" value="0" placeholder="Price" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="couponAmount">Amount</label>
                                <input type="text" name="coupon_amount" id="coupon_amount" class="form-control form-control-sm" placeholder="Amount" readonly>
                            </div>
                        </div>
                                            
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" id="saveDistributeCouponBtn" class="btn btn-primary btn-sm">Save</button>
                </div>
            </div>
        </div>
    </div>

@endsection 

@section('script')
{{-- <script src="{{asset('public/sdpl-assets/user/js/slider.js')}}"></script> --}}
  <script>
    $(document).ready(function () {

        $(document).on('click','#distributeCoupon', function (e) {
            e.preventDefault();
            
            $('#distributeCouponModal').modal('show');
            $('#distribute_coupon_err').html('');
            $('#distribute_coupon_err').removeClass('alert alert-danger');
            $("#distributeCouponForm").trigger("reset"); 
            $('#saveDistributeCouponBtn').removeClass('hide');
            // $('#updatePartnerBtn').addClass('hide');
        });
        $(document).on('change','#coupon_type', function (e) {
            e.preventDefault();
            getUserDetail();
        });
        
        $(document).on('focusout','#unique_id', function (e) {
            e.preventDefault();
            getUserDetail();
        });

        $(document).on('focusout','#saveDistributeCouponBtn', function (e) {
            e.preventDefault();
            saveDistributeCoupon();
        });

        $(document).on('keyup','#no_of_coupon', function (e) {
            e.preventDefault();
            calculateTotalAmount();
        });

    });

    function getUserDetail() {
        var coupon_type = $('#coupon_type').val();
        var unique_id = $('#unique_id').val();

        if (unique_id) {
            $.ajax({
                type: "get",
                url: "get-user-detail/"+coupon_type+'/'+unique_id,
                dataType: "json",
                success: function (response) {
                    // console.log(response)
                    if (response.status == 200) {
                        $('#user_name').val(response.data.user_name).css('textTransform', 'capitalize');  
                        $('#user_id').val(response.data.user_id);  
                        $('#coupon_price').val(response.data.coupon_price);  
                        // $("#state_id").trigger("chosen:updated"); 
                    }else{
                        alert('Invalid retailer id please enter correct retailer id.');
                        $('#unique_id').val('');
                        $('#user_id').val('');
                        $('#user_name').val('');
                    }
                }
            });
        }

    }

    function calculateTotalAmount(){
        var no_of_coupon = 0;
        var coupon_price = 0;

        var no_of_coupon = parseFloat($('#no_of_coupon').val());
        var coupon_price = parseFloat($('#coupon_price').val());

        if(no_of_coupon == "" || isNaN(no_of_coupon))
        {no_of_coupon = 0;}

        if(coupon_price == "" || isNaN(coupon_price))
        {coupon_price = 0;}

        coupon_amount = parseFloat(no_of_coupon * coupon_price);
        $('#coupon_amount').val(coupon_amount);
    }

    function saveDistributeCoupon() {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        var formData = new FormData($("#distributeCouponForm")[0]);
        $.ajax({
            type: "post",
            url: "save-distribute-coupon",
            data: formData,
            dataType: "json",
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                console.log(response);
                if(response.status === 400)
                {
                    $('#distribute_coupon_err').html('');
                    $('#distribute_coupon_err').addClass('alert alert-danger');
                    var count = 1;
                    $.each(response.errors, function (key, err_value) { 
                        $('#distribute_coupon_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
                    });
                }else{
                    $('#distribute_coupon_err').html('');
                    $('#distributeCouponModal').modal('hide');
                    window.location.reload();
                    
                }
            },
        });

    }
    // function setCouponPrice(object) {
    //     $.ajaxSetup({
    //         headers: {
    //             "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    //         },
    //     });

    //     var coupon_type = $(object).parent().parent().find('.coupon_check').attr('coupon-type');
    //     var role_id = $(object).parent().parent().find('.coupon_check').val();
    //     var coupon_price = $(object).parent().parent().find('.coupon_price').val();
    
    //     var data = {
    //         coupon_type:coupon_type,
    //         role_id:role_id,
    //         coupon_price:coupon_price,
    //     }

    //     // var formData = new FormData($("#partnerForm")[0]);
    //     $.ajax({
    //         type: "post",
    //         url: "set-coupon-price",
    //         data: data,
    //         dataType: "json",
    //         // cache: false,
    //         // contentType: false,
    //         // processData: false,
    //         success: function (response) {
    //             // console.log(response);
    //             if(response.status === 400)
    //             {
    //                 $('#coupon_price_err').html('');
    //                 $('#coupon_price_err').addClass('alert alert-danger');
    //                 var count = 1;
    //                 $.each(response.errors, function (key, err_value) { 
    //                     $('#coupon_price_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
    //                 });
    //             }else{
    //                 $('#coupon_price_err').html('');
    //                 window.location.reload();
    //             }
    //         },
    //     });

    // }

  </script>

@endsection
 

