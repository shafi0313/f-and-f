$(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    // $(".alert").alert();
    window.setTimeout(function () {
        $(".alert").alert("close");
    }, 9e3);
    // initSelect2(['#month', '#year', '#class_id', '#section_id']);
    $(".select-2").select2();
    $("#dataTable").dataTable();

    $(document).on("click", "._delete", function (e) {
        e.preventDefault();
        let url = $(this).data("route");
        let title = $(this).data("title");
        $("#_delete").modal("show");
        $("#_deleteTitle").html(title);
        $("#_deleteForm").attr("action", url);
    });
    $(document).on("click", "#checkAll", function () {
        console.log("Checking all");
        const chk = $(".check");
        if ($(this).is(":checked")) {
            chk.prop("checked", true);
        } else {
            chk.prop("checked", false);
        }
    });
    $(".hasChildOptions").on("change", function () {
        if ($(this).prop("checked") == true) {
            if ($(this).data("show_child")) {
                if ($(this).data("show_child") == 1) {
                    $("#" + $(this).data("child_id")).show();
                } else {
                    $("#" + $(this).data("child_id")).hide();
                }
            } else $("#" + $(this).data("child_id")).show();
        } else {
            $("#" + $(this).data("child_id"))
                .find("input")
                .prop("checked", false);
            $("#" + $(this).data("child_id")).hide();
        }
    });
    // image reader on change img tag
    // $(document).on('change', '.imgPrev', function() {
    //     initImageUpload(this);
    // });

    $(document).on("click", "._getExamTime", function (e) {
        e.preventDefault();
        let exam_id = $(this).data("exam_id");
        let class_id = $(this).data("class_id");
        let department_id = $(this).data("department_id");
        $.ajax({
            url: window.urls.ajax,
            type: "post",
            data: {
                action: "getExamSchedule",
                _token: window.csrf,
                exam_id: exam_id,
                class_id: class_id,
                department_id: department_id,
            },
            success: function (data) {
                if (data.status == "success") {
                    $("#filter-content").html(data.html);
                    $('input[data-toggle="btn"]').bootstrapToggle();
                    $(".empty").hide();
                } else {
                    $("#attendance_content").html("");
                    $(".empty").show();
                }
            },
            error: function (data) {
                if (data.status == 422) {
                    var response = $.parseJSON(data.responseText);
                    $.each(response.errors, function (key, value) {
                        cuteToast({
                            title: "",
                            type: "error",
                            message: value,
                            timer: 5000,
                        });
                    });
                }
            },
        });
    });
});

// Checkbox checked
function checkcheckbox() {
    // Total checkboxes
    var length = $(".check").length;
    // Total checked checkboxes
    var totalchecked = 0;
    $(".check").each(function () {
        if ($(this).is(":checked")) {
            totalchecked += 1;
        }
    });

    // Checked unchecked checkbox
    if (totalchecked == length) {
        $("#checkAll").prop("checked", true);
    } else {
        $("#checkAll").prop("checked", false);
    }
}

// //! SELECT 2 START
document.addEventListener("DOMContentLoaded", function () {
    selectTwo();
    selectTwoAjax();
    selectTwoModal();
    selectTwoModalAjax();

    function selectTwo() {
        $(".select_2").select2();
    }

    function selectTwoAjax() {
        $(".select2Ajax").select2({
            // theme: "bootstrap-5",
            width: $(this).data("width")
                ? $(this).data("width")
                : $(this).hasClass("w-100")
                ? "100%"
                : "style",
            placeholder: $(this).data("placeholder")
                ? $(this).data("placeholder")
                : "Start typing to search...",
            minimumInputLength: $(this).data("length")
                ? $(this).data("length")
                : false,
            closeOnSelect: $(this).data("autoclose")
                ? $(this).data("autoclose")
                : true,
            allowClear: true,
            ajax: {
                url: window.location.origin + "/dashboard/select-2-ajax",
                dataType: "json",
                delay: 250,
                cache: true,
                data: function (params) {
                    return {
                        q: $.trim(params.term),
                        type: $(this).data("type"),
                    };
                },
                processResults: function (data) {
                    return {
                        results: data,
                    };
                },
            },
        });
    }

    function selectTwoModal() {
        $(".select2Modal").select2({
            dropdownParent: $("#createModal, #editModal").closest("div"),
        });
    }

    function selectTwoModalAjax() {
        $(".select2ModalAjax").select2({
            // theme: "bootstrap-5",
            width: $(this).data("width")
                ? $(this).data("width")
                : $(this).hasClass("w-100")
                ? "100%"
                : "style",
            placeholder: $(this).data("placeholder")
                ? $(this).data("placeholder")
                : "Start typing to search...",
            minimumInputLength: $(this).data("length")
                ? $(this).data("length")
                : false,
            // dropdownParent: $('.select_2_parent'),
            dropdownParent: $("#createModal, #editModal").closest("div"),
            closeOnSelect: $(this).data("autoclose")
                ? $(this).data("autoclose")
                : true,
            allowClear: true,
            ajax: {
                url: window.location.origin + "/dashboard/select-2-ajax",
                dataType: "json",
                delay: 250,
                cache: true,
                data: function (params) {
                    return {
                        q: $.trim(params.term),
                        type: $(this).data("type"),
                    };
                },
                processResults: function (data) {
                    return {
                        results: data,
                    };
                },
            },
        });
    }
});
//! SELECT 2 END

function changeStatus(arg) {
    let status = $(arg);
    cuteAlert({
        title: "Are you sure?",
        message: "This change will affect all records!",
        type: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            $.ajax({
                url: status.data("route"),
                type: "post",
                data: {
                    status: status.data("value"),
                },
                success: (res) => {
                    cuteAlert({
                        type: "success",
                        title: "Success",
                        message: res.message,
                    });

                    $(".table").DataTable().ajax.reload();
                },
                error: (err) => {
                    cuteAlert({
                        type: "error",
                        title: "Oops...",
                        message: err.responseJSON.message,
                    });
                },
            });
        }
    });
}

function ajaxDelete(arg, type) {
    let args = $(arg);
    cuteAlert({
        title: "Are you sure?",
        message: "This action will delete this record and cannot be undone!",
        type: "warning",
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
                    cuteAlert({
                        type: "success",
                        title: "Success",
                        message: res.message,
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
                    cuteAlert({
                        type: "error",
                        title: "Oops...",
                        message: err.responseJSON.message,
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
            cuteAlert({
                type: "error",
                title: "Oops...",
                message: err.responseJSON.message,
            });
        },
    });
}

function storeModal(e, el) {
    e.preventDefault();
    let route = $(el).data("route");
    $.get(route, function (res) {
        $("#ajax_modal_container").html(res.html);
        $("#storeModal").modal("show");
    });
}

function ajaxStore(e, form, modal = null) {
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
            cuteAlert({
                type: "success",
                title: "Success",
                message: res.message,
            }).then((confirm) => {
                if (confirm) {
                    // $('.table').DataTable().ajax.reload();
                    if (modal != null) {
                        $("#" + modal).modal("hide");
                        $(form).trigger("reset");
                    }
                    var table = $("table");
                    if ($.fn.dataTable.isDataTable(table)) {
                        $(".table").DataTable().ajax.reload();
                    }
                }
            });
        },
        error: (err) => {
            cuteAlert({
                type: "error",
                title: "Oops...",
                message: err.responseJSON.message,
            });
        },
    });
}

function searchChild(event, el, id) {
    $.ajax({
        url: $("option:selected", el).data("route"),
        type: "get",
        data: {
            term: el.val(),
        },
        success: (res) => {
            let opt = '<option value="">Select A Option</option>';
            $.each(res.options, function (id, option) {
                opt += '<option value="' + id + '">' + option + "</option>";
            });
            $(id).html(opt);
        },
        error: (err) => {
            cuteAlert({
                type: "error",
                title: "Oops...",
                message: err.responseJSON.message,
            });
        },
    });
}
function initImageUpload(input) {
    let file = input.files;
    if (input.files && input.files[0]) {
        checkType(input.files[0]);
    }

    function previewImage(file) {
        let thumb = $(".js--image-preview"),
            reader = new FileReader();
        reader.onload = function () {
            thumb.css("background-image", "url(" + reader.result + ")");
        };
        reader.readAsDataURL(file);
        thumb.addClass(" js--no-default");
    }

    function checkType(file) {
        let imageType = /image.*/;
        if (!file.type.match(imageType)) {
            throw "This file is not a valid image type.";
        } else if (!file) {
            throw "No file provided";
        } else {
            previewImage(file);
        }
    }
}

function changeStatusPatch(arg) {
    let status = $(arg);
    cuteAlert({
        type: "warning",
        title: "Are you sure?",
        message: "This change will affect all records!",
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
                    cuteAlert({
                        type: "success",
                        title: "Success",
                        message: res.message,
                        buttonmessage: "Ok",
                    });
                    $(".table").DataTable().ajax.reload();
                },
                error: (err) => {
                    cuteAlert({
                        type: "error",
                        title: "Oops...",
                        message: err.responseJSON.message,
                    });
                },
            });
        }
    });
}

$(document).ready(function () {
    const labels = document.getElementsByTagName("label");
    for (let i = 0; i < labels.length; i++) {
        const label = labels[i];
        const labelText = label.textContent;
        if (labelText.includes("*")) {
            const updatedText = labelText.replace(
                /\*/g,
                '<span style="color: red">*</span>'
            );
            label.innerHTML = updatedText;
        }
    }

    // Select 2
    // $(".select2").select2();
    // $(".select2Modal").select2({
    //     dropdownParent: $(".select_2_parent, #createModal, #editModal").closest(
    //         "div"
    //     ),
    // });

    var fullDate = new Date();
    var twoDigitMonth =
        (fullDate.getMonth() + 1 < 10 ? "0" : "") + (fullDate.getMonth() + 1);
    var currentDate =
        (fullDate.getDate() < 10 ? "0" : "") +
        fullDate.getDate() +
        "/" +
        twoDigitMonth +
        "/" +
        fullDate.getFullYear();
    $(".bDP input").val(currentDate);
    // $('#order_date').val(currentDate);
});

// $(function () {
//     $(".bDP input").datepicker({
//         format: "dd/mm/yyyy",
//         autoclose: true,
//         clearBtn: true,
//         todayHighlight: true,
//         container: ".bDP",
//         defaultViewDate: "today",
//         orientation: "auto",
//     });
// });

function digitInput(event) {
    event.target.value = event.target.value.replace(/[^\d]/g, "");
}

function floatInput(event) {
    event.target.value = event.target.value.replace(/[^\d.]/g, "");
}
function phoneNumberInput(event) {
    event.target.value = event.target.value.replace(/[^\d.+-]/g, "");
}

// For Active Inactive
$(function () {
    document.addEventListener("DOMContentLoaded", function () {
        document
            .getElementById("is_active_input")
            .addEventListener("click", function () {
                document.getElementById("is_active_label").innerHTML = this
                    .checked
                    ? "Active"
                    : "Inactive";
            });
    });
});

function initImageUpload(input) {
    let file = input.files;
    if (input.files && input.files[0]) {
        checkType(input.files[0]);
    }

    function previewImage(file) {
        let thumb = $(".js--image-preview"),
            reader = new FileReader();
        reader.onload = function () {
            thumb.css("background-image", "url(" + reader.result + ")");
        };
        reader.readAsDataURL(file);
        thumb.addClass(" js--no-default");
    }

    function checkType(file) {
        let imageType = /image.*/;
        if (!file.type.match(imageType)) {
            throw "This file is not a valid image type.";
        } else if (!file) {
            throw "No file provided";
        } else {
            previewImage(file);
        }
    }
}
