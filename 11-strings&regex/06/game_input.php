<!--Да се направи игра – бесеница. 
Трябва да има база данни, която съхранява много думи от 
даден речник – български или английски. 
След това се изважда произволна дума от речника и се 
показва само първата буква. Потребителя трябва да отгатва буква по  буква.-->
<?php 
$connect = mysqli_connect('localhost', 'root', '', 'word_quizz');
if (!$connect) {
	die("Connection failed: mysqli_connect_err()");
} else {
	echo "Connected successfully!";
}
mysqli_set_charset($connect, 'utf8');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>input</title>
</head>
<body>
<form method="post" action="game_input.php">
<p>въведете дума</p>
	<input type="text" name="word">
	<input type="submit" value="submit" name="submit">
</form>
<?php 
if (!empty($_POST)) {
	$word = $_POST['word'];
	$length = mb_strlen($word);
	$bg_length = $length/2;

	$q = "INSERT INTO `words`(`word`, `word_length`) VALUES ('$word', $bg_length)";
	if (mysqli_query($connect, $q)) {
		echo "Success";
	} else {
		echo "Try again!";
	}
}
$word_arr = array();
$word_arr = str_split('наденица', 2);
$count = count($word_arr);
echo $word_arr['0'];
for ($i=1; $i < $count ; $i++) { 
	$word_arr[$i] = "_";
	echo $word_arr[$i]." ";
}
?>
	
</body>
</html>