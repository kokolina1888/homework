<?php 
session_start();
//session_set_cookie_params(2592000);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Регистрация</title>
</head>
<body>
	<p>Регистрация</p>
	<form id="reg" action="index.php" method="post">
		<p>
			<label for="user">
				Потребител:
			</label>
			<input type="text" name="username">
		</p>
		<p>
			<label for="password">
				Парола:
			</label>
			<input type="password" name="password">
		</p>
		<p>
			<input type="submit" value="регистрирай ме!">
		</p>
		
	</form>

	<?php 
	if (!empty($_POST)) {
		foreach ($_POST as $value) {
			if (empty($value)) {
				$error = true;
			}
			else {
				$error = false;
			}
		}
		if ($error == false) {
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['password'] = $_POST['password'];
			echo "Успешна регистрация!<br />";
			echo "<a href='game.php'>Започенете играта сега!</a>";

		}
		else {
			echo "Въведете потребителско име и/или парола!";
		}
	}


	?>
</body>
</html>