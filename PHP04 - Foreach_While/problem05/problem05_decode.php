<?php 
session_start();
header('Content-Type: text/html; charset=utf-8'); 
$_SESSION['coded_a'] = str_replace('3', 'e', $_SESSION['coded_a_e']);
$_SESSION['text'] = str_replace('@', 'a', $_SESSION['coded_a']);
echo $_SESSION['text'].'<br />';
echo '<br />';
echo "<a href='end.php'>Въведете нов текст за кодиране!</a>";
	?>
	
