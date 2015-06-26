<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Дебитна/кредитна карта</title>
</head>
<body>
<form method="post" action="card_info.php">
	<input type="text" name="card_info">
	<input type="text" name="money_account">
	<input type="submit" value="Въведи">
</form>
	<?php 
	if (!empty($_POST)) {
		$money_account = $_POST['money_account'];
		$count = count($_SESSION['products']);
		$products = $_SESSION['products'];
		//echo $count;
		for ($i=0; $i < $count; $i++) { 
			 $product_price[$i] = explode('_', $products[$i]);
			 //var_dump($product_price[$i]);
			 $price[$i] = $product_price[$i][1];
			 
		}
		var_dump($price);
	}

	?>
</body>
</html>