<?php 
	session_start();
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style05.css">
	<title>Задача 5</title>
</head>
<body>
<form action="index.php" method="post">
<p>Въведете текст за кодиране</p>
		<textarea name="text"></textarea>
		<p>
			<input type="submit" value="submit">
		</p>
	</form>
		<?php 
	if (!empty($_POST['text'])) {
		$_SESSION['text'] = $_POST['text'];
		$_SESSION['coded_a'] = str_replace('a', '@', $_SESSION['text']);
		$_SESSION['coded_a_e'] = str_replace('e', '3', $_SESSION['coded_a']);
		echo "<div>".$_SESSION['text']."</div>";
		echo "<br />";
		echo "<div>".$_SESSION['coded_a_e']."</div>";
		echo "<br />";
		echo "<a href='problem05_decode.php'>Декодирайте текста!</a>";
		}
	?>

</body>
</html>