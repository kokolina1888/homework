<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>задача 5</title>
</head>
<body>
	<p>Да се напише метод,
		който сумира 2 масива в трети масив ($c[$i] = $a[$i] + $b[$i]). 
		Двата масива може да са с различен размер.</p>
		<?php 
		function array_sumator($arr1, $arr2) {
			$count1 = count($arr1);
			$count2 = count($arr2);
			$sum = array();
			if ($count1 < $count2) {
				for ($i=0; $i < $count1; $i++) { 
					$sum[$i] = $arr1[$i]+$arr2[$i];
				}
				for ($j=$count1; $j < $count2 ; $j++) { 
					$sum[$j] = $arr2[$j];
				}
			} else {
				for ($k=0; $k < $count2; $k++) { 
					$sum[$k] = $arr1[$k]+$arr2[$k];
				}
				for ($l=$count2; $l < $count1 ; $l++) { 
					$sum[$l] = $arr1[$l];
				}
			}
			echo "<p>The result array is -</p>";
			echo "<ol>";
			foreach ($sum as $key => $value) {
				echo "<li>".$key." -> ".$value."</li>";
			}
			echo "</ol>";
		}
		$m = rand(4, 8);
		$n = rand(4, 8);
		$array_m = array();
		$array_n = array();
		if ($m !== $n) {
			for ($p=0; $p < $m; $p++) { 
				$array_m[$p] = rand(1, 100);
			}
			for ($q=0; $q < $n ; $q++) { 
				$array_n[$q] = rand(1, 100);
			}
			echo "<ol>";
			foreach ($array_m as $key => $value) {
				echo "<li>".$key." -> ".$value."</li>";
			}
			echo "</ol>";
			echo "<ol>";
			foreach ($array_n as $key => $value) {
				echo "<li>".$key." -> ".$value."</li>";
			}
			echo "</ol>";
			array_sumator($array_m, $array_n);
		} else {
			echo "Sorry! Try again - press Ctrl+R!";
		}
		?>	

	</body>
	</html>