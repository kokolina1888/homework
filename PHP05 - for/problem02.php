<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Задача 2</title>
</head>
<body>
	<form action="problem02.php" method="get">
		<label>
			<p>Въведете число по-голямо от 1</p>
			<input type="text" name="x">
		</label>
		<p>
			<input type="submit" name="submit" value="Въведи">
		</p>
		<?php 
if (isset($_GET['submit'])) {
	if (!empty($_GET['x'])) {
		$x = $_GET['x'];
		$div = $x/2;
		$arr = array();
		$check = 0;
		for ($i = 2; $i < $div  ; $i++) { 
			if ($x % $i == 0) {
				$check = 1;	
				$arr[] = $i;							
			}
		}
		if ($check == 1) {
			echo "Числото $x не е просто число. Освен на 1 и на себе си то се дели на ";
			foreach ($arr as $value) {
				echo $value." ";
			}
		}
		else {
			echo "Числото $x е просто число. То се дели само на 1 и на себе си!";
		}
	}
	else {
		echo "Въведете стойност за X!";
	}
}

?>
	</form>
</body>
