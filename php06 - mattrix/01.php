<?php 
$arr = array();
$j = 0;
for ($i=16; $i >=8 ; $i--) { 
 $arr[$j] = $i;
 $j++;
}

foreach ($arr as $value) {
	echo $value.' ';
}
?>