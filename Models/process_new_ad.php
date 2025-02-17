<?php

    require_once "Advertsement.php";
    
    if(!isset($_GET["name"]) || empty($_GET["name"]))
    {
        die("You haven't entered the name!");
    }

    if(!isset($_GET["category"]) || empty($_GET["category"]))
    {
        die("You haven't entered the type!");
    }

    if(!isset($_GET["price_per_night"]) || empty($_GET["price_per_night"]))
    {
        die("You haven't entered price per night!");
    }

    if(!isset($_GET["location"]) || empty($_GET["location"]))
    {
        die("You haven't entered the location!");
    }

    if(!isset($_GET["image"]) || empty($_GET["image"]))
    {
        die("You haven't entered the image!");
    }

    if(!isset($_GET["size"]) || empty($_GET["size"]))
    {
        die("You haven't entered the size!");
    }


    $new_advert = new Advertsement(); 
    $new_advert -> new_ad($_GET["name"], $_GET["category"], $_GET["price_per_night"],$_GET["location"],  $_GET["image"], $_GET["size"]);
    $id = $new_advert -> current_id($_GET["name"]);

    if(isset($_GET["wi_fi"]) || !empty($_GET["wi_fi"]))
    {
        $new_advert -> wi_fi($_GET["wi_fi"], $id);
    }
    
    if(isset($_GET["parking"]) || !empty($_GET["parking"]))
    {
        $new_advert -> parking($_GET["parking"], $id);
    }
    
    if(isset($_GET["pet_friendly"]) || !empty($_GET["pet_friendly"]))
    {
        $new_advert -> pet_friendly($_GET["pet_friendly"], $id);
    }

    header("Location: ../index.php");
    


    
    
    

    