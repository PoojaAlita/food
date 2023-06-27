$(function() {
    /* ajax set up */
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="_token"]').attr("content"),
        },
    });
    $(".admin_login_form").validate({
        rules: {
            email: "required",
            password: {
                required: true,
            },
        },
      
        messages: {
            email: "Please Enter Email Address",
            password: {
                required: "Please Enter Password",
            },
        },
        highlight: function(element) {
            $(element).removeClass("error");
        },
        normalizer: function(value) {
            return $.trim(value);
        },
    });



    $(".forgot_password_form").validate({
        rules: {
            email: "required",
          
        },
        messages: {
            email: "Please Enter Email Address",
        },
        highlight: function(element) {
            $(element).removeClass("error");
        },
        normalizer: function(value) {
            return $.trim(value);
        },
    });

});