<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Задача 3</title>
</head>
<body>
	<p>Да се напише метод, който по зададен масив 
	отпечатва всички негови елементи и намира и 
	отпечатва сумата на елементите с четен индекс. 
	Да се извика метода 2 пъти за 2 различни масива./0 е четно число/</p>
	<?php 
function even_index($arr) {
		$sum = 0;
	foreach ($arr as $key => $value) {
	 	echo $key.'->'.$value.'<br /> ';	
		if ($key % 2 == 0) {
			$sum += $value;
		}
	}
	echo "<br />Сумата на елементите с четен индекс е $sum.";
}
$numbers = array(0 => 12, 1 => 17, 2 => 1, 4 => 13, 5 => 19);
$numbers1 = array(0 => 1, 2 => 1, 4 => 1, 6 => 1);
even_index($numbers);
echo "<br />";
echo "<br />";
even_index($numbers1);

	?>
</body>
</html>