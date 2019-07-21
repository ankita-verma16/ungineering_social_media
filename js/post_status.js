$(document).ready(function () {
    $('#update_status').submit(function() {
        var url = "post_status.php";
        var data = $('#update_status').serialize();
        $.ajax(url, {
            data: data,
            success: update_success,
            error: on_error,
            type: "POST"
        });
        return false;
    });

});

var update_success = function (response) {
    response = JSON.parse(response);

    if (response.success) {
        alert(response.message);
        window.location.href = "/";
    } else {
        alert(response.message);
    }
};

var on_error = function () {
    alert("something went wrong");
};
