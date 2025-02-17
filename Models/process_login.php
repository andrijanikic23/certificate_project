<?php

    require_once "User.php";

    if (session_status() === PHP_SESSION_NONE)
    {
        session_start();
    }

    $new_login = new User();
    $new_login -> login($_POST["email"], $_POST["password"]);
    