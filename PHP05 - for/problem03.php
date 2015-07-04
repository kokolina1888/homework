<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Задача 3</title>
</head>
<body>
<form action="problem03.php" enctype="text/plain" method="get">
	<p>Въведете стойност за брой редове
	<label>
		<input type="text" name="row">
	</label>
	</p>
	<p>Въведете стойност за брой колони
	<label>
		<input type="text" name="col">
	</label>
	</p>
	<p>
		<input type="submit" name="submit" value="отпечатай!">
	</p>
</form>
<table border="1">	
<?php 
	if (isset($_GET['submit'])) {
		if (!empty($_GET['row']) && !empty($_GET['col'])) {
			$row = $_GET['row'];
			$col = $_GET['col'];
		}
		else {
			echo "Моля въведете стойности за брой редове и колони!";
		}
		for ($i=1; $i <= $row  ; $i++) { 
			echo "<tr>";
			for ($j=1; $j <= $col ; $j++) { 
				echo "<td>$i, $j</td>";
			}
			echo "<tr />";
		}
	}

	?>
	</table>

</body>
</html>