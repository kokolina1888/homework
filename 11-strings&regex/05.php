<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<style type="text/css">
	span{
		background-color: tomato;
;	}
	</style>
	<title>FIND and REPLACE</title>
</head>
<body>
<form method="post" action="05.php">
<label for="pattern">Въведете дума за търсене</label>
	<input type="text" name="pattern" id="pattern">
	<label for="text">Въведете текст</label>
	<textarea name="text" value="text"></textarea>
	<input type="submit" name="submit" value="търси" >
</form>
	
</body>
</html>
<?php 
if (!empty($_POST)) {
	$pattern = $_POST['pattern'];
	$text = $_POST['text'];
	$replace ="<span>".$pattern."</span>";
	$text_new = str_replace($pattern, $replace, $text, $count);
	if ($count!==0) {
		echo "Търсената дума/фраза се среща във въведения текст ".$count."пъти <br />
				<p>".$text_new."</p>";
	} else {
		echo "Няма съвпадения на търсената от Вас дума в
		<p>".$text_new."</p>";
	}
}

//$str = str_replace("ll", "", "good golly miss molly!", $count);
//echo $count;
?>