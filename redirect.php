<?php
    include "db.php";
    include "Session.php";
    $db = new Database();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $email = strip_tags(mysqli_real_escape_string($db->link,trim($email)));
    $password = strip_tags(mysqli_real_escape_string($db->link,trim($password)));

    $query = "SELECT * FROM `users` WHERE `email` ='" . $email ."'";
    $result = $db->select($query);

    if(mysqli_num_rows($result) > 0) {

    $data = mysqli_fetch_array($result);
    // In production we would hash the password for security
    $password_hash = $data["password"];
    if ($password == $password_hash) { 

    Session::set("userId", $data["id"]); 
        //redirect user to index.php
        header("Location: http://localhost/php-ajax-jquery-mysql-crud/index.php");
      }
    else{
        echo "Password does not match";
      }
    }
    else{
        echo "alert('Email does not match');"; //Use script tag and close also
     }
    }