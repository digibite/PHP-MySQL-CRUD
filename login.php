<?php
include "Session.php";

Session::checkLogin(); // Checking whether user is logged in or not.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css2?family=Fjalla+One:wght@400&amp;family=Libre+Franklin:wght@400;500">
    <link rel="stylesheet" href="./stylesheets/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <title>Document</title>
</head>
<body>
    <!-- Simple container to center the content -->
    <div id="main-container">
    <div id="content-container">
        <h3>Sign in</h3>
        <p id="text"></p>
        <p id="message"></p>
        <form id="login-form" action="redirect.php" method="post">
            <table>
                <tr>
                <input type="email" id="email" placeholder="Enter email" name="email">
                <span>
                    <p class="email_error_text"></p>
                </span>
                </tr>
                <tr>
                    <input type="password" id="password" placeholder="Enter password" name="password">
                    <span>
                    <p class="password-error-text"></p>
                    </span>
                </tr>
                <tr>
                    <input type="submit" id="submit" value="Submit">
                </tr>
            </table>
        </form>
        </div>
    </div>

    <!-- Seperating concerns by dividing the HTML, from CSS and JS -->
<script src="./js/login.js"></script>
</body>
</html>



 
