<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        #Sub{
            background-color:darkcyan;
            border-radius: 5px;
            width: 50px;
            height: 30px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend Practice</title>
</head>
<body>
    <form action="backendpractice.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="username"><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Log In" id="Sub"><br>
    </form>
</body>
</html>

<?php
    echo "Username is {$_POST["username"]} <br>";
    echo "Password is {$_POST["password"]}"
?>