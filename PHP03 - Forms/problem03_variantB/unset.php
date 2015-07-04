<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Отхвърляне на покупката</title>
</head>
<body>
<?php 
var_dump($_SESSION['quantity']);
var_dump($_SESSION['products']);
unset($_SESSION['quantity']);
unset($_SESSION['products']);
var_dump($_SESSION['quantity']);
var_dump($_SESSION['products']);
header('Location: products.php');
?>
	
</body>
</html>