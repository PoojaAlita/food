/*DataTable*/
var listing = $("#food_tbl").DataTable({
    aLengthMenu: [
        [10, 30, 50, -1],
        [10, 30, 50, "All"],
    ],
    iDisplayLength: 10,
    language: {
        search: "",
    },
    ajax: {
        type: "POST",
        url: aurl + "/food-listing",
    },
    columns: [
        { data: "0" },
        { data: "1" },
        { data: "2" },
        { data: "3" },
        { data: "4" },
        { data: "5" },
        { data: "6" },
        { data: "7" },
        { data: "8" },
        { data: "9" },

    ],
});
let images = [];
$(document).ready(function() {

    /* Validation Of food Form */
    $("#food_form").validate({
        rules: {
            food: {
                required: true,
            },
            description: {
                required: true,
            },
            pickup_date: {
                required: true,
            },
            pickup_address: {
                required: true,
            },
            state: {
                required: true
            },
            city: {
                required: true
            },
            contact_person_name: {
                required: true
            },
            contact_person_mobile_number: {
                required: true
            },


        },
        messages: {
            food: {
                required: "Please Enter food Name",
            },
            description: {
                required: "Please Enter Description",
            },
            pickup_date: {
                required: "Please Select Date",
            },
            pickup_address: {
                required: "Please Enter Pickup Address",
            },
            state: {
                required: "Please Select State",
            },
            city: {
                required: "Please Select City",
            },
            contact_person_name: {
                required: "Please Enter Contact Person Name",
            },
            contact_person_mobile_number: {
                required: "Please Enter Contact Person Mobile Number",
            },


        },
        highlight: function(element) {
            $(element).removeClass("error");
        },
        normalizer: function(value) {
            return $.trim(value);
        },
    });



    /* Add food Modal */
    $("body").on("click", ".add_food", function() {
        $("#food_form").validate().resetForm();
        $("#food_form").trigger("reset");
        $("#food_modal").modal("show");
        $(".id").val('');
        $("#title_food_modal").text("Add food");
        $(".submit_food").text("Add food");
    });

    var filesArr = [];

    /* Adding And Updating food Modal */
    $(".submit_food").click(function(event) {
        event.preventDefault();
        var form = $("#food_form")[0];
        var formData = new FormData(form);

        if ($("#food_form").valid()) {
            $.ajax({
                url: aurl + "/food-store",
                type: "POST",
                dataType: "JSON",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    $("#food_modal").modal("hide");
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

    /* Display Update food Modal*/
    $("body").on("click", ".edit_food", function(event) {
        var id = $(this).data("id");
        $(".id").val(id);
        event.preventDefault();
        $.ajax({
            url: aurl + "/food-edit",
            type: "POST",
            data: { id: id },
            dataType: "JSON",
            success: function(data) {
                if (data.status) {
                    $("#food_form").trigger("reset");
                    $("#food_form").validate().resetForm();
                    $("#title_food_modal").text("Update food");
                    $("#food_modal").modal("show");
                    $(".submit_food").text("Update food");
                    $("#food").val(data.data.food.name);
                    $(
                        ".state option[value=" +
                        data.data.food.state +
                        "]"
                    ).prop("selected", true);
                    $(".form-select").select2({
                        dropdownParent: $(".addmodal"),
                        width: "100%",
                    });

                } else {
                    toaster_message(data.message, data.icon);
                }
            },
            error: function(request) {
                toaster_message(
                    "Something Went Wrong! Please Try Again.",
                    "error"
                );
            },
        });
    });

    /* Delete job Data From Database */
    $(document).on("click", ".delete", function() {
        var id = $(this).data('id');
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger me-2'
            },
            buttonsStyling: false,
        })
        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: aurl + "/food-delete",
                    type: "POST",
                    dataType: "JSON",
                    data: { id: id },
                    success: function(data) {
                        if (data.status) {
                            toaster_message(data.message, data.icon, data.redirect_url, aurl);
                        } else {
                            toaster_message(data.message, data.icon, data.redirect_url, aurl);
                        }

                    },
                    error: function(error) {
                        swalWithBootstrapButtons.fire('Cancelled', 'this data is not available :)', 'error')
                    }
                });

            } else if (result.dismiss === Swal.DismissReason.cancel) {
                swalWithBootstrapButtons.fire('Cancelled', 'Your data is safe :)', 'error')
            }
        })
    });

});


