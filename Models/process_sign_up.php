<?php

    require_once "User.php";

    
    
    $new_registration = new User();
    $new_registration -> register($_POST["first_name"], $_POST["last_name"], $_POST["email"], $_POST["password"]);
    header("Location: ../login.php");