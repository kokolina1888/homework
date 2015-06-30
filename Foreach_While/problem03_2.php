<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Задача 3/2</title>
	<link rel="stylesheet" type="text/css" href="style03_02.css">
</head>
<body>
	<form action="problem03_2.php" method="post">
		<textarea name="text"></textarea>
		<p>
			<input type="submit" value="submit">
		</p>
	</form>
	<div>
		<?php 
		if (!empty($_POST)) {
			if (!empty($_POST['text'])) {
				$text = $_POST['text'];
				$text = explode(' ', $text);
				foreach ($text as $key => $value) {
					if ($key % 3 == 0) {
						echo "<span class='first'>$value </span>";
					}
					elseif (($key-1) % 3 == 0) {
						echo "<span class='second'>$value </span>";
					}
					else {
						echo "$value ";
					}
				}
			} 

		}
		else {
			echo "Моля въведете произволен текст!";
		}
	
	?>
</div>
</body>
</html>