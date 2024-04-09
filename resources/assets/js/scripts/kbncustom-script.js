function loaderShow() {
    $("#hoot-loader").removeClass("d-none");
}

function loaderHide() {
    $("#hoot-loader").addClass("d-none");
}

function getImageUrl(mediaobject) {
    if (mediaobject != null) {
        return mediaobject.media_fullpath;
    } else {
        return null;
    }
}

function GetStatusBind(status) {
    // return "<span class='text-capitialize'>" + status + "</span>";
}

function ImageBindForTable(media) {
    var media_url = getImageUrl(media);
    if (media_url) {
        var htmlcontent =
            "<img src='" + media_url + "' heights='40' width='40'>";
        return htmlcontent;
    } else {
        return "";
    }
}

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
        swal(
            "Success",
            '<b style="color:green;">' + message + "</b>",
            "success"
        );
    } else {
        swal("warning", '<b style="color:red;">' + message + "</b>", "warning");
    }
}
