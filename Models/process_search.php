<?php

    require_once "Search.php";

    $searching = new Search();
    $matches = $searching -> output($_POST["text"]);
?>
<!DOCTYPE html>
<html lang="en">
<hematch>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</hematch>
<body>
    <?php foreach ($matches as $match): ?>
        
            <h1><?= $match["name"]?></h1>
            <h3><?= $match["location"] ?></h3>
            <p><?= $match["price_per_night"] ?></p>
            <a href="view_accommodation.php?id=<?= $match["id"]?>">View accommodation</a>
    <?php endforeach; ?>
        

    
</body>
</html>
    