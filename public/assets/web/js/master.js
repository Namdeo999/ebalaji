
$(document).on('click','#registerBtn', function (e) {
    e.preventDefault();
    $('#registerModal').modal('show');
    // $('#userDetailModal').modal('show');
    $('#register_err').html('');
    $('#register_err').removeClass('alert alert-danger');
    $("#registerForm").trigger( "reset"); 
    // $('#saveCountryBtn').removeClass('hide');
    // $('#updateCountryBtn').addClass('hide');
});

$(document).on('click','#saveUserBtn', function (e) {
    e.preventDefault();
    registerUser();
});

function registerUser() {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    var formData = new FormData($("#registerForm")[0]);
    $.ajax({
        type: "post",
        url: "user-register",
        data: formData,
        dataType: "json",
        cache: false,
        contentType: false,
        processData: false,
        success: function (response) {
            // console.log(response);
            
            if(response.status === 400)
            {
                $('#register_err').html('');
                $('#register_err').addClass('alert alert-danger');
                var count = 1;
                $.each(response.errors, function (key, err_value) { 
                    $('#register_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
                });
            }else{
                $('#register_err').html('');
                $('#registerModal').modal('hide');
                // window.location.reload();
                $('#show_user_detail').html('');
                $('#show_user_detail').append(response.html);
                $('#userDetailModal').modal('show');
            }
        },
    });
}

function getStateByCountry(country_id) {
    $.ajax({
        type: "get",
        url: "state-by-country/"+country_id,
        dataType: "json",
        success: function (response) {

            $('#state_id').html("");
            $('#city_id').html("");
            if (response.status == 200) {
                $('#state_id').append(response.html);  
                // $("#state_id").trigger("chosen:updated"); 
            }
        }
    });
}

function getCityByState(state_id) {
    $.ajax({
        type: "get",
        url: "city-by-state/"+state_id,
        dataType: "json",
        success: function (response) {
            $('#city_id').html("");
            if (response.status == 200) {
                $('#city_id').append(response.html); 
                // $("#city_id").trigger("chosen:updated");  
                
            }
        }
    });
}


