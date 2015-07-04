<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Задача 4</title>
</head>
<body>
<table border="1">
	<?php 
	for ($i=1; $i <=10 ; $i++) { 
		echo "<tr>";
		for ($j=1; $j <= $i ; $j++) { 
			$mult = $i*$j;
			echo "<td>$i*$j = $mult</td>";
		}
		if ($i < 10) {
			$colspan = 10 - $i;
		echo "<td colspan='$colspan'></td>";
		}
		echo "</tr>";		
	}
	?>
	</table>
</body>
</html>