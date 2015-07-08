<?php 
$m = 2;
$arr = array(array());
$j = 0;
$num = 0;
for ($i=0 ; $i < $m ; $i++ ) { 
	$num++;
	$arr[$j][$i] = $num;
	
}
$j++;
$num = $num + $m;
for ($i=$m-1; $i >=0 ; $i--) { 
	$arr[$j][$i] = $num;
	$num--;
}
var_dump($arr);
echo "<br />";
for ($l=0; $l < $m; $l++) { 
	foreach ($arr[$l] as $value) {
		echo $value.' ';
	}
	echo "<br />";
}
?>