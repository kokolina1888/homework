<?php 
session_start();
//session_set_cookie_params(2592000);
if (!empty($_POST)) {
	if (!empty($_POST['username']) && !empty($_POST['password'])) {
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['password'] = $_POST['password'];
		echo "Успешна регистрация!<br />";
		echo "<a href='game.php'>Започенете играта сега!</a>";

	}
	else {
		if (empty($_POST['username'])) {
			$err_username = "Въведете потребителско име!";
		}
		if (empty($_POST['password']))
			$err_password = "Въведете парола!";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Регистрация</title>
</head>
<body>
	<div id="reg">
	<form id="reg" action="index.php" method="post">
	<h1>Можеш ли да смяташ?</h1>
			<p>
			<label for="user">
				Потребител:
			</label>
			<input type="text" name="username" 
			value="<?php if (!empty($_POST['username'])) {
				echo $_POST['username'];
			}?>">
			<?php if (isset($err_username)) {
				echo "<br />";
				echo '<span class="err">'.$err_username.'<span/>';
			}?>
		</p>
		<p>
			<label for="password">
				Парола:
			</label>
			<input type="password" name="password"
			value="<?php if (!empty($_POST['password'])) {
				$len = strlen($_POST['password']);
				for ($i=0; $i < $len; $i++) { 
					echo '*';
				}				
			}?>">
			<?php if (isset($err_password)) {
				echo "<br />";
				echo '<span class="err">'.$err_password.'<span/>';
			}?>
		</p>
		<p>
			<input type="submit" name="submit" value="регистрирай ме!">
		</p>
		
	</form>
	<?php 
	echo "<a href='logout.php'>Изчисти</a>";
	?>
	</div>
</body>
</html>