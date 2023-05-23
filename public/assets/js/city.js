/*DataTable*/
var listing = $("#city_tbl").DataTable({
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
        url: aurl + "/city-listing",
    },
    columns: [
        { data: "0" },
        { data: "1" },
        { data: "2" },
        { data: "3" }
    ],
});
let images = [];
$(document).ready(function() {

    /* Validation Of city Form */
    $("#city_form").validate({
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
    });


    $.validator.addMethod(
        "city_check",
        function(value) {
            var city = 0;
            var id = $("#id").val();
            var city = $.ajax({
                url: aurl + "/validate-city",
                type: "POST",
                async: false,
                data: {
                    city: value,
                    id: id,
                },
            }).responseText;
            if (city != 0) {
                return false;
            } else return true;
        },
        "city Already Exists"
    );


    /* Add city Modal */
    $("body").on("click", ".add_city", function() {
        $("#city_form").validate().resetForm();
        $("#city_form").trigger("reset");
        $("#city_modal").modal("show");
        $(".id").val('');
        $("#title_city_modal").text("Add city");
        $(".submit_city").text("Add city");
    });

    var filesArr = [];

    /* Adding And Updating city Modal */
    $(".submit_city").click(function(event) {
        event.preventDefault();
        var form = $("#city_form")[0];
        var formData = new FormData(form);

        if ($("#city_form").valid()) {
            $.ajax({
                url: aurl + "/city-store",
                type: "POST",
                dataType: "JSON",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    $("#city_modal").modal("hide");
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

    /* Display Update city Modal*/
    $("body").on("click", ".edit_city", function(event) {
        var id = $(this).data("id");
        $(".id").val(id);
        event.preventDefault();
        $.ajax({
            url: aurl + "/city-edit",
            type: "POST",
            data: { id: id },
            dataType: "JSON",
            success: function(data) {
                if (data.status) {
                    $("#city_form").trigger("reset");
                    $("#city_form").validate().resetForm();
                    $("#title_city_modal").text("Update city");
                    $("#city_modal").modal("show");
                    $(".submit_city").text("Update city");
                    $("#city").val(data.data.city.name);
                    $(
                        ".state option[value=" +
                        data.data.city.state +
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
                    url: aurl + "/city-delete",
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