<?php


    
    require_once "User.php";
    $new_admin = new User();
    $new_admin -> update_to_admin($_POST["admin"]);

    header("Location: all_users.php");