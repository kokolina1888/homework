<?php 
header('Content-Type: text/html; charset=utf-8'); 
mb_internal_encoding('UTF-8');
//variant 1;
$a = 200;
$b = 80;
$c = $a + $b;
/*if ($c == 0) {
	echo "Сборът на $a и $b е равен на 0";
}
elseif ($c > 0) {
	echo "Сборът на $a и $b е положтелно число.";
}
else {
	echo "Сборът на $a и $b е отрицателно число.";
}*/
//variant 2
if ($a > 0 && $b > 0) {
	echo "Сборът на $a и $b е положтелно число.";
}
elseif ($a > 0 && $b < 0) {
	if ((abs($b)) < $a) {
		echo "Сборът на $a и $b е положтелно число.";
	}
	else {
		echo "Сборът на $a и $b е отрицателно число.";
	}
}
elseif ($a < 0 && $b > 0) {
	if ((abs($a)) < $b) {
		echo "Сборът на $a и $b е положтелно число.";
	}
	else {
		echo "Сборът на $a и $b е отрицателно число.";
	}
}
elseif ($a < 0 && $b < 0) {
	echo "Сборът на $a и $b е отрицателно число.";
}
elseif ($a == 0 && $b == 0) {
	echo "Сборът на $a и $b е равен на 0";
}
?>