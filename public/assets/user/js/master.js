
function getStateByCountry(country_id) {
    $.ajax({
        type: "get",
        url: "get-state-by-country/"+country_id,
        dataType: "json",
        success: function (response) {
            // console.log(response)
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
        url: "get-city-by-state/"+state_id,
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