<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
</head>
<body>

    <h1>SHOP</h1>
    <ul>
        <li><a href="./">Index</a></li>
        <li><a href="./shop.php">shop</a></li>
        <li><a href="./contact.php">contact</a></li>
        <li><a href="./disclaimer.php">disclaimer</a></li>
    </ul>
        
    <?php require './client.php'; ?>
    <?php print_r($woocommerce->get('products')); ?>


</body>
</html>