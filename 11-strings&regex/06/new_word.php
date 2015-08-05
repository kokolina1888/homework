<?php 
session_start();
$connect = mysqli_connect('localhost', 'root', '', 'word_quizz');
if (!$connect) {
	die ('Connection failed: mysqli_connect_error()');
} else {
	echo "Connected";
}
mysqli_set_charset($connect, 'utf8');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
$i = rand(1, 15);
$score = $_SESSION['score'];
	header("Location: 'game.php?id=$i&score = $score & try = 1'");
?>
</body>
</html>