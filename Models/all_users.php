<?php

    require_once "User.php";

    $all_subscribers = new User();
    $users = $all_subscribers -> all_users();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>All users:</h3>
    <?php foreach($users as $user): ?>
        

        <form method = "POST" action="delete_user.php?id=<?=$user['id']?>">
            <p>Email:<?= $user["email"]?></p>
            <p>Password:<?= $user["password"]?></p>
            <button>Delete this user</button>
        </form>

        <br>

        <?php if ($user["role"] === "admin"): ?>
            <form method = "POST" action="make_editor.php">
                <input name = "editor" type="hidden" value="<?=$user['id']?>">
                <button>Make editor</button>
            </form>
        <?php else: ?>
            <form method = "POST" action="make_admin.php">
                <input name = "admin" type="hidden" value="<?=$user['id']?>">
                <button>Make admin</button>
            </form>
        <?php endif; ?>
        
            
        
        <p>-------------------------------</p>
        
    <?php endforeach; ?>
        
    
    
</body>
</html>

