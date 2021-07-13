var p;
(function() {

    $("#frm_profile").on("submit", function() {
      if ($('body .ui-pnotify > .alert-info').length == 0) {
        $.ajax({
            dataType: "json",
            type: "post",
            url: base_url + "account/update_password",
            data: $("#frm_profile").serialize(),
            beforeSend: function() {
                new PNotify({
                    title: "Processing",
                    text: "Please wait..",
                    type: "info",
                    delay: 99999,
                    styling: "bootstrap3"
                });
                $("#btn_profile").attr("disabled", "disabled")
            },
            success: function(a) {
                if (a.status == "yes") {
                    $(".glyphicon-remove").trigger("click");
                    $("#btn_profile").removeAttr("disabled");
                    new PNotify({
                        title: "Success!",
                        text: a.content,
                        styling: "bootstrap3",
                        delay: 2000,
                        type: "success",
                    });
                    $("#btn_profile").removeAttr("disabled");
                    $("#frm_profile")[0].reset();
                    window.location.href = base_url + "resident/"
                } else {
                    $("#btn_profile").removeAttr("disabled");
                    $("#frm_profile")[0].reset();
                    $(".glyphicon-remove").trigger("click");
                    new PNotify({
                        title: "Failed!",
                        text: "<strong>Invalid Username and Password.</strong> Please try again.",
                        styling: "bootstrap3",
                        delay: 2000
                    });
                    $('#u_username').focus();
                }
            },
            error: function(b, a) {
                $(".glyphicon-remove").trigger("click");
                new PNotify({
                    title: "Error",
                    text: "Connection problems occurred... Unable to connect to the Internet! The Internet connection has been lost.",
                    type: "error",
                    styling: "bootstrap3",
                    delay: 2000
                });
                $("#btn_signin").removeAttr("disabled");
                $("#frm_profile")[0].reset();
                $('#u_username').focus();
            }
        });
        return false;
        }
    });

})();
