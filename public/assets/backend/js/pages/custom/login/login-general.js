"use strict";

// Class Definition
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
            console.error("Form or submit button not found!");
            return;
        }

        // Init form validation rules
        validation = FormValidation.formValidation(form, {
            fields: {
                username: {
                    validators: {
                        notEmpty: {
                            message: "Username is required",
                        },
                    },
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: "Password is required",
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

                    // AJAX request
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
                                    text: "You have successfully logged in!",
                                    icon: "success",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary",
                                    },
                                }).then(function (result) {
                                    if (result.isConfirmed) {
                                        window.location.href = response.redirect_url;
                                    }
                                });
                            } else {
                                Swal.fire({
                                    text: response.message,
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary",
                                    },
                                });
                            }
                        },
                        error: function () {
                            Swal.fire({
                                text: "Terjadi Kesalahan Saat Mencoba Login, Silahkan Cek Email & Password Anda.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
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
                        text: "Terjadi Kesalahan Saat Mencoba Login, Silahkan Cek Email & Password Anda.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        },
                    });
                }
            });
        });

        // Handle forgot button
        $("#kt_login_forgot").on("click", function (e) {
            e.preventDefault();
            _showForm("forgot");
        });

        // Handle signup
        $("#kt_login_signup").on("click", function (e) {
            e.preventDefault();
            _showForm("signup");
        });
    };

    return {
        init: function () {
            _login = $("#kt_login");

            if (!_login.length) {
                console.error("Login container not found!");
                return;
            }

            _handleSignInForm();
        },
    };

    var _handleSignUpForm = function(e) {
        var validation;
        var form = KTUtil.getById('kt_login_signup_form');

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validation = FormValidation.formValidation(
			form,
			{
				fields: {
					fullname: {
						validators: {
							notEmpty: {
                            message: 'Username is required'
							}
						}
					},
					email: {
                        validators: {
							notEmpty: {
								message: 'Email address is required'
							},
                            emailAddress: {
								message: 'The value is not a valid email address'
							}
						}
					},
                    password: {
                        validators: {
                            notEmpty: {
                                message: 'The password is required'
                            }
                        }
                    },
                    cpassword: {
                        validators: {
                            notEmpty: {
                                message: 'The password confirmation is required'
                            },
                            identical: {
                                compare: function() {
                                    return form.querySelector('[name="password"]').value;
                                },
                                message: 'The password and its confirm are not the same'
                            }
                        }
                    },
                    agree: {
                        validators: {
                            notEmpty: {
                                message: 'You must accept the terms and conditions'
                            }
                        }
                    },
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					bootstrap: new FormValidation.plugins.Bootstrap()
				}
			}
		);

        $('#kt_login_signin_submit').on('click', function (e) {
            e.preventDefault();

            validator.validate().then(function (status) {
                if (status === "Valid") {
                    submitButton.setAttribute("data-kt-indicator", "on");
                    submitButton.disabled = true;

                    // AJAX request
                    $.ajax({
                        url: form.getAttribute("action"),
                        type: "POST",
                        data: $(form).serialize(),
                        headers: {
                            "X-CSRF-TOKEN": $(
                                'meta[name="csrf-token"]'
                            ).attr("content"),
                        },
                        success: function (response) {
                            if (response.success) {
                                Swal.fire({
                                    text: "You have successfully logged in!",
                                    icon: "success",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary",
                                    },
                                }).then(function (result) {
                                    if (result.isConfirmed) {
                                        window.location.href =
                                            response.redirect_url;
                                    }
                                });
                            } else {
                                Swal.fire({
                                    text: response.message,
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary",
                                    },
                                });
                            }
                        },
                        error: function () {
                            Swal.fire({
                                text: "Terjadi Kesalahan Saat Mencoba Login, Silahkan Cek Email & Password Anda.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary",
                                },
                            });
                        },
                        complete: function () {
                            submitButton.removeAttribute(
                                "data-kt-indicator"
                            );
                            submitButton.disabled = false;
                        },
                    });
                } else {
                    Swal.fire({
                        text: "Terjadi Kesalahan Saat Mencoba Login, Silahkan Cek Email & Password Anda.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        },
                    });
                }
            });
        });

        // Handle cancel button
        $('#kt_login_signup_cancel').on('click', function (e) {
            e.preventDefault();

            _showForm('signin');
        });
    }

    var _handleForgotForm = function(e) {
        var validation;

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validation = FormValidation.formValidation(
			KTUtil.getById('kt_login_forgot_form'),
			{
				fields: {
					email: {
						validators: {
							notEmpty: {
								message: 'Email address is required'
							},
                            emailAddress: {
								message: 'The value is not a valid email address'
							}
						}
					}
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					bootstrap: new FormValidation.plugins.Bootstrap()
				}
			}
		);

        // Handle submit button
        $('#kt_login_forgot_submit').on('click', function (e) {
            e.preventDefault();

            validation.validate().then(function(status) {
		        if (status == 'Valid') {
                    // Submit form
                    KTUtil.scrollTop();
				} else {
					swal.fire({
		                text: "Sorry, looks like there are some errors detected, please try again.",
		                icon: "error",
		                buttonsStyling: false,
		                confirmButtonText: "Ok, got it!",
                        customClass: {
    						confirmButton: "btn font-weight-bold btn-light-primary"
    					}
		            }).then(function() {
						KTUtil.scrollTop();
					});
				}
		    });
        });

        // Handle cancel button
        $('#kt_login_forgot_cancel').on('click', function (e) {
            e.preventDefault();

            _showForm('signin');
        });
    }

    // Public Functions
    return {
        // public functions
        init: function() {
            _login = $('#kt_login');

            _handleSignInForm();
            _handleSignUpForm();
            _handleForgotForm();
        }
    };
}();

// Class Initialization
jQuery(document).ready(function() {
    KTLogin.init();
});
