<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Задача 4</title>
</head>
<body>
	<form action="problem04.php" method="get">
		<p>Въведете число по-голямо от 1</p>
		<input type="number" name="number" min="2">
		<input type="submit" value="submit">
	</form>
	<?php 
	if (!empty($_GET)) {
		$checker = 0;
		if (empty($_GET['number'])) {
			echo "<span>!!!Моля въведете число по-голямо от 1!!!</span>";
		}
		else {
			$number = $_GET['number'];
			if ($number == 1) {
				echo "<span>!!! Числото 1 е просто число.
				Моля въведете число по-голямо от 1!!!</span>";
			}
			else {
				$div = $number/2;
				$arr = array();
				for ($i= 2; $i <= $div ; $i++) { 
					if ($number % $i == 0) {
						$arr[] = $i;
						$checker++;
					}

				}

			}
	
	if ($checker == 0) {
		echo "Числото $number е просто число - то се дели само на 1 и на себе си";
	}
	else {
		echo "Числото $number не е просто число. Освен на 1 и на себе си то се дели и на ";
		foreach ($arr as $value) {
			echo $value." ";
		}
	}
}
}
		?>

	</body>
	</html>