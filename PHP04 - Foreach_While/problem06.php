<?php 
$a = 'a';
$n = 40;
for ($i=0; $i < $n; $i++) { 
	$arr[] = $a;
	foreach ($arr as $value) {
		echo $value;
	}
	echo "<br />";
}

?>