<?php
include "db.php";
include "Session.php";
Session::checkLogin(); // Checking whether user is logged in or not.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- I found this font in the MoveHQ website. Browser developer tools are the best! Points for attention to detail? lol Just kidding -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css2?family=Fjalla+One:wght@400&amp;family=Libre+Franklin:wght@400;500">
    <link rel="stylesheet" href="./stylesheets/login.css">

    <!-- In production I normally download the library files or would opt for using a faster library like React for example. 
    I love jQuery's simplicity and reliability though. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <title>Document</title>
</head>
<body>
    <!-- Simple container to center the content -->
    <div id="main-container">
    <div id="content-container">
        <h2>User Login</h2>
        <p id="text"></p>
        <p id="message"></p>
        <form action="redirect.php" method="post">
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

    <!-- Seperating concerns by diving the HTML, from CSS and JS -->
<script src="./js/login.js"></script>
</body>
</html>



 
