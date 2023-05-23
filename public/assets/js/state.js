/*DataTable*/
var listing = $("#state_tbl").DataTable({
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
        url: aurl + "/listing",
    },
    columns: [
        { data: "0" },
        { data: "1" },
        { data: "2" }
    ],
});
let images = [];
$(document).ready(function() {

    /* Validation Of State Form */
    $("#state_form").validate({
        rules: {
            state: {
                required: true,
                state_check: true
            },

        },
        messages: {
            state: {
                required: "Please Enter State Name",
            },

        },
        highlight: function(element) {
            $(element).removeClass("error");
        },
        normalizer: function(value) {
            return $.trim(value);
        },
    });


    $.validator.addMethod(
        "state_check",
        function(value) {
            var state = 0;
            var id = $("#id").val();
            var state = $.ajax({
                url: aurl + "/validate-state",
                type: "POST",
                async: false,
                data: {
                    state: value,
                    id: id,
                },
            }).responseText;
            if (state != 0) {
                return false;
            } else return true;
        },
        "State Already Exists"
    );


    /* Add State Modal */
    $("body").on("click", ".add_state", function() {
        $("#state_form").validate().resetForm();
        $("#state_form").trigger("reset");
        $("#state_modal").modal("show");
        $(".id").val('');
        $("#title_state_modal").text("Add State");
        $(".submit_state").text("Add State");
    });

    var filesArr = [];

    /* Adding And Updating State Modal */
    $(".submit_state").click(function(event) {
        event.preventDefault();
        var form = $("#state_form")[0];
        var formData = new FormData(form);

        if ($("#state_form").valid()) {
            $.ajax({
                url: aurl + "/store",
                type: "POST",
                dataType: "JSON",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    $("#state_modal").modal("hide");
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

    /* Display Update State Modal*/
    $("body").on("click", ".edit_state", function(event) {
        var id = $(this).data("id");
        $(".id").val(id);
        event.preventDefault();
        $.ajax({
            url: aurl + "/edit",
            type: "POST",
            data: { id: id },
            dataType: "JSON",
            success: function(data) {
                if (data.status) {
                    $("#state_form").trigger("reset");
                    $("#state_form").validate().resetForm();
                    $("#title_state_modal").text("Update State");
                    $("#state_modal").modal("show");
                    $(".submit_state").text("Update State");
                    $("#state").val(data.data.state.name);

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
                    url: aurl + "/delete",
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