<?php

    require_once "Advertsement.php";

    $delete_ad = new Advertsement();
    $delete_ad -> delete_ad($_GET["id"]);
    header("Location: ../index.php");