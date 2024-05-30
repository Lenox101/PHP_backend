<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Quantity</title>
</head>
<body>
    <form action="pizza.php" method="post">
        <label>Quantity:</label>
        <input type="text" name="quantity">
        <input type="submit" value="Order">
    </form>
</body>
</html>

<?php
    $item = "pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = $price * $quantity;

    echo "You have ordered {$quantity} {$item}/s <br><br>";
    echo "The total price is {$total}"

?>