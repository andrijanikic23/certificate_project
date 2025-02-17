<?php

    
require_once "User.php";

$delete_user = new User();
$delete_user -> delete_user($_GET["id"]);

header("Location: all_users.php");