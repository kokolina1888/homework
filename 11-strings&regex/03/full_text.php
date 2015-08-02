<?php 
$connect = mysqli_connect('localhost', 'root', '', 'news'); 
if (!$connect) {
	die ("Connection failed: mysqli_connect_error()");
} else {
	//echo "Connected successfully<br />";
}
mysqli_set_charset($connect, 'utf8');
if (!empty($_GET)) {
	$id = $_GET['id'];
} else {
	$id = "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>news site</title>
</head>
<body>
	<?php 

	$q = "SELECT `text` FROM `news` WHERE `id` = $id";
	$res = mysqli_query($connect, $q);
	$row = mysqli_fetch_assoc($res);	
	
		echo " </p>";
		
		echo $row['text'].'<br /> ';
		
		echo " </p>";
		echo "<a href='03.php'>назад към началната страница</a><br/>";
	
	

	?>
</body>
</html>