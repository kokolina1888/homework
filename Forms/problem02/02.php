<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Forum registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="02.php" method="post">
		<p>РЕГИСТРАЦИЯ</p>
		<p>Въведете потребителско име
			<input type="text" name="username" required>
		</p>

		<p>Въведете парола
			<input type="password" name="password" required>
		</p>

		<p>
			Въведете email
			<input type="email" name="email" required>
		</p>		
		<p>Посочете вашите интереси</p>
		<p><input type="checkbox" name="interest[]" value="музика" required>Музика</p>
		<p><input type="checkbox" name="interest[]" value="спорт">Спорт</p>
		<p><input type="checkbox" name="interest[]" value="кино">Кино</p>
		<p><input type="checkbox" name="interest[]" value="книги">Книги</p>
		<p><input type="checkbox" name="interest[]" value="компютри">Компютри</p>
		<input type="submit" value="Регистрирай ме!">
	</form>
	<?php 
	if (empty($_POST)) {
		echo "Моля попълнете формата";
	}
	else {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$interest = implode(', ', $_POST['interest']);
		$regex = '/[\w-\.+\"\"\s]+@([\w-]+\.)+[\w-]+/';
		if (!preg_match($regex, $email)) {
			echo "<br />";
			echo "<h1>Моля въведете валиден e-mail!!!</h1>";
		}
		else {
			echo "<br />";
			echo "Валиден email!";
			echo "<br />";
			echo "<br />";
			echo "Успешно регистриран потребител $username с интереси $interest!";
			
		}
		}
	?>
</body>
</html>
