<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>problem 01</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php 
$arr = array('cows' => 200, 'horses' => 22, 'sheep' => 7008, 'monkeys' => 38, 'goats' => 944, 'elephants' => 111);
?>
<table id="problem01">
	<tr>
		<td>No</td>
		<td>name</td>
		<td>quantity</td>
	</tr>
	<?php 
	$i = 1;
	$max_value = $arr['cows'];
	$max_key = 'cows';
	$min_value = $arr['cows'];
	$min_key = 'cows';
	foreach ($arr as $key => $value) {
		echo "<tr>
				<td>$i</td>
				<td>$key</td>
				<td>$value</td>
			<tr />";
			$i++;
			if ($value > $max_value) {
				$max_value = $value;
				$max_key = $key;
			}
			elseif ($value < $min_value){
				$min_value = $value;
				$min_key = $key;

			}
	}
	unset($arr[$max_key]);
	?>
	</table>
<?php
	echo "The greatest value is $max_value of $max_key<br />";
	$second_greatest = $min_value;
	$second_key = $min_key;
	//after deleting the greatest value looking for the second greatest value among the remain...
	foreach ($arr as $key => $value) {
		if ($value > $second_greatest) {
			$second_greatest = $value;
			$second_key = $key;
		}
	}
	echo "The second greatest value is $second_greatest of $second_key";



	
	?>
</body>
</html>
