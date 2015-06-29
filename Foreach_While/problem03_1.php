<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Задача 3/1</title>
	<link rel="stylesheet" href="style03_1.css">
</head>
<body>
	<form action="problem03_1.php" method="post">
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
					if ($key % 2 !== 0) {
						echo "<span>$value </span>";
					}
					else {
						echo "$value ";
					}
				}

			}
			else {
				echo "Моля въведете произволен текст!";
			}
		}
		?>
	</div>
</body>
</html>