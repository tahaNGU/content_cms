/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

$("#check_all").click(function () {
    $("table tbody .checkbox_item").prop('checked', $(this).prop('checked'));
});


$(".delete").click(function () {
    var href = $(this).data("href")
    Swal.fire({
        title: "آیا می خواهید حذف کنید؟",
        icon: "",
        iconHtml: '',
        confirmButtonText: "بله",
        cancelButtonText: "خیر",
        showCancelButton: true,
        showCloseButton: true,

    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: href,
                type: 'DELETE',
                data: {
                    '_token': $("input[name='_token']").val(),
                },
                success: function (response) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 1000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.onmouseenter = Swal.stopTimer;
                            toast.onmouseleave = Swal.resumeTimer;
                        }
                    });
                    Toast.fire({
                        icon: "success",
                        title: "حذف با موفقیت انجام شد"
                    });
                    setTimeout(function () {

                        location.reload();
                    }, 1000)
                },
                error: function () {
                    alert("خظا در بر قراری ارتباط")
                }
            });
        }
    });
})


$("button[name='action_all']").click(function (e) {
    e.preventDefault();
    var url = $("form#action_all").attr("action")
    var data = $("#action_all").serialize() + "&" + "action_type=" + $(this).val()
    if ($(this).val() == "delete_all") {
        var href = $(this).data("href")
        Swal.fire({
            title: "آیا می خواهید حذف کنید؟",
            icon: "",
            iconHtml: '',
            confirmButtonText: "بله",
            cancelButtonText: "خیر",
            showCancelButton: true,
            showCloseButton: true,

        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: url,
                    type: 'POST',
                    dataType: 'json',
                    data: data,
                    success: function (res) {
                        if ($(res['errors']).length) {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: "top-end",
                                showConfirmButton: false,
                                timer: 2000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.onmouseenter = Swal.stopTimer;
                                    toast.onmouseleave = Swal.resumeTimer;
                                }
                            });
                            Toast.fire({
                                icon: "error",
                                title: "لطفا انتخاب کنید"
                            });
                        } else {
                            setTimeout(function () {

                                location.reload();
                            }, 1000)
                        }
                    },
                    error: function () {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 2000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.onmouseenter = Swal.stopTimer;
                                toast.onmouseleave = Swal.resumeTimer;
                            }
                        });
                        Toast.fire({
                            icon: "error",
                            title: "خطا در برقراری ارتباط"
                        });
                    }
                })
            }
        });
    } else {
        $.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            data: data,
            success: function (res) {
                if ($(res['errors']).length) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 2000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.onmouseenter = Swal.stopTimer;
                            toast.onmouseleave = Swal.resumeTimer;
                        }
                    });
                    Toast.fire({
                        icon: "error",
                        title: "لطفا انتخاب کنید"
                    });
                } else {
                    setTimeout(function () {

                        location.reload();
                    }, 1000)
                }
            },
            error: function () {
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 2000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                });
                Toast.fire({
                    icon: "error",
                    title: "خطا در برقراری ارتباط"
                });
            }
        })
    }

})


$(".state_action").on('change', function () {
    // var html = html("<button type='submit' name='action_all' value='change_order'></button>");
    $("[value='change_state_main']").trigger("click")

})




$(".state_checkbox").on('change',function () {
    var url = $("form#action_all").attr("action")
    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'json',
        data:{'item':$(this).attr("data-item"),'_token':$("[name='_token']").val(),'column_name':$(this).attr("data-column"),'action_type':'change_state_item'},

        error:function () {
            alert("خطا در برقراری ارتباط")
        }
    })
})
