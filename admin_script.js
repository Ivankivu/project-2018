// JavaScript Document

$('document').ready(function() {
    /* validation */
    $("#adduser").validate({
        rules: {
            user_name: {
                required: true,
                minlength: 3
            },
            user_password: {
                required: true,
                minlength: 8,
                maxlength: 15
            },
            cpassword: {
                required: true,
                equalTo: '#password'
            },
            user_email: {
                required: true,
                email: true
            },
        },
        messages: {
            user_name: "please enter user name",
            password: {
                required: "please provide a password",
                minlength: "password at least have 8 characters"
            },
            user_email: "please enter a valid email address",
            cpassword: {
                required: "please retype your password",
                equalTo: "password doesn't match !"
            }
        },
        submitHandler: submitForm
    });
    /* validation */

    /* form submit */
    function submitForm() {
        var data = $("#adduser").serialize();

        $.ajax({

            type: 'POST',
            url: 'register.php',
            data: data,
            beforeSend: function() {
                $("#error").fadeOut();
                $("#btn-submit").php('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
            },
            success: function(data) {
                if (data == 1) {

                    $("#error").fadeIn(1000, function() {


                        $("#error").php('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry email already taken !</div>');

                        $("#btn-submit").php('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Add user');

                    });

                } else if (data == "registered") {

                    $("#btn-submit").html('<img src="btn-ajax-loader.gif" /> &nbsp; adding user ...');
                    setTimeout('$(".form-signin").fadeOut(500, function(){ $(".signin-form").load("#menu1"); }); ', 5000);

                } else {

                    $("#error").fadeIn(1000, function() {

                        $("#error").php('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; ' + data + ' !</div>');

                        $("#btn-submit").php('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Add User');

                    });

                }
            }
        });
        return false;
    }
    /* form submit */




});