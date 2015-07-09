<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>table</title>
	<style type="text/css">
	table {
		border: 1px solid black;
		border-collapse: collapse;
	}
	td {
		border: 1px solid black;
	}
	</style>
</head>
<body>
<?php 
$m = 4;
$num = $m;
$row = 0;
$col = -1;
$flag = 1;
$var = 0;
$arr = array(array());
while ($num > 0) {
	/*1
	$num = 4;
	$row = 0;
	$col = -1;
	$flag = 1;
	$var = 0;
	*/
	/*
	$num = 2;
	$row = 1;
	$col = 0;
	$flag = 1;
	$var = 12;
	*/

	while ($flag <= $num) {
		$var++;
		$col++;
		$arr[$row][$col] = $var;		
		$flag++;

	}
	$num--;
	$flag = 1;
	/*3
	$num = 3;
	$row = 0;
	$col = 3;
	$flag = 1;
	$var = 4;
	*/
	/*
	$num = 1;
	$row = 1;
	$col = 2;
	$flag = 1;
	$var = 14;
	*/

while ($flag <= $num) {
		$var++;
		$row++;
		$arr[$row][$col] = $var;
		$flag++;
		
	}
	echo "<br />";
	$flag = 1;
	//3
	/*
	$num = 3;
	$row = 3;
	$col = 3;
	$flag = 1;
	$var = 7;
	*/
	/*
	$num = 1;
	$row = 2;
	$col = 2;
	$flag = 1;
	$var = 15;
	*/

	while ($flag <= $num) {
		$var++;
		$col--;
		$arr[$row][$col] = $var;
		$flag++;
		}
		$num--;
		$flag = 1;
	//4
		/*
	$num = 2;
	$row = 2;
	$col = 1;
	$flag = 1;
	$var = 16;
	*/
	/*
	$num = 0;
	$row = 1;
	$col = 0;
	$flag = 1;
	$var = 12;
	*/

	while ($flag <= $num) {
			$var++;
			$row--;
			$arr[$row][$col] = $var;
			$flag++;
		}	
		$flag = 1;
		/*
	$num = 2;
	$row = 1;
	$col = 0;
	$flag = 1;
	$var = 12;
	*/

}
?>
<table>
<?php
for ($i=0; $i < $m ; $i++) { 
	echo "<tr>";
	for ($j=0; $j < $m; $j++) { 
		echo '<td>';
		//echo "[$i,$j] - ";
		echo $arr[$i][$j];
		echo '<td />';	
	}
	echo "<tr />";
}
?>
<table/>
</body>
</html>
