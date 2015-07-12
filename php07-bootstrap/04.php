<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>	
	<script src="jquery-1.11.3.min.js"></script>
	<style type="text/css">
		.black {
			background: black;
			color: white;
		}
		h1 {
			font-size: 82px;

		}
	</style>
	<title>Задача 4</title>
</head>
<body>
	
	<?php 
	$num = 0;
	echo "<div class='row'>";
	echo "<div class='col-xs-1'></div>";
	echo "<div class='col-xs-1 black'>Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>";
	for ($m=0; $m <4 ; $m++) { 
		$num++;
		echo "<div class='col-xs-1'><h1>$num</h1></div>";
		$num++;
		echo "<div class='col-xs-1 black'><h1>$num</h1></div>";
	}
	echo "</div>";
	$code = 64;
	for ($i=0; $i < 4; $i++) {
		$code++;
		$letter = chr($code); 
		echo "<div class='row'>";
		echo "<div class='col-xs-1'></div>";
		echo "<div class='col-xs-1'><h1>$letter</h1></div>";
		for ($j=0; $j < 4; $j++) { 
			echo "<div class='col-xs-1 black'>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>";
			echo "<div class='col-xs-1'>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>";
		}
		echo "</div>";
		$code++;
		$letter = chr($code); 
		echo "<div class='row'>";
		echo "<div class='col-xs-1'></div>";
		echo "<div class='col-xs-1 black'><h1>$letter</h1></div>";
		for ($k=0; $k < 4; $k++) { 
			echo "<div class='col-xs-1'>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>";
			echo "<div class='col-xs-1 black'>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>";
		}
		echo "</div>";
	}
	?>
</body>
</html>