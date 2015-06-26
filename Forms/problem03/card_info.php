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
		//echo $count."<br/>";
		$products = $_SESSION['products'];
		//print_r($products)."<br />";
		$quantity = $_SESSION['quantity'];
		//print_r($quantity)."<br />";
		//echo $count;
		$sum_products = 0;
		echo "Вие закупихте -"
		?>
		<ol>
			<?php
			for ($i=0; $i < $count; $i++) { 
				$product_price[$i] = explode('_', $products[$i]);
				//var_dump($product_price[$i]);
				$product_total[$i] = $product_price[$i][1]*$quantity[$i];
				$sum_products = $sum_products + $product_total[$i];
				echo "<li>".$product_price[$i][0]."-".$quantity[$i]." броя</li>";
			}
			?>
		</ol>
		<p>На обща стойност	<?php echo $sum_products."лева";?></p>
		<?php
		if ($money_account >= $sum_products) {
			$result = $money_account - $sum_products;
			echo "Остатъка по вашата сметка е ". $result." лева";
		}
		else {
			echo "Недостатъчна наличност по сметката Ви!";
		}
		
	}

	?>
</body>
</html>