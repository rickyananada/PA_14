let page;

function main_content(cont) {
    $('#content_list').hide();
    $('#content_input').hide();
    $('#content_detail').hide();
    $('#' + cont).show();
}

$(window).on('hashchange', function () {
    if (window.location.hash) {
        page = window.location.hash.replace('#', '');
        if (page == Number.NaN || page <= 0) {
            return false;
        } else {
            load_list(page);
        }
    }
});
$(document).ready(function () {
    $(document).on('click', '.paginasi', function (event) {
        event.preventDefault();
        $('.paginasi').removeClass('active');
        $(this).parent('.paginasi').addClass('active');
        // var myurl = $(this).attr('href');
        page = $(this).attr('halaman').split('page=')[1];
        load_list(page);
    });
});
load_cart(localStorage.getItem("route_cart"));

function load_cart(url) {
    // let data = "view="+ view + "&load_keranjang=";
    $.ajax({
        type: "GET",
        url: url,
        dataType: 'json',
        success: function (response) {
            $('.top-cart-items').html(response.collection);
            $('.top-checkout-price').html('Rp. ' + thousand(response.total_harga));
        },
    });
}

function load_list(page) {
    loading();
    $.get('?page=' + page, $('#content_filter').serialize(), function (result) {
        $('#list_result').html(result);
        main_content('content_list');
        loaded();
    }, "html");
}

function load_input(url) {
    loading();
    $.get(url, {}, function (result) {
        $('#content_input').html(result);
        main_content('content_input');
        loaded();
    }, "html");
}

function load_detail(url) {
    loading();
    $.get(url, {}, function (result) {
        $('#content_detail').html(result);
        main_content('content_detail');
        loaded();
    }, "html");
}

function add_cart(tombol, form, url, title, product) {
    $(tombol).submit(function () {
        return false;
    });
    let data = $(form).serialize() + "&product=" + product;
    $(tombol).prop("disabled", true);
    $(tombol).html("Please wait");
    $.ajax({
        type: 'POST',
        url: url,
        data: data,
        dataType: 'json',
        beforeSend: function () {

        },
        success: function (response) {
            if (response.alert == "success") {
                success_toastr(response.message);
                $(form)[0].reset();
                setTimeout(function () {
                    $(tombol).prop("disabled", false);
                    $(tombol).html(title);
                    load_cart(localStorage.getItem("route_cart"));
                }, 2000);
            } else {
                error_toastr(response.message);
                setTimeout(function () {
                    $(tombol).prop("disabled", false);
                    $(tombol).html(title);
                }, 2000);
            }
        },
    });
}

function handle_confirm(title, confirm_title, deny_title, method, route) {
    Swal.fire({
        title: title,
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: confirm_title,
        denyButtonText: deny_title,
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: method,
                url: route,
                dataType: 'json',
                success: function (response) {
                    if (response.redirect == "input") {
                        load_input(response.route);
                    } else {
                        load_list(1);
                    }
                    Swal.fire(response.message)
                }
            });
        } else if (result.isDenied) {
            Swal.fire('Konfirmasi dibatalkan', '', 'info')
        }
    });
}

function handle_delete(url) {
    $.confirm({
        animationSpeed: 1000,
        animation: 'zoom',
        closeAnimation: 'scale',
        animateFromElement: false,
        columnClass: 'medium',
        title: 'Konfirmasi Hapus Data',
        content: 'Apakah Anda Yakin Ingin Menghapus Data Anda ?',
        // icon: 'fa fa-question',
        theme: 'material',
        closeIcon: true,
        type: 'white',
        autoClose: 'No|5000',
        buttons: {
            Yes: {
                btnClass: 'btn-red any-other-class',
                action: function () {
                    $.ajax({
                        type: "DELETE",
                        url: url,
                        dataType: "json",
                        success: function (response) {
                            if (response.alert == "success") {
                                success_toastr(response.message);
                                load_list(1);
                                load_cart(localStorage.getItem("route_cart"));
                            } else {
                                error_toastr(response.message);
                                load_list(1);
                            }
                        },
                    });
                }
            },
            No: {
                btnClass: 'btn-blue', // multiple classes.
                // ...
            }
        }
    });
}

function handle_open_modal(url, modal, content) {
    $.ajax({
        type: "POST",
        url: url,
        success: function (html) {
            $(content).html(html);
            $(modal).modal('show');
        },
        error: function () {
            $(content).html('<h3>Ajax Bermasalah !!!</h3>')
        },
    });
}

function handle_save(tombol, form, url, method, title) {
    $(tombol).submit(function () {
        return false;
    });
    let data = $(form).serialize();
    $(tombol).prop("disabled", true);
    $(tombol).html("Please wait");
    $.ajax({
        type: method,
        url: url,
        data: data,
        dataType: 'json',
        beforeSend: function () {

        },
        success: function (response) {
            if (response.alert == "success") {
                success_toastr(response.message);
                $(form)[0].reset();
                setTimeout(function () {
                    $(tombol).prop("disabled", false);
                    $(tombol).html(title);
                    main_content('content_list');
                    load_list(1);
                }, 2000);
            } else {
                error_toastr(response.message);
                setTimeout(function () {
                    $(tombol).prop("disabled", false);
                    $(tombol).html(title);
                }, 2000);
            }
        },
    });
}

function handle_save_modal(tombol, form, url, modal, title) {
    $(tombol).submit(function () {
        return false;
    });
    let data = $(form).serialize();
    // $(tombol).addClass(spinner);
    $(tombol).prop("disabled", true);
    $(tombol).html("Please wait");
    $.ajax({
        type: "POST",
        url: url,
        data: data,
        dataType: 'json',
        success: function (response) {
            if (response.alert == "success") {
                success_toastr(response.message);
                $(form)[0].reset();
                $(modal).modal('toggle');
                setTimeout(function () {
                    $(tombol).html(title);
                    main_content('content_list');
                    load_list(1);
                }, 2000);
            } else {
                error_toastr(response.message);
                setTimeout(function () {
                    $(tombol).prop("disabled", false);
                    $(tombol).html(title);
                }, 2000);
            }
        },
    });
}

function handle_upload(tombol, form, url, method) {
    $(document).one('submit', form, function (e) {
        let data = new FormData(this);
        data.append('_method', method);
        $(tombol).prop("disabled", true);
        $(tombol).attr("data-kt-indicator", "on");
        loading();
        $.ajax({
            type: 'POST',
            url: url,
            data: data,
            enctype: 'multipart/form-data',
            cache: false,
            contentType: false,
            resetForm: true,
            processData: false,
            dataType: 'json',
            beforeSend: function () {

            },
            success: function (response) {
                loaded();
                if (response.alert == "success") {
                    success_toastr(response.message);
                    $(form)[0].reset();
                    setTimeout(function () {
                        if (response.redirect == "input") {
                            load_input(response.route);
                        }
                        if (!response.redirect) {
                            $(tombol).prop("disabled", false);
                            $(tombol).removeAttr("data-kt-indicator");
                            main_content('content_list');
                            load_list(1);
                        }
                    }, 2000);
                } else {
                    error_toastr(response.message);
                    setTimeout(function () {
                        $(tombol).prop("disabled", false);
                        $(tombol).removeAttr("data-kt-indicator");
                    }, 2000);
                }
            },
        });
        return false;
    });
}