<?php

    require_once "Models/all_advertsements.php";
    require_once "Models/User.php";
    
    if (session_status() === PHP_SESSION_NONE)
    {
        session_start();
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
    <a href="index.php">Homepage</a>
    <?php if(isset($_SESSION["user_id"])):?>
        <a href="Models/logout.php">Logout</a>
        <a href="search.php">Search for accommodation</a>
        <a href="new_advertsement.php">New advertsement</a>
        <?php $new_user = new User();
        $result = $new_user -> admin_check($_SESSION["user_id"]); 
        if ($result === true): ?>
            <a href="Models/all_users.php">Users</a>
        <?php endif; ?>
        
        
        
        
        
        
        <?php foreach($ads as $ad): ?>
            <h1><?= $ad["name"]?></h1>
            <h3>Location:<?= $ad["location"] ?></h3>
            <p>Price per night:<?= $ad["price_per_night"] ?></p>
            <a href="Models/view_accommodation.php?id=<?= $ad['id']?>">View accommodation</a>
            <?php if ($result === true): ?>
                <form method = "POST" action="Models/delete_advertsement.php?id=<?= $ad["id"] ?>">
                    <br>
                    <button>Delete advertsement</button>
                    
            <?php endif; ?>

                </form>

        <?php endforeach; ?>
        
        

    <?php else:?>
        <a href="sign_up.php">Sign up</a>
        <a href="login.php">Login</a>
    <?php endif; ?>
    
</body>
</html>