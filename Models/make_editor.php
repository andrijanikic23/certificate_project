<?php

    require_once "User.php";
    $new_editor = new User();
    $new_editor -> update_to_editor($_POST["editor"]);

    header("Location: all_users.php");