<?php 
session_start();
$connect = mysqli_connect('localhost', 'root', '', 'word_quizz');
if (!$connect) {
	die('Connection failed: mysqli_connect_error()');
} else {
	//echo "Connected";
}
mysqli_set_charset($connect, 'utf8');
//
//echo $_SESSION['word'].' '.$_SESSION['count'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	//TO DO - file navigation
	//TO DO scoring
	//TO DO number of tries
	//TO DO -conditions
	$flag = 0;	
	$check = 0;	
	/*for ($j=0; $j < $_SESSION['count']; $j++) { 
		echo $_SESSION['dashes'][$j].' ';*/
	//}*/
	?>
	<form method="get" action="game.php">
		<p>Въведете буква</p>
		<input type="text" name="letter">
		<p>или цялата дума</p>
		<input type="text" name="word">
		<input type="submit" name="submit" value="въведи">
	</form>
	<?php 
	if (isset($_GET['submit'])) {
		$letter = $_GET['letter'];
			//echo $letter;
				for ($l=1; $l < $_SESSION['count'] ; $l++) { 				
					if ($letter == $_SESSION['origin'][$l]) {
						$_SESSION['dashes'][$l] = $letter;					
						$flag = 1;
					}
				}					
			
		// check if the whole word is guessed
			for ($m=1; $m < $_SESSION['count']; $m++) { 
				if ($_SESSION['dashes'][$m] == $_SESSION['origin'][$m]) {
					$check = 1;
				} else {
					$check = 0;
				}
			}
			
		
$word = $_GET['word'];
	//echo $_SESSION['word'];
	$word = $_GET['word'];
	if ( $_SESSION['word'] == $word || $check == 1) {
		echo "БРАВО! Познахте думата! $word";
	} elseif ($check !== 1){
			foreach ($_SESSION['dashes'] as $value) {
				echo $value.' ';
		/*echo "<pre>";
		var_dump($_SESSION['dashes']);
		echo "</pre>";*/
	} 
		if ($flag == 1) {
					echo "Познахте буква!";
				} else {
					echo "Съжалявам, няма такава буква в думата!";
				}

	} else {
		echo "Съжалявам, не познахте думата!";
	}
}


?>
</body>
</html>

