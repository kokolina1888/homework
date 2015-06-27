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
	if (!empty($_POST['username']) && !empty($_POST['password'])) {
			$_SESSION['username'] = $_POST['username'];
			echo "<p><a href='products.php'>Успешно се ргистрирахте, "
			. $_SESSION['username'].
			"! Изберете Вашите продукти!!</a></p>";
		}
		else {
			echo "Моля, попълнете потребителско име и парола!";
		}

	//Защо не работи така - мога да вляза и без въведени user password? а само като му конкретизирам username password not empty
	/*if (empty($_POST)) {
		var_dump($_POST);
		echo "Моля, попълнете потребителско име и парола!";
	}
	else	{
		var_dump($_POST);
		$_SESSION['username'] = $_POST['username'];
		echo "<p>
		<a href='products.php'>Успешно се ргистрирахте, ". $_SESSION['username']."! Изберете Вашите продукти!!</a></p>";
	}*/
	?>
</body>
</html>