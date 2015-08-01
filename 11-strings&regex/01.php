<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Задача 1</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="jquery-1.11.3.min.js"></script>
</head>
<body>
<?php 
$ascii = array(array());
$k = 48;
$i = 0;
while ($i < 10) {
	$var = chr($k);
	$ascii[0][$i] = $var;
	$k++;
	$i++;
}
$k = 65;
$l = 0;
for ($j=1; $j < 3; $j++) { 
	while ($l < 26) {		
	$var = chr($k);
	$ascii[$j][$l] = $var;
	$k++;
	$l++;
	}
	$k = 97;
	$l = 0;
	
}

/*for ($m=0; $m < 26 ; $m++) { 
	for ($n=0; $n < 3 ; $n++) { 
		if (isset($ascii[$n][$m])) {
			echo $ascii [$n][$m].' ';
		} else {
			echo "- ";
		}
	}
	echo "<br />";
}*/



/*echo "<pre>";
var_dump($ascii);
echo "</pre>";*/
?>
<div class="row">
  <div class="col-xs-3 col-xs-offset-1"><?php foreach ($ascii[0] as $value) {echo $value.'<br /> '; }?></div>
  <div class="col-xs-3"><?php foreach ($ascii[1] as $value) {echo $value.'<br /> '; }?></div>
  <div class="col-xs-3"><?php foreach ($ascii[2] as $value) {echo $value.'<br /> '; }?></div>
  
</div>
</body>
</html>