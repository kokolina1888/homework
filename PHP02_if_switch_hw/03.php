<?php 
header('Content-Type: text/html; charset=utf-8'); 
mb_internal_encoding('UTF-8');
$a = 3;
$b = 4;
/*$a = 4;
$b = 4;*/
/*$a = 3;
$b = 3;*/
/*$a = 0;
$b = 4;*/
//variant 1
/*if ($a == 0 || $b == 0) {
	echo "Произведението на $a и $b е 0.";
}
elseif ($a % 2 !== 0 && $b % 2 !== 0) {
	echo "Произведението на $a и $b е нечетно число.";
}
else {
	echo "Произведението на $a и $b е четно число.";
}*/
//variant 2
$c = $a * $b;
if ($c == 0) {
	echo "Произведението на $a и $b е 0.";
}
elseif ($c % 2 == 0) {
	echo "Произведението на $a и $b е четно число.";
}
else {
	echo "Произведението на $a и $b е нечетно число.";
}

?>