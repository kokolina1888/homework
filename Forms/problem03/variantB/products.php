<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Продукти</title>
</head>
<body>
	<form action="" method="post">
		<ul>
			<li>
				<input type="checkbox" name="products[]" value="Обувки_57.50">Обувки 57,50 лв
				<span>Изберете количество</span>
				<input type="number" name="quantity[]" min="0" max="100">
			</li>
			<li>
				<input type="checkbox" name="products[]" value="Риза_23.50">Риза 23,50 лв
				<span>Изберете количество</span>
				<input type="number" name="quantity[]" min="0" max="100">
			</li>
			<li>
				<input type="checkbox" name="products[]" value="Потник_11.50">Потник 11,50 лв
				<span>Изберете количество</span>
				<input type="number" name="quantity[]" min="0" max="100">
			</li>
			<li>
				<input type="checkbox" name="products[]" value="Тениска_17.50">Тениска 17,50 лв
				<span>Изберете количество</span>
				<input type="number" name="quantity[]" min="0" max="100">
			</li>
			<li>
				<input type="checkbox" name="products[]" value="Чорапи_4.50">Чорапи 4,50 лв
				<span>Изберете количество</span>
				<input type="number" name="quantity[]" min="0" max="100">
			</li>
			<li>
				<input type="submit" value="ДОБАВИ В КОЛИЧКАТА">
			</li>

		</ul>

	</form>
	<?php 
	if (!empty($_POST)) {
		$_SESSION['products'] = $_POST['products'];
		$_SESSION['quantity'] = $_POST['quantity'];
		$_SESSION['quantity'] = array_filter( $_SESSION['quantity']);
		//var_dump($_SESSION['products'])."<br />";
		
		$_quantity = implode("_", $_SESSION['quantity']);
		$_SESSION['quantity']= explode("_", $_quantity);
		//var_dump($_SESSION['quantity']);
		echo "<p>
		<a href='card_info.php'>"
		.$_SESSION['username']. 
		", въведете номера на дебитната/кредитната си карта и наличната сума!</a></p>";
		//var_dump($_SESSION['products']);
	}
	?>
	
</body>
</html>