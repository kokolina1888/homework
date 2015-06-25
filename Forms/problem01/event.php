<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Събитие</title>
</head>
<body>
	<?php 
mb_internal_encoding('UTF-8');
if (!empty($_GET)) {
	$type = $_GET['type'];
	$place = $_GET['place'];
	if ($place == 'Kavarna') {
		if ($type == 'music') {
			echo "<br />";
		echo "Kavarna Rock Fest от 28 юни до 2 юли 2015 година";
		}
		elseif ($type == 'sport') {
			echo "<br />";
		echo "Шампионат по ветроходство, Каварна 22-25 юни 2015 година";
		}
		else {
		echo "<br />";
		echo "Няма събитие по посочените критерии!";
	}
	}
	if ($place == 'Vratsa') {
		if ($type == 'music') {
			echo "Рокерски събор Леденика, 25-28 юни 2015 година";
		}
		elseif ($type == 'sport') {
		echo "Национален шампионат по волейбол за младежи и девойки, 1-5 юни 2015 година.";
		}
		else {
		echo "<br />";
		echo "Няма събитие по посочените критерии!";
	}
	}
	if ($place == 'Sofia') {
		if($type == 'cinema') {
			echo "<br />";
		echo "София Филм Фест - 22 - 30 юни 2015 година.";

		}
		elseif ($type == 'sport') {
			echo "<br />";
		echo "Световен ншампионат по волейбол. Зала Арена Армеец, 22-28 юни 2015 година";
		}
		elseif ($type == 'music') {
			echo "<br />";
			echo "Roxette, Зала Арена Армеец, 18 юни 2015 година ";
		}
	}
}
?>
<p><a href="01_1.php">Назад към избор на събитие!</a></p>
</body>
</html>

