<?php 
/*
abc
$a = 1;
$b = 2;
$c = 3;
acb*/
/*$a = 1;
$b = 4;
$c = 3;
bac*/
/*$a = 4;
$b = 1;
$c = 6;*/
//bca
/*$a = 4;
$b = 2;
$c = 3;*/
//cab
/*$a = 4;
$b = 5;
$c = 3;*/
//cba
$a = 7;
$b = 4;
$c = 3;


if ($a < $b && $b < $c) {
	echo $a.' '.$b.' '.$c;
}
elseif ($a < $b && $b > $c) {
	if ($a < $c) {
		echo $a.' '.$c.' '.$b;
	}
	else echo $c.' '.$a.' '.$b;
}
elseif ($c < $b && $b < $a) {
	echo $c.' '.$b.' '.$a;
}
elseif ($c > $b &&  $b < $a) {
	if ($a < $c) {
		echo $b.' '.$a.' '.$c;
	}
	elseif ($a > $c) {
	 	echo $b.' '.$c.' '.$a;
	 } 
}
?>


