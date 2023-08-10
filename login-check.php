<!-- login-check.php -->
<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    // username = "sabbir";
    // password = "123456";

    if($username == "sabbir" && $password == "123456"){
        header("Location: dashboard.php?message= Login Successfully.");
    }
    else{
        header("Location: login-form.php?message= Login Error...");
    }
?>