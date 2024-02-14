$(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
});

function ajaxDelete(arg, type) {
    let args = $(arg);
    swal({
        title: "Are you sure?",
        text: "This action will delete this record and cannot be undone!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            $.ajax({
                url: args.data("route"),
                type: "delete",
                data: {
                    id: args.data("value"),
                },
                success: (res) => {
                    swal({
                        icon: "success",
                        title: "Success",
                        text: res.message,
                    }).then((confirm) => {
                        if (confirm) {
                            if (type == "dt") {
                                $(".table").DataTable().ajax.reload();
                            } else {
                                window.location.reload();
                            }
                        }
                    });
                },
                error: (err) => {
                    swal({
                        icon: "error",
                        title: "Oops...",
                        text: err.responseJSON.message,
                    });
                },
            });
        }
    });
}

function ajaxEdit(arg, type) {
    let args = $(arg);
    $.ajax({
        url: args.data("route"),
        type: "get",
        data: {
            id: args.data("value"),
        },
        success: (res) => {
            $("#ajax_modal_container").html(res.modal);
            $("#editModal").modal("show");
        },
        error: (err) => {
            swal({
                icon: "error",
                title: "Oops...",
                text: err.responseJSON.message,
            });
        },
    });
}

function ajaxStoreModal(e, form, modal) {
    e.preventDefault();
    // let formData = $(form).serialize();
    let formData = new FormData(form);
    $.ajax({
        url: $(form).attr("action"),
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: (res) => {
            swal({
                icon: "success",
                title: "Success",
                text: res.message,
            }).then((confirm) => {
                if (confirm) {
                    $(".table").DataTable().ajax.reload();
                    $("#" + modal).modal("hide");
                    $(form).trigger("reset");
                }
            });
        },
        error: (err) => {
            swal({
                icon: "error",
                title: "Oops...",
                text: err.responseJSON.message,
            });
        },
    });
}
function ajaxStore(e, form) {
    e.preventDefault();
    // let formData = $(form).serialize();
    let formData = new FormData(form);
    $.ajax({
        url: $(form).attr("action"),
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: (res) => {
            $(form).trigger("reset");
            swal({
                icon: "success",
                title: "Success",
                text: res.message,
            });
            // .then((confirm) => {
            //     if (confirm) {
            //         $(".table").DataTable().ajax.reload();
            //         $("#" + modal).modal("hide");
            //         $(form).trigger("reset");
            //     }
            // });
        },
        error: (err) => {
            swal({
                icon: "error",
                title: "Oops...",
                text: err.responseJSON.message,
            });
        },
    });
}

function changeStatus(arg) {
    let status = $(arg);
    swal({
        title: "Are you sure?",
        text: "This change will affect all records!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            $.ajax({
                url: status.data("route"),
                type: "PATCH",
                data: {
                    status: status.data("value"),
                },
                success: (res) => {
                    swal({
                        icon: "success",
                        title: "Success",
                        text: res.message,
                    });
                    $(".table").DataTable().ajax.reload();
                },
                error: (err) => {
                    swal({
                        icon: "error",
                        title: "Oops...",
                        text: err.responseJSON.message,
                    });
                },
            });
        }
    });
}

function changeStatusPatch(arg) {
    let status = $(arg);
    swal({
        title: "Are you sure?",
        text: "This change will affect all records!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            $.ajax({
                url: status.data("route"),
                type: "PATCH",
                data: {
                    status: status.data("value"),
                },
                success: (res) => {
                    swal({
                        icon: "success",
                        title: "Success",
                        text: res.message,
                    });
                    $(".table").DataTable().ajax.reload();
                },
                error: (err) => {
                    swal({
                        icon: "error",
                        title: "Oops...",
                        text: err.responseJSON.message,
                    });
                },
            });
        }
    });
}

function accept(arg) {
    let status = $(arg);
    swal({
        title: "Are you sure?",
        text: "This change will affect this record!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            $.ajax({
                url: status.data("route"),
                type: "GET",
                data: {
                    status: status.data("value"),
                },
                success: (res) => {
                    swal({
                        icon: "success",
                        title: "Success",
                        text: res.message,
                    });
                    $(".table").DataTable().ajax.reload();
                },
                error: (err) => {
                    swal({
                        icon: "error",
                        title: "Oops...",
                        text: err.responseJSON.message,
                    });
                },
            });
        }
    });
}

function reject(arg) {
    let status = $(arg);
    swal({
        title: "Are you sure?",
        text: "This change will affect this record!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            $.ajax({
                url: status.data("route"),
                type: "GET",
                data: {
                    status: status.data("value"),
                },
                success: (res) => {
                    swal({
                        icon: "success",
                        title: "Success",
                        text: res.message,
                    });
                    $(".table").DataTable().ajax.reload();
                },
                error: (err) => {
                    swal({
                        icon: "error",
                        title: "Oops...",
                        text: err.responseJSON.message,
                    });
                },
            });
        }
    });
}
