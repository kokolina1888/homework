<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Circle</title>
</head>
<body>
	<form action="05.php" method="post">
	<h2>Въведете координатите на точката</h2>
		<span>X</span>
		<input type="text" name="coordinateX">
		<span>Y</span>
		<input type="text" name="coordinateY">
		<input type="submit" value="submit">
	</form>
</body>
</html><?php 
header('Content-Type: text/html; charset=utf-8'); 
mb_internal_encoding('UTF-8');
if (!empty($_POST)) {
	$centerX = 0;
	$centerY = 0;
	$radius = 2;
	$coordinateX = $_POST['coordinateX'];
	$coordinateY = $_POST['coordinateY'];
	$sqrt = sqrt(($centerX-$coordinateX)*($centerX-$coordinateX)+($centerY-$coordinateY)*($centerY-$coordinateY));
	echo '<br/>';
	//echo $sqrt;
	if ($sqrt < $radius) {
		echo "Точката с координати ($coordinateX, $coordinateY) се намира в окръжността с координати ($centerX, $centerY) и радиус - $radius.";
		}
	elseif ($sqrt == $radius) {
		echo "Точката с координати ($coordinateX, $coordinateY) лежи на окръжността с координати ($centerX, $centerY) и радиус - $radius.";
		}
	else {
		echo "Точката с координати ($coordinateX, $coordinateY) е извън окръжността с координати ($centerX, $centerY) и радиус - $radius.";
		}
	

}

?>