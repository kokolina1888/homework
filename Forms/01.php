<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Events</title>
</head>
<body>
<form action="01.php" method="get">
<p>Изберете категория събитие -</p>
<input type="radio" name="type" value="music">Музика
<input type="radio" name="type" value="sport">Спорт
<input type="radio" name="type" value="cinema">Кино
<P>Къде - </P>
<select name="place">
	<option value="Vratsa">Враца</option>
	<option value="Sofia">София</option>
	<option value="Kavarna">Каварна</option>
</select>
<input type="submit" value="Избери">	
</form>
<?php 
mb_internal_encoding('UTF-8');
if (!empty($_GET)) {
	$type = $_GET['type'];
	$place = $_GET['place'];
	if ($type == 'music' && $place == 'Kavarna') {
		echo "<br />";
		echo "Kavarna Rock Fest от 28 юни до 2 юли 2015 година";
	}
	elseif ($type == 'sport' && $place == 'Vratsa'){
		echo "<br />";
		echo "Национален шампионат по волейбол за младежи и девойки 18-28 юни 2015 година";
	}
	elseif ($type == 'cinema' && $place == 'Sofia') {
		echo "<br />";
		echo "София Филм Фест - 22 - 30 юни 2015 година.";
	}
	else {
		echo "<br />";
		echo "Няма събитие по посочените критерии!";
	}
} 


?>
	
</body>
</html>