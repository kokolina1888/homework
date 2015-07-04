<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Задача 5</title>
</head>
<body>
	<form action="problem05.php" method="get">
		<p>Кое е N-тото число на Фибоначи? </p>
		<label>
			<p>Въведете число по-голямо от 1</p>
			<input type="text" name="n">
		</label>
		<p>
			<input type="submit" name="submit" value="Въведи">
		</p>
	</form>
</body>
<?php 
if (isset($_GET['submit'])) {
	if (!empty($_GET['n'])) {
		$n = $_GET['n'];
		echo "N = $n"."<br />";
		$arr = array(1, 1);
		for ($i = 2; $i < $n ; $i++) { 
			$fibonacci = $arr[$i-2] + $arr[$i-1];
			$arr[$i] = $fibonacci;
		}
		foreach ($arr as $key => $value) {
			$key_n = $key + 1;
			echo $key_n.' - '.$value.'<br />';
		}
		echo $n."тото число на фибоначи е ".$arr[$n-1];
	}
	else {
		echo "Въведете стойност за N";
	}
}
?>
