$(document).ready(function () {
    $('#registration_form').submit(function() {
        var url = "register_submit1.php";
        var data = $('#registration_form').serialize();
        $.ajax(url, {
            data: data,
            success: registration_success,
            error: on_error,
            type: "POST"
        });
        return false;
    });

    $('#login_form').submit(function() {
        var url = "login_submit1.php";
        var data = $('#login_form').serialize();
        $.ajax(url, {
            data: data,
            success: login_success,
            error: on_error,
            type: "POST"
        });
        return false;
    });
});

var registration_success = function (response) {
    response = JSON.parse(response);

    if (response.success) {
        alert(response.message);
        window.location.href = "homepage_loggedin.html";
    } else {
        alert(response.message);
    }
};

var login_success = function (response) {
    response = JSON.parse(response);

    if (response.success) {
        alert(response.message);
        window.location.href = "homepage_loggedin.html";
    } else {
        alert(response.message);
    }
};

var on_error = function () {
    alert("something went wrong");
};
