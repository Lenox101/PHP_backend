<?php
    //include("database.php");

    /*$username = "Squidward";
    $password = "clarinet2";
    $hash = password_hash($password,PASSWORD_BCRYPT);

    $sql_insert = "INSERT INTO users (user, passwords)
                    VALUES ('$username','$hash')";


    try{
        mysqli_query($conn,$sql_insert);
        echo "User is now registered";
    } 
    catch(mysqli_sql_exception){
        echo "Could not register user";
    }
    // Close connection
    */


    $sql_retrieve_data = "SELECT * FROM users";
    $result =  mysqli_query($conn,$sql_retrieve_data);

    if($result){
        echo "User Id       Username    Registration Date <br>";

        while($row = mysqli_fetch_assoc($result)){
            echo $row['id'] . '      ' . $row['user'] .'       '. $row['reg_date'] .'<br>';
        };
    }
    else{
        echo "No such user found in the database.";
    }
    


    mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connecting Web</title>
</head>
<body>
    
</body>
</html>