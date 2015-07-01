<?php 
session_start();
if (empty($_POST['next'])) {
	$_SESSION['score']=0;
	$_SESSION['count']=0;
}


$x = rand(0, 50);
$y = rand(0, 50);
$op = rand(0, 10) + rand(0,10);
if ($op % 2 == 0) {
	echo "$x + $y =".'<br />';
	$result = $x+$y;
}
else {
	echo "$x - $y =";
	$result = $x-$y;
}

if(isset($_POST['next'])){
		/*echo "<!-- ".$cnt.' --> ';*/
		$_SESSION['count']++;
		echo "<br />";
		echo $_SESSION['count'];
		echo "<br />";
		$_SESSION['score']=$_SESSION['score'] + 5;
		echo $_SESSION['score'];
		$answer = $_POST['answer'];
		echo "<br />";
		echo $answer;
		}

	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Игра</title>
</head>
<body>
	<form id="game" action="game.php" method="post">
		<span>
			<label for="answer">
				Отговор
			</label>
			<input type="text" name="answer" id="answer">
		</span>
		<input type="submit" name="next" value="следващ">
	</form>

	
	<p>
		<ol>
			Правила:
		</ol>
		<li>
			20 задачи;
		</li>
		<li>
			За всеки верен отговор порлучавате 5 точки;
		</li>
		<li>
			Всеки неправилен - отнема 5 точки;
		</li>
		<li>
			При достигане на 50 точки - може да преминете на второ ниво или да продължите да събирате точки;
		</li>
		<li>
			Ако за 20 тура не съберете 50 точки играта приключва;
		</li>
	</p>
	<?php 

	?>
	
</body>
</html>