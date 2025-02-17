<?php

    
    //require_once "specific_advertsement.php";
    require_once "Base.php";
         
    $id = intval($_GET["id"]);
    $base = new Base();
    
    $result = $base -> sql -> query("SELECT * FROM accommodations WHERE id = $id");

    if($result)
    {
        $ad = $result -> fetch_assoc();
        
        
    }
    else
    {
        echo "Error: " . $base->sql->error;
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

            <h1><?= $ad["name"]?></h1>
            <h3>Location:<?= $ad["location"] ?></h3>
            <img src="<?=$ad['image']?>" alt="Image of accommodation" width = 300 height = 300>
            <p>Price per night:<?= $ad["price_per_night"] ?> euros</p>
            <p>Size:<?= $ad["accommodation_size"]?></p>


    
</body>
</html>