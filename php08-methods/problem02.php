<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>задача 2</title>
</head>
<body>
	<p>Да се напише метод, който по въведени 2 числа казва дали тяхното произведение е четно или нечетно. Да се извика метода за 3 различни двойки числа</p>
	<?php 
function even_odd($num1, $num2) {
	$mult = $num1*$num2;
	if ($mult % 2 == 0) {
		echo "Произведението на $num1 и $num2 е четно число.";
	} else {
		echo "Произведението на $num1 и $num2 е нечетно число.";
	}
}
	even_odd(3, 18);
	echo "<br />";
	even_odd(3, 17);
	?>
</body>
</html>