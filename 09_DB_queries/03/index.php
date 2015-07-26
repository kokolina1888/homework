<?php
//create connection
$conn = mysqli_connect('localhost', 'root', '', 'vratsad_authentication1');
//check connection
if (!$conn) {
	die ("Connection failed: mysqli_connect_error()");
} else {
	//echo "Connected succsessfuly";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title><!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<!--JQuery CDN-->
	<script src="jquery-1.11.3.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12 jumbotron">
				<div class="first text-center col-xs-6 col-xs-offset-3">
				<p><a href="login.php">log in</a> or fill in the registration form!</p>
					<div class="row">
					<div class="col-xs-8 col-xs-offset-2">
							<form method="post" action="index.php" class="form-horizontal">				
								<div class="form-group ">
									<label for="username">Username</label>
									<input type="text" class="form-control" name="username" id="username">
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" class="form-control" name="password" id="password">
								</div>
								<div class="form-group">
									<label for="password_repeat">Repeat Password</label>
									<input type="password" class="form-control" name="password_repeat" id="password_repeat">
								</div>
								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" class="form-control" name="email" id="email">
								</div>
								<div class="form-group">
									<label for="first_name">First Name</label>
									<input type="text" class="form-control" name="first_name" id="first_name">
								</div>
								<div class="form-group">
									<label for="last_name">Last name</label>
									<input type="text" class="form-control" name="last_name" id="last_name">
								</div>
								<div class="form-group">

									<label for="age">Age</label>
									<input type="text" class="form-control" name="age" id="age">
								</div>
								<div class="form-group">
									<button type="submit" value="submit" name="submit" class="btn btn-success">Register</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>


<?php 
if (!empty($_POST)) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password_repeat = $_POST['password_repeat'];
	$email = $_POST['email'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$age = $_POST['age'];
	//validation
	//username
	$username_q = "SELECT username
	FROM users";
	$username_result = mysqli_query($conn, $username_q);
	$flag = 0;
	if (mysqli_num_rows($username_result) > 0) {
		while ($username_row = mysqli_fetch_assoc($username_result)) {
			foreach ($username_row as $value) {
				if ($username_row['username'] == $username) {
					$flag = 1;

				}								
			}
		}
	}
	if ($flag == 1) {
		echo "Username is not available! Please choose another one!";
	} 

	if ($password !== $password_repeat) {
		echo "Password doesn`t match! Please enter again!";
	} else {
		$reg_q = "INSERT INTO `users`(`username`, `password`, `email`, `first_name`, `last_name`, `age`)
		VALUES ('$username','$password','$email','$first_name','$last_name', $age)";
		if (mysqli_query($conn, $reg_q)) {
			echo "Successful registration! <br />";
		}
	}
}


?>