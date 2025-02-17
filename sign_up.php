<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "POST" action="Models/process_sign_up.php">
        <label for="first_name">First name</label>
        <input name = "first_name" type="text" required>
        <label for="last_name">Last name</label>
        <input name = "last_name" type="text" required>
        <label for="email">Email</label>
        <input name = "email" type="email" required>
        <label for="password">Password</label>
        <input name = "password" type= "password" required>
        <button>Sign up</button>

    </form>
    
</body>
</html>