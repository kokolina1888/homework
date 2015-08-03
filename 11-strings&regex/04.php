<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>regex</title>
</head>
<body>
	<p>
		Да се направи регулярен израз, който открива:
		-	Суми пари в лева: последователност от цифри, интервал и ‘лв’
		-	Дати във формат използван в MySQL: yyyy-mm-dd
		-	Всички думи с 6 букви
		б) Да се изпълнят задачите в PHP, чрез функциите за регулярни изрази 
	</p>
	<p>Въведете текст за проверка</p>
	<form method="get" action="04.php">
		<label for="sample">сума в лева</label>
		<input type="text" name="lv" id="lv">
		<label for="date">дата</label>
		<input type="text" name="date" id="date">
		<label for="sample">текст</label>
		<textarea name="sample" id="sample"></textarea>
		<input type="submit" name="submit" value="въведи">
	</form>	
</body>
</html>
<?php 
if (!empty($_GET)) {
	$lv = $_GET['lv'];
	$date = $_GET['date'];
	$text = $_GET['sample'];
	
	$pattern_lv = "/([0-9]+)([.,][0-9]{2})?( лв)/";
	$pattern_date = "/[1,2][0-9]{3}-[0,1][0-9]-[0-3][0-9]/";
	$pattern_words = "/\b[a-zA-z]{6}\b/";
	$replace = "(6letter word)";
	

	if (!empty($_GET['lv'])) {
		if (preg_match($pattern_lv, $lv)) {
			echo "Въвели сте верен формат за сума в лева";
		} else {
			echo "Въведете валиден формат 0,00 лв";
		}
	} elseif (!empty($_GET['date'])) {
		if (preg_match($pattern_date, $date)) {
			echo "Въвели сте верен формат дата";
		} else {
			echo "Въведете валиден формат YYYY-mm-dd";
		}
	} elseif (!empty($_GET['sample'])) {
		$new_text = preg_replace($pattern_words, $replace, $text);
		if ($new_text !== $text) {
		 	echo $new_text;
			echo "<p>".$text."</p>";
		} else {
			echo "There are no 6 letter words";
		}
	}
} 

?>