<?php  
session_start();
//показване номер на първа задача 1
$cnt = isset($_POST["num"]) ? $_POST["num"] : 0;
$_SESSION['result'][] = array();
$_SESSION['answer'][] = array();

//брояч за поредност на задачите next== дай задача

if(isset($_POST['next'])){
	if($cnt< 10){
		echo "<!-- ".$cnt.' --> ';
		$cnt++;
		echo $cnt;
		echo "<br />";
		$answer = $_POST['answer'];
		$x = rand(0, 50);
		$y = rand(0, 50);
		//за случайност на операциите
		$op = rand(0, 10);
		if ($op % 2 == 0) {
			echo "$x + $y =";
			$_SESSION['result'][$cnt] = $x+$y;
			print_r($_SESSION['result']);
			echo "<br />";

		} else {
			echo "$x - $y =";
			$_SESSION['result'][$cnt] = $x-$y;
			print_r($_SESSION['result']);
			echo "<br />";

		}

		$_SESSION['answer'][$cnt-1] = $_POST['answer'];
		print_r($_SESSION['answer']);
		//за да почне да сравнява от първата стойност в масивите за резултати и отговори с ключ 1
		if ($cnt > 1) {
			//cnt - 1 за да се синхронизира, защото започва да проверява реално от cnt 2 - втората задача, тогава и дава резултат от срвн
			if($_SESSION['result'][$cnt-1] == $_SESSION['answer'][$cnt-1]) {
				echo "Bravo";
			}
			else {
				echo "Wrong answer!";
			}
		}


	}
}

//TODO add score
//add levels, according to the rules
//style!
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
			<input type="number" name="answer" id="answer" min="-1000">
			<input type="hidden" name="num" value="<?php echo $cnt;?>">
		</span>
		<input type="submit" name="next" id="next" value="NEXT"/>

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
</body>
</html>
<?php 
echo "<a href='Logout.php'>Нулиране</a>";
?>
