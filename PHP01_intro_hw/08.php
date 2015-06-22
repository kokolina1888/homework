
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Последна цифра на ЕГН</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method="post" action="08.php">
		<p>Въведете първите 9 цифри от Вашето ЕГН</p>
		<p>
			<input type="number" name="1">
			<input type="number" name="2">
			<input type="number" name="3">
			<input type="number" name="4">
			<input type="number" name="5">
			<input type="number" name="6">
			<input type="number" name="7">
			<input type="number" name="8">
			<input type="number" name="9">
		</p>
		<p><input type="submit" value="Изчисли"></p>
	</form>
	<?php 
	mb_internal_encoding('UTF-8');
	if (!empty($_POST)) {
		$a = $_POST[1];
		$b = $_POST[2];
		$c = $_POST[3];
		$d = $_POST[4];
		$e = $_POST[5];
		$f = $_POST[6];
		$j = $_POST[7];
		$k = $_POST[8]; 
		$l = $_POST[9];
	
	$egn = $a*2+$b*4+$c*8+$d*5+$e*10+$f*9+$j*7+$k*3+$l*6;
	//echo "$egn".'<br/>';
	
	$egn_final_number = (float)$egn % 11;
	if ($egn_final_number == 10) {
		$egn_final_number = 0;
		} 
	echo "Последната цифра на Вашето ЕГН е ".$egn_final_number.'<br/>';
	echo "Вашият пълен ЕГН е ".$a.$b.$c.$d.$e.$f.$j.$k.$l.$egn_final_number;
}

	?>


</body>
</html>