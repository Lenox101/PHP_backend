<?php
    $password = "sha256";
    $hash = password_hash($password, CRYPT_SHA256);


    if (password_verify("sha256",$hash)){
        echo "<p style = 'color:green;'> You are logged in </p>";
    }
    else{
        echo "<p style = 'color:red;'> Invalid Password </p>";
    }
?>