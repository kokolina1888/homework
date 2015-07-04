<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Задача 1</title>
</head>
<body>
	<form action="problem01.php" method="get">
		<label>
			<p>Въведете стойност за Х</p>
			<input type="text" name="x">
		</label>
		<label>
			<p>Въведете стойност за Y</p>
			<input type="text" name="y">
		</label>
		<p>
			<input type="submit" name="submit" value="Въведи">
		</p>
	</form>
	<?php 
	if (isset($_GET['submit'])) {
		if (!empty($_GET['x']) && !empty($_GET['y'])) {
			$x = $_GET['x'];
			$y = $_GET['y'];
			if ($x < $y) {
				$l = 1;
				for ($i = $x; $i <= $y ; $i++) { 
					if ($i % 3 == 0 || $i % 7 == 0) {
						echo $i.' ';
						$l++;
					}	
					if ($l++ % 15 == 0) {
						echo "<br />";
					}		
				}
			}
			elseif ($x > $y) {
				$l = 1;
				for ($j = $x; $j > $y ; $j--) { 
					if ($j % 3 == 0 || $j % 7 == 0) {
						echo $j.' ';
						$l++;
					}	
					if ($l++ % 15 == 0) {
						echo "<br />";
					}		
				}
			}
			else {
				if (empty($_GET['x'])) {
					echo "Моля, въведете стойност за х!"."<br />";
				}
				elseif (empty($_GET['y'])) {
					echo "Моля, въведете стойност за y!"."<br />";
				}
			}
		}
	}
		?>
	</body>
	</html>