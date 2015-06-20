<?php 
header('Content-Type: text/html; charset=utf-8'); 
mb_internal_encoding('UTF-8');
/*$a = 7;
$b = 20;*/
$a = 5;
$b = 12;

$s = $a*$b;
$p = 2*$a+2*$b;
echo "Ако е a равна на $a см и b е равна на $b см лицето на правоъгълника е $s см, а обиколката  му е $p см.";
?>