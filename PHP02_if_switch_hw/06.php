
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>digits</title>
</head>
<body>
	<form action="06.php" method="get">
	<p>Enter digit from 1 to 9!</p>
		<input type="text" name="digit">
		<input type="submit" value="submit">
	</form>
	<?php 
	if (!empty($_GET)) {
		$digit = $_GET['digit'];
		switch ($digit) {
			case '1':
			echo "one";
			break;
			case '2':
			echo "two";
			break;
			case '3':
			echo "three";
			break;
			case '4':
			echo "four";
			break;
			case '5':
			echo "five";
			break;
			case '6':
			echo "six";
			break;
			case '7':
			echo "seven";
			break;
			case '8':
			echo "eight";
			break;
			case '9':
			echo "nine";
			break;
			default:
			echo '<br />';
			echo "Enter digit from 1 to 9!";
			break;
		}
	}
		?>
	</body>
	</html>
