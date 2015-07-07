
<?php 
header('Content-Type: text/html; charset=utf-8'); 
echo "a)<br />";
$m = 3;
$n = 4;
$num = 5;
$arr = array(array());
for ($i=0; $i < $m ; $i++) { 
	for ($j=0; $j < $n; $j++) { 
		$arr[$i][$j] = $num;
		$num++;
	}
}

for ($i=0; $i < $m ; $i++) { 
	foreach ($arr[$i] as $value) {
		echo $value." ";
	}
	echo "<br />";

}
echo "б)<br />";
$m = 4;
$num = 0;
$arr = array(array());
for ($i=0; $i < $m; $i++) { 
	for ($j=0; $j < $m ; $j++) { 
		$num++;
		$arr[$i][$j] = $num;
		}
	$num = $num*(-2)-1;
}
for ($i=0; $i < $m; $i++) { 
	foreach ($arr[$i] as $value) {
		echo $value.' ';
	}
	echo "<br />";

echo "в)<br />";
$m = 4;
$num = 1;
$arr = array(array());
for ($i=0; $i < $m; $i++) {
$help = $i+1; 
	for ($j=0; $j < $help; $j++) { 
		$arr[$i][$j] = $num;
		$num++;
	}
	$num = 1;
}
for ($i=0 ; $i < $m  ; $i++ ) { 
	$help = $i + 1; 
	for ($j = $help; $j < $m ; $j++) { 
		$arr[$i][$j] = 0;
	}
}

}
for ($i=0; $i < $m; $i++) { 
	foreach ($arr[$i] as $value) {
		echo $value.' ';
	}
	echo "<br />";
}
?>
