<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>е-Мания</title>
</head>
<body>
<p>Вход</p>
<form method="post" action="index.php">
	<p>Потребителско име:</p>
	<input type="text" name="username">
	<p>Парола:</p>
	<input type="password" name="password">
	<p>
		<input type="submit" value="ВХОД">
	</p>
</form>
	<?php 
if (!empty($_POST)) {
	$_SESSION['username'] = $_POST['username'];
	echo "<p><a href='products.php'>Изберете продукти!</a></p>";
}
?>
</body>
</html>