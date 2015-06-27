<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Край</title>
	</head>

<body>
<?php
session_start();
if (session_destroy()) {
	header("Location: index.php");
}
?>
	
</body>
</html>