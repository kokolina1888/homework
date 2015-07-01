<?php 
session_start();
if (!empty($_POST)) {
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['password'] = $_POST['password'];
	if ($_SESSION['username'] === '') {
		$err_username = "<div>Моля попълнете потребител!</div>";
	}
	if ($_SESSION['password'] === '') {
		$err_password = "<div>Моля попълнете парола!</div>";
	}

}
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
		<input type="text" name="username" value="<?php if (!empty($_SESSION['username'])) {
			echo $_SESSION['username'];}?>"/>
			<?php if (isset($err_username)) {
				echo $err_username;
			}
			?>
			<p>Парола:</p>
			<input type="password" name="password" value="<?php if (!empty($_SESSION['password'])) {
			echo "***";}?>"/>
				<?php if (isset($err_password)) {
					echo $err_password;
				}
				?>
				<p>
					<input type="submit" name="submit" value="ВХОД">
				</p>
			</form>
			<?php 
			if (!empty($_SESSION['username']) && !empty($_SESSION['password'])) {			
				echo "<p><a href='products.php'>Успешно се регистрирахте, "
				. $_SESSION['username'].
				"! Изберете Вашите продукти!!</a></p>";
			}
			echo "<br />";
			echo "<a href='logout.php'>Излизане</a>";

				?>
				<?php
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