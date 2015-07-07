<?php 
header('Content-Type: text/html; charset=utf-8'); 
$arr = array();
$sum = 0;
for ($i=0; $i < 10 ; $i++) { 
	$arr[$i] = rand(1, 3);
	$sum += $arr[$i];
}
foreach ($arr as $value) {
	echo $value.' ';
}
echo '<br />'.'Сумата на числата в масива е '.$sum.'<br />';
$even = 0;
$odd = 0;
foreach ($arr as $value) {
	if ($value % 2 == 0) {
		$even += $value;
	} else {
		$odd += $value;
	}
}
echo 'Сумата на нечетните числа е '.$odd.'<br />';
echo 'Сумата на четните числа е '.$even.'<br />';
if ($even > $odd) {
	echo 'Сумата на четните числа -'.$even.' е по-голяма.<br />';
	}
	else {
		'Сумата на нечетните числа -'.$odd.' е по-голяма.<br />';
	}
?>