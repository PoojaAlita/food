$(document).ready(function() {

    /* Validation Of city Form */
   /*  $("#food_request_form").validate({
        rules: {
            city: {
                required: true,
                city_check: true
            },
            state: {
                required: true
            }

        },
        messages: {
            city: {
                required: "Please Enter City Name",
            },
            state: {
                required: "Please Select State Name",

            }

        },
        highlight: function(element) {
            $(element).removeClass("error");
        },
        normalizer: function(value) {
            return $.trim(value);
        },
    }); */


   


    /* Add Food Request Modal */
    $('body').on("click", ".add_food_request", function() {
        // $("#food_request_form").validate().resetForm();
        // $("#food_request_form").trigger("reset");
        $("#food_request_modal").modal("show");
        $(".id").val('');
        $("#title_food_request_modal").text("Add Food Request");
        $(".submit_food_request").text("Add Food Request");
    });

    var filesArr = [];

    /* Adding And Updating city Modal */
    $(".submit_food_request").click(function(event) {
        event.preventDefault();
        var form = $("#food_request_form")[0];
        var formData = new FormData(form);

        // if ($("#food_request_form").valid()) {
            $.ajax({
                url: aurl + "/food-detail-store",
                type: "POST",
                dataType: "JSON",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    $("#food_request_modal").modal("hide");
                    toaster_message(data.message, data.icon);
                },
                error: function(request) {
                    toaster_message(
                        "Something Went Wrong! Please Try Again.",
                        "error"
                    );
                },
            });
        // }
    });


});

/*Accept Request*/
$("body").on("click", ".accept_food_request", function(event) {
    var id = $(this).data("id");
    event.preventDefault();
    if(id == 1){
        $.ajax({
            url: aurl + "/food-accept-request",
            type: "POST",
            data: { id: id },
            dataType: "JSON",
            success: function(data) {
                console.log(data);
                toaster_message(data.message, data.icon);
            },
            error: function(request) {
                toaster_message(
                    "Something Went Wrong! Please Try Again.",
                    "error"
                );
            },
        });
    }
    
});