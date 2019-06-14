<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
</head>
<body>
<form action="cart.php" method="POST">
	<input type="submit" name="cart" value="Cart">
</form>
</body>
</html>

<?php
include "connect.php";
if(isset($_POST['cart'])){
	echo "Added to cart";
}
?>