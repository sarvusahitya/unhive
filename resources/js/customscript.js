function errorMessageHandler(response) {
    loaderHide();
    var errors = response.errors;

    // Loop through errors and display them

    $.each(errors, function (field, messages) {
        // Display the first error message for each field
        ShowToastMessage(messages[0], "failed");
    });
}
function ShowToastMessage(message, type = "success") {
    if (type == "success") {
        Swal.fire({
            title: "Success",
            text: message,
            icon: "success",
        });
    } else {
        Swal.fire({
            title: "warning",
            text: message,
            icon: "warning",
        });
    }
}

function loaderShow() {
    $("#hoot-loader").removeClass("d-none");
}

function loaderHide() {
    $("#hoot-loader").addClass("d-none");
}
