$(function () {
    //Initialize DatePicker
    // alert('Datepickers: ' + $(".bdate").length);
    $('.bdate').pickadate({
        weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa']
    });
    // Link to Sign Up Form
    $("#sign-up").click(function (e) {
        $("a[href='#register']").click();
    });
    // Validate for btnSignUp
    $("#btnSignup").click(function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "database",
            data: "data",
            dataType: "dataType",
            success: function (response) {

            }
        });
    });
    // Link to Login Form
    $("#log-in").click(function (e) {
        $("a[href='#login']").click();
    });
    // Action for btn_login
    $("#btnLogin").click(function (e) {
        e.preventDefault();
        alert($("#formLogin").serialize());
        $.ajax({
            type: "POST",
            url: "executes/validateLogin.php",
            data: $("#formLogin").serialize(),
            // dataType: "dataType",
            beforeSend: function (xhr) {
                alert("Before sending...");
                $("#btnLogin").html("<span class='spinner-border spinner-border-sm'></span>");
            },
            success: function (result, status, xhr) {
                $("#modalLRForm").modal("hide");
                setTimeout(() => {
                    $("main").empty();
                }, 200);
            },
            error: function (xhr, status, error) {
                alert("Error: " + error);
            }
        });

    });
});