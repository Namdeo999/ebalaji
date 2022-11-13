function saveMobileNo() {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    var formData = new FormData($("#mobileForm")[0]);
    $.ajax({
        type: "post",
        url: "register",
        data: formData,
        dataType: "json",
        cache: false,
        contentType: false,
        processData: false,
        success: function (response) {
            console.log(response);
            if(response.status === 400)
            {
                console.log(response)
            }else{
                window.location.reload();
            }
        },
    });
}
