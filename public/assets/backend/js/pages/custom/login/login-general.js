"use strict";

var KTLogin = function() {
    var _login;

    var _showForm = function (form) {
        var cls = "login-" + form + "-on";
        var formId = "kt_login_" + form + "_form";

        _login.removeClass("login-forgot-on");
        _login.removeClass("login-signin-on");
        _login.removeClass("login-signup-on");

        _login.addClass(cls);

        KTUtil.animateClass(KTUtil.getById(formId), "animate__animated animate__backInUp");
    };

    var _handleSignInForm = function () {
        var validation;
        var form = KTUtil.getById("kt_login_signin_form");
        var submitButton = document.getElementById("kt_login_signin_submit");

        if (!form || !submitButton) {
            console.error("Sign-in form or submit button not found!");
            return;
        }

        validation = FormValidation.formValidation(form, {
            fields: {
                username: {
                    validators: {
                        notEmpty: {
                            message: "Username harus diisi",
                        },
                    },
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: "Password harus diisi",
                        },
                    },
                },
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                submitButton: new FormValidation.plugins.SubmitButton(),
                bootstrap: new FormValidation.plugins.Bootstrap(),
            },
        });

        submitButton.addEventListener("click", function (e) {
            e.preventDefault();

            validation.validate().then(function (status) {
                if (status === "Valid") {
                    submitButton.setAttribute("data-kt-indicator", "on");
                    submitButton.disabled = true;

                    $.ajax({
                        url: form.getAttribute("action"),
                        type: "POST",
                        data: $(form).serialize(),
                        headers: {
                            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                        },
                        success: function (response) {
                            if (response.success) {
                                Swal.fire({
                                    text: response.message || "Anda berhasil login!",
                                    icon: "success",
                                    buttonsStyling: false,
                                    confirmButtonText: "Oke, mengerti!",
                                    customClass: {
                                        confirmButton: "btn btn-primary",
                                    },
                                }).then(function (result) {
                                    if (result.isConfirmed && response.redirect_url) {
                                        window.location.href = response.redirect_url;
                                    }
                                });
                            } else {
                                Swal.fire({
                                    text: response.message || "Gagal login. Silakan cek kredensial Anda.",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Oke, mengerti!",
                                    customClass: {
                                        confirmButton: "btn btn-primary",
                                    },
                                });
                            }
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            console.error("AJAX Error (Sign In):", textStatus, errorThrown, jqXHR);
                            let errorMessage = "Terjadi kesalahan saat login. Silakan coba lagi nanti.";

                            if (jqXHR.responseJSON && jqXHR.responseJSON.message) {
                                errorMessage = jqXHR.responseJSON.message;
                            } else if (jqXHR.status === 401) { // Unauthorized
                                errorMessage = "Email atau password salah. Silakan coba lagi.";
                            } else if (jqXHR.status === 422 && jqXHR.responseJSON && jqXHR.responseJSON.errors) {
                                let validationErrors = [];
                                for (const field in jqXHR.responseJSON.errors) {
                                    if (jqXHR.responseJSON.errors.hasOwnProperty(field)) {
                                        validationErrors = validationErrors.concat(jqXHR.responseJSON.errors[field]);
                                    }
                                }
                                if (validationErrors.length > 0) {
                                    errorMessage = validationErrors.join('<br>');
                                }
                            }

                            Swal.fire({
                                text: errorMessage,
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Oke, mengerti!",
                                customClass: {
                                    confirmButton: "btn btn-primary",
                                },
                            });
                        },
                        complete: function () {
                            submitButton.removeAttribute("data-kt-indicator");
                            submitButton.disabled = false;
                        },
                    });
                } else {
                    Swal.fire({
                        text: "Harap masukkan username dan password Anda.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Oke, mengerti!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        },
                    });
                }
            });
        });

        $("#kt_login_forgot").on("click", function (e) {
            e.preventDefault();
            _showForm("forgot");
        });

        $("#kt_login_signup").on("click", function (e) {
            e.preventDefault();
            _showForm("signup");
        });
    };

    var _handleSignUpForm = function() {
        var validation;
        var form = KTUtil.getById('kt_login_signup_form');
        var submitButton = document.getElementById("kt_login_signup_submit");

        if (!form || !submitButton) {
            console.error("Sign-up form or submit button not found!");
            return;
        }

        validation = FormValidation.formValidation(
            form,
            {
                fields: {
                    fullname: {
                        validators: {
                            notEmpty: {
                                message: 'Nama lengkap harus diisi'
                            }
                        }
                    },
                    email: {
                        validators: {
                            notEmpty: {
                                message: 'Alamat email harus diisi'
                            },
                            emailAddress: {
                                message: 'Nilai bukan alamat email yang valid'
                            }
                        }
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: 'Password harus diisi'
                            },
                            stringLength: {
                                min: 8,
                                message: 'Password harus minimal 8 karakter'
                            }
                        }
                    },
                    cpassword: {
                        validators: {
                            notEmpty: {
                                message: 'Konfirmasi password harus diisi'
                            },
                            identical: {
                                compare: function() {
                                    return form.querySelector('[name="password"]').value;
                                },
                                message: 'Password dan konfirmasinya tidak sama'
                            }
                        }
                    },
                    agree: {
                        validators: {
                            notEmpty: {
                                message: 'Anda harus menyetujui syarat dan ketentuan'
                            }
                        }
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    submitButton: new FormValidation.plugins.SubmitButton(),
                    bootstrap: new FormValidation.plugins.Bootstrap()
                }
            }
        );

        submitButton.addEventListener('click', function (e) {
            e.preventDefault();

            validation.validate().then(function (status) {
                if (status === "Valid") {
                    submitButton.setAttribute("data-kt-indicator", "on");
                    submitButton.disabled = true;

                    $.ajax({
                        url: 'actionsignup', // Ensure this matches your Laravel route, e.g., '{{ route("actionsignup") }}'
                        type: "POST",
                        data: $(form).serialize(),
                        headers: {
                            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                        },
                        success: function (response) {
                            if (response.success) { // Now checking for response.success
                                Swal.fire({
                                    text: response.message || "Registrasi berhasil! Anda sekarang bisa login.",
                                    icon: "success",
                                    buttonsStyling: false,
                                    confirmButtonText: "Oke, mengerti!",
                                    customClass: {
                                        confirmButton: "btn btn-primary",
                                    },
                                }).then(function (result) {
                                    if (result.isConfirmed) {
                                        _showForm('signin');
                                    }
                                });
                            } else {
                                Swal.fire({
                                    text: response.message || "Terjadi kesalahan saat registrasi. Silakan coba lagi.",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Oke, mengerti!",
                                    customClass: {
                                        confirmButton: "btn btn-primary",
                                    },
                                });
                            }
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            console.error("AJAX Error (Sign Up):", textStatus, errorThrown, jqXHR);

                            let errorMessage = "Terjadi kesalahan saat registrasi. Silakan coba lagi nanti.";

                            if (jqXHR.responseJSON && jqXHR.responseJSON.message) {
                                errorMessage = jqXHR.responseJSON.message;
                            } else if (jqXHR.status === 422 && jqXHR.responseJSON && jqXHR.responseJSON.errors) {
                                let validationErrors = [];
                                for (const field in jqXHR.responseJSON.errors) {
                                    if (jqXHR.responseJSON.errors.hasOwnProperty(field)) {
                                        validationErrors = validationErrors.concat(jqXHR.responseJSON.errors[field]);
                                    }
                                }
                                if (validationErrors.length > 0) {
                                    errorMessage = validationErrors.join('<br>');
                                }
                            }

                            Swal.fire({
                                text: errorMessage,
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Oke, mengerti!",
                                customClass: {
                                    confirmButton: "btn btn-primary",
                                },
                            });
                        },
                        complete: function () {
                            submitButton.removeAttribute("data-kt-indicator");
                            submitButton.disabled = false;
                        },
                    });
                } else {
                    Swal.fire({
                        text: "Harap isi semua kolom yang wajib diisi dengan benar untuk mendaftar.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Oke, mengerti!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        },
                    });
                }
            });
        });

        $('#kt_login_signup_cancel').on('click', function (e) {
            e.preventDefault();
            _showForm('signin');
        });
    };

    return {
        init: function() {
            _login = $('#kt_login');

            if (!_login.length) {
                console.error("Kontainer login tidak ditemukan!");
                return;
            }

            _handleSignInForm();
            _handleSignUpForm();
        }
    };
}();

jQuery(document).ready(function() {
    KTLogin.init();
});