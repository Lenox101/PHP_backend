<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "businessdb";
    $conn = "";

   
    try{
        $conn = mysqli_connect($db_server, 
                               $db_user,
                               $db_pass,
                               $db_name); //this is an object. it represents our current connection
        
    }
    catch(mysqli_sql_exception){
        echo "Error connecting to database <br>";
    }
    
?>