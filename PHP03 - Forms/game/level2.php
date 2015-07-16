<?php 
session_start();
echo "<h2>Congratulations! You have completed level 1! Proceed to the next level!</h2>";
$level2 = array(array());
$p = rand(0, 19);
if (empty($_SESSION['cnt'])){
        $_SESSION['cnt'] = 0;
    }
    if (empty($_SESSION['result'])){
        $_SESSION['result'] = 0;
    }
if ($_SESSION['cnt'] > 10 && $_SESSION['cnt'] <= 20) {
for ($j=0; $j < 20; $j+=2) { 
	$m = rand(1, 10);
	$n = rand(1, 10);	
				//problem
		$level2[$j][0] = "$m"."*"."$n"."=?";	
			//answer
		$level2[$j][1] = $m * $n;					
		$level2[$j+1][0] = $n*$m."/"."$m"."=?";	
			//answer
		$level2[$j+1][1] = $m*$n/$m;		
	}
}
//TODO level 3 sqr(m*m) - за да е сигурно, че е цяло число!!!!!
//var_dump($level2);
?>
<form action="level2.php" method="post">
	<p><?php 
		$problem = $level2[$p][0];
		echo $problem;?>
	</p>
	<input type="text" name="user_answ">
	<input type="hidden" name="answ" value="<?php echo $level2[$p][1]; ?>">
	<p><input type="submit" name="submit" value="answer"></p>

</form>
<?php 

if(isset($_POST['submit'])) {
	 
     //echo $_SESSION['cnt'].' --> ';
            $_SESSION['cnt']++;
            echo "game ".$_SESSION['cnt'];
    if ($_POST['user_answ'] == $_POST['answ']) {
		echo "<h2>Correct!</h2>";
		
		$_SESSION['result'] += 5;
		echo "<h3>".$_SESSION['result']."</h3>";
	} else {
		echo "<h2>Wrong answer!</h2>";
		
		$_SESSION['result'] -= 5;
		echo "<h3>".$_SESSION['result']."</h3>";
	}
	//TODO when to proceed to the next level, when to loose the game ...
	if ($_SESSION['cnt'] == 20 && $_SESSION['result'] > 35 ) {
		header('Location: level3.php');
		//същото съобщение като на ниво 2!!!
	} elseif($_SESSION['cnt'] == 20 && $_SESSION['result'] <= 0) {
		header('Location: end_of_game.php');
		
	}
}
echo "<p><a href='unset.php'>Start a new game</a></p>";
echo "<p><a href='logout.php'>Log out</a></p>";

?>