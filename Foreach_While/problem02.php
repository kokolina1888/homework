<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Problem 02</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="problem02.php" method="get">
<p>Въведете стойности за </p>
	<span>
		<label> Х
			<input type="text" name="x">
		</label>
	</span>
	<span>
		<label> Y
			<input type="text" name="y">
		</label>
	</span>
	<p>
		<input type="submit" value="изпрати">
	</p>
</form>
	<?php 
	if (!empty($_GET)) {
		if (empty($_GET['x']) || empty($_GET['y'])) {
			echo "Въведете стойност за Х и/или Y!";
		}
		else {
			$x = $_GET['x'];
			$y = $_GET['y'];
		}
		$l = 1;	
		if ($x < $y) {
			for ($i = $x; $i <= $y; $i++) { 
				if ($i % 3 == 0 || $i % 7 == 0) {
						echo $i.', ';
						$l++;
						//за да са по-добре подредени пи големи числови интервали
						if ($l % 15 == 0) {
							echo "<br />";
						}
					}
					
				}
			}
		

	}

	?>
</body>
</html>