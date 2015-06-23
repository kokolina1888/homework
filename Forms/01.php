<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="Age.php" method="get">
		<p>What is your age</p>
		<input type="text" name="age">
		<input type="submit" value="submit">
	</form>
	<?php 
	if (!empty($_GET)) {
		$age = $_GET['age'];
		if ($age >= 7 && $age <= 19 ) {
			echo "Look for school!";
		}
		elseif ($age > 19 && $age <= 23  ) {
			echo "Look for university!";
		}
		elseif ($age > 23 && $age <= 65 ) {
			echo "Look for job!";
		}
	}
	?>
	
</body>
</html>