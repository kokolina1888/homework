<?php 
session_start();
//session destroy?!
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Дебитна/кредитна карта</title>
</head>
<body>
	<form method="post" action="card_info.php">
		<p>номер на кредитната карта</p>
		<input type="text" name="card_info">
		<p>налична сума</p>
		<input type="text" name="money_account">
		<!--regex for credit card number-->
		<input type="submit" value="Въведи">
	</form>
	<?php 
	if (!empty($_POST)) {
		if ($_POST['card_info'] ==='') {
			echo "Моля въведете номера на Вашата карта!";
		}
		elseif ($_POST['money_account'] == null) {
			echo "Моля въведете наличността по сметката си!";
		}
		else {
		$money_account = $_POST['money_account'];
		$count = count($_SESSION['products']);
		$products = $_SESSION['products'];
		$quantity = $_SESSION['quantity'];
		$sum_products = 0;
		echo "Вашата количка съдържа -"
		?>
		<ol>
			<?php
			for ($i=0; $i < $count; $i++) { 
				$product_price[$i] = explode('_', $products[$i]);
				//var_dump($product_price[$i]);
				$product_total[$i] = $product_price[$i][1]*$quantity[$i];
				$sum_products = $sum_products + $product_total[$i];
				echo "<li>".$product_price[$i][0]." - ".$quantity[$i]." броя</li>";
			}
			?>
		</ol>
		<p>На обща стойност	<?php echo $sum_products." лева";?></p>
		<?php
		if ($money_account >= $sum_products) {
			$result = $money_account - $sum_products;
			echo "Остатъка по вашата сметка е ". $result." лева"."<br />";
			echo "<br />";
			echo "<a href='logout.php'>Излизане</a>";
		}
		else {
			echo "Недостатъчна наличност по сметката Ви!"."<br />";
			echo "<br />";
			echo "<a href='logout.php'>Излизане</a>";
		}
		
	}
	}

	?>
</body>
</html>