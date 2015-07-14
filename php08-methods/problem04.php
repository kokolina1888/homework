<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>задача 4</title>
</head>
<body>
	<p>
		Даден е двумерен масив с размери $M x $N с произволни числа. 
		Да се извика метод, който отпечатва индексите на масива и тяхната стойност
	</p>
	<?php 
function print_mattrix($arr) {
	$count = count($arr);
	echo "<table border='1'>";
	for ($i=0; $i < $count; $i++) { 
		echo "<tr>";
		foreach ($arr[$i] as $key => $value) {
			echo '<td>['.$i.']['.$key.']->'.$value.'</td>';
		}
		echo "</tr>";
		}
		echo "</table>";
	}
	$mattrix = array(array());
	$m = rand(4, 6);
	$n = rand(4, 6);
	for ($j=0; $j < $m ; $j++) { 
		for ($k=0 ; $k < $n ; $k++) { 
			$mattrix[$j][$k] = rand(1, 20);
		}
	}
	print_mattrix($mattrix);
	?>

</body>
</html>