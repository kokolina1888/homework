<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Задача 6</title>
</head>
<body>
	<p>
		Да се напише метод,
		който намира най-малък елемент в масив.
		Чрез този метод да се сортират елементите 
		на масива по големина.
	</p>
	<?php 
	function sort_array($arr) {
		$count = count($arr);
		for ($j=0; $j < $count; $j++) { 
			for ($i=$j+1; $i < $count; $i++) { 
				if ($arr[$i] < $arr[$j]) {
					$min = $arr[$i];
					$arr[$i] = $arr[$j];
					$arr[$j] = $min; 
				}
			}
		}
		echo "<ul>";
		foreach ($arr as $key => $value) {
			echo "<li>".$key."->".$value."</li>";
		}
		echo "</ul>";
		echo "Най-малкият елемент в масива е числото $arr[0].";

	}
	$m = rand(3, 20);
	$numbers = array();
	for ($i=0; $i < $m; $i++) { 
		$numbers[$i] = rand(-100, 100);
	}
	echo "<ul>";
	foreach ($numbers as $key => $value) {
		echo "<li>".$key."->".$value."</li>";
	}
	echo "</ul>";
	echo "<br />";
	sort_array($numbers);
	?>	
</body>
</html>
