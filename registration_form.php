<?php
    include('database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <h2>Welcome to Fakebook</h2>
        <label>Username:</label><br>
        <input type="text" name="username"><br><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br><br>
        <input type="submit" style="background-color: aqua; border: radius 10px;" name="submit" value="Register">
    </form>
</body>
</html>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST,"password", FILTER_SANITIZE_SPECIAL_CHARS);

        if(empty($username)){
            echo "<p>Please enter a username.</p>";
        } elseif (empty($password)){
            echo "<p>Please enter your password.</p>";
        }elseif(strlen($password)<7){
            echo "<p>Password must be greater than six digits</p>";
        }
        else{
            $hash = password_hash($password, PASSWORD_BCRYPT);
            $sql_insert = "INSERT INTO users (user, passwords)
                            VALUES ('$username','$hash')";
                            // check for successful insertion of data into database
           
            try{
                mysqli_query($conn,$sql_insert);
                echo "<p>Registration Sucessful</p>";
            }
            catch(mysqli_sql_exception){
                echo "<p>Username Already Exits</p>";
            }
        }
    }

        mysqli_close($conn);
?>