<?php
$m = 4;
$n = 5;
$arr = array(array());

for ($i=0; $i < $m; $i++) { 
	for ($j=0; $j < $n; $j++) { 
		$arr[$i][$j] = rand(1, 10);
	}
}
for ($i=0; $i < $m ; $i++) { 
	for ($j=0; $j < $n; $j++) { 
		echo $arr[$i][$j].' ';
	}
	echo "<br />";
}
$min = array();
for ($j=0; $j < $n ; $j++) { 
	$arr_min[$j] = $arr[0][$j];
	for ($i=0; $i < $m; $i++) { 
		if ($arr[$i][$j] <= $arr_min[$j]) {
			$arr_min[$j] = $arr[$i][$j];
		}
	}
	
	//минималната ст-ст в съответната колона
	$col = $j + 1;
echo 'Column'.$col.' - '.$arr_min[$j].'<br />';
}
$sum = 0;
foreach ($arr_min as $value) {
	$sum += $value;
}
//сумата на вс минимални числа от колоните
echo 'The sum of the smallest numbers in every column is '.$sum;

?>