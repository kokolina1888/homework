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
	echo "<a href='game.php?score=0&try=1'>start game</a>";
	$q = "SELECT `id`, `word`, `word_length` FROM `words` WHERE `id` = $i";

	$res = mysqli_query($connect, $q);
	$row = mysqli_fetch_assoc($res);
	$_SESSION['word'] = $row['word'];
	echo $_SESSION['word'];

	$_SESSION['dashes'] = array();
	$_SESSION['origin'] = array();
	$_SESSION['origin'] = str_split($_SESSION['word'], 2);
	/*echo "<pre>";
	var_dump($_SESSION['origin']);
	echo "</pre>";*/
	$_SESSION['count'] = count($_SESSION['origin']);
	$_SESSION['dashes'][0] = $_SESSION['origin'][0];
	for ($i=1; $i < $_SESSION['count']; $i++) { 
		$_SESSION['dashes'][$i] = '_';
	}
	/*echo "<pre>";
	/*var_dump($_SESSION['dashes']);
	echo "</pre>";*/
	
?>
</body>
</html>

