<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <title>Login</title>
</head>
<body>
    
    <script>
<?php
    if (!isset($_SESSION['uid'])) {
        echo ("let currentUID = -1;\n");
?>
        $(document).ready(function() {
            $("#loginBtn").click(function(event) {
                event.preventDefault();
                console.log($("#username").val());
                console.log($("#password").val());
                // $.post("login_auth.php", {
                //     username: $("#username").val(),
                //     password: $("#password").val()
                // }, function(resp_obj) {
                //     resp_obj = $.parseJSON(resp_obj);
                //     console.log(resp_obj.uid);
                //     // redirect in php header
                // });
            });
        }); // doc ready
    </script>   
    <div class="content-container">
        <form action="redirect.php" method="post">
            <label for="uname"><b>Username</b></label>
            <input id="username" type="text" placeholder="Enter Username" 
            name="uname" required>
            <br>
            <label for="psw"><b>Password</b></label>
            <input id="password" type="text" placeholder="Enter Password" 
            name="psw" required>

            <button id="loginBtn" type="submit">Login</button>
        </form>
    </div>
<?php
    } else {
        echo ("var currentUID = " . $_SESSION['uid'] . ";\n");
    }
?>

</body>
</html>