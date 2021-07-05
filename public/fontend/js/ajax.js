$(document).ready(function() {
    //Ajax setup
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $("#contactData").click(function() {
        var name = $("#name").val();
        var email = $("#email").val();
        var message = $("#message").val();
        $.ajax({
            type: "post",
            url: "/contact/me",
            data: {
                name: name,
                email: email,
                message: message,
            },

            beforeSend: function() {
                $(".centered").css("visibility", "visible");
            },
            success: function(resp) {
                toastr.options = {
                    closeButton: true,
                    closeHtml: "<button>&#xd7;</button>",
                    progressBar: true,
                    showMethod: "slideDown",
                };
                if (resp["status"] == true) {
                    toastr["success"](
                        "I receive your message 😍! I will contact you soon!"
                    );
                }
            },
            error: function() {
                toastr.options = {
                    closeButton: true,
                    closeHtml: "<button>&#xd7;</button>",
                    progressBar: true,
                    showMethod: "slideDown",
                };
                toastr["error"]("Invalid contact.");
            },
            complete: function() {
                $(".centered").css("visibility", "hidden");
                $("#myContact").each(function() {
                    this.reset(); //Here form fields will be cleared.
                });
            },
        });
    });



});