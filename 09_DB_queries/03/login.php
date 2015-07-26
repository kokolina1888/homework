<?php 
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'vratsad_authentication1');
if (!$conn) {
	die("Connection failed: mysqli_connect_error()"); 
} else {
	//echo "Connected successfully!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log in</title>
</head>
<body>
<form action="login.php" method="post">
	<label for="usrname">Username</label>
	<input type="text" name="username" id="usrname">
	<label for="psw">Password</label>
	<input type="password" name="password">
	<input type="submit" name="submit" value="login">
</form>
<?php 
if (!empty($_POST)) {
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['password'] = $_POST['password'];
	$username = $_SESSION['username'];
	$password_query ="SELECT password FROM users WHERE username = '$username'";
	$password_result = mysqli_query($conn, $password_query);
	$password_row = mysqli_fetch_assoc($password_result);
	if ($password_row['password'] !== $_SESSION['password']) {
		echo "Wrong username or password!";
	} else {
		header('Location: welcome.php');
	}
}

?>
<a href="logout.php">Log out</a>
</body>
</html>