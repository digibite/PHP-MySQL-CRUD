// I learned from some senior devs that the best comments are descriptive naming for variables, methods, etc.
$(document).ready(function () {
  $("#submit").click(function () {
    let email = $("#email").val();
    let password = $("#password").val();
    if (email.length == "" || password.length == "") {
      $("#message").html("please fill out this field first").fadeIn();
      $("#message").addClass("error");
      return false;
    } else {
      $.ajax({
        type: "POST",
        url: "redirect.php",
        data: { email: email, password: password },
        success: function (feedback) {
          $("#text").html(feedback);
        },
      });
    }
  });
  $(".email_error_text").hide();
  $(".password-error-text").hide();
  let errorEmail = false;
  let errorPassword = false;
  $("#email").focusout(function () {
    checkEmail();
  });
  $("#password").focusout(function () {
    checkPassword();
  });
  function checkEmail() {
    $("#message").hide();
    //Check to see if string is email. Thank you stack overflow for verifying. It's tough remembering all this regex sequence
    let pattern = new RegExp(
      /^([a-zA-Z0–9_\.\-])+\@(([a-zA-Z0–9\-])+\.)+([a-zA-Z0–9]{2,4})+$/
    );
    if (pattern.test($("#email").val())) {
      $(".email_error_text").hide();
    } else {
      $(".email_error_text").html("Invalid email address");
      $(".email_error_text").show().addClass("error");
      errorEmail = true;
    }
  }
  function checkPassword() {
    $("#message").hide();
    let password_length = $("#password").val().length;
    if (password_length < 8) {
      $(".password-error-text").html("Should be at least 8 characters");
      $(".password-error-text").show().addClass("error");
      errorPassword = true;
    } else {
      $(".password-error-text").hide();
    }
  }
});
