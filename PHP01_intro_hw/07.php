<?php 
$a = 4;
$b = 11;
echo '$a = '.$a.'<br/>';
echo '$b = '.$b.'<br/>';
echo ''.'<br/>';
$c = $a;
$a = $b;
$b = $c;
echo '$a = '.$a.'<br/>';
echo '$b = '.$b;

?>