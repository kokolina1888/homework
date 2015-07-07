<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Задача 5</title>
</head>
<?php 
$actors = array(array());
$actors[0] = array('name' => 'Ben Affleck', 'nationality' => 'American', 'age' => 42, 'Oscars' => 2);
$actors[1] = array('name' => 'George Clooney', 'nationality' => 'American', 'age' => 54, 'Oscars' => 0);
$actors[2] = array('name' => 'Harrison Ford', 'nationality' => 'American', 'age' => 73, 'Oscars' => 0);
$actors[3] = array('name' => 'Robert De Niro', 'nationality' => 'American', 'age' => 72, 'Oscars' => 2);
$actors[4] = array('name' => 'Al Pachino', 'nationality' => 'American', 'age' => 75, 'Oscars' => 1);
$movies = array(array());
$movies[0] = array('name' => 'Argo', 
	'year' => '2012', 
	'budget' => '10 mln.\$', 
	'janre' => 'drama', 
	'lead' => 'Ben Affleck');
$movies[1] = array('name' => 'Last Vegas',
	'year' => '2013', 
	'budget' => '18 mln.\$', 
	'janre' => 'comedy', 
	'lead' => 'Robert De Niro');
$movies[2] = array('name' => 'Star Wars',
	'year' => '1977', 
	'budget' => '118 mln.\$', 
	'janre' => 'science fiction', 
	'lead' => 'Harrison Ford');
$movies[3] = array('name' => '88 minutes',
	'year' => '2007', 
	'budget' => '11 mln.\$', 
	'janre' => 'action', 
	'lead' => 'Al Pachino');
$movies[4] = array('name' => 'The Family',
	'year' => '2013', 
	'budget' => '38 mln.\$', 
	'janre' => 'comedy', 
	'lead' => 'Robert De Niro');
	?>
	<body>
		<form action="05.php" method="post">
			<select name="actors">
				<option value="Ben Affleck">Ben Affleck</option>
				<option value="George Clooney">George Clooney</option>
				<option value="Harrison Ford">Harrison Ford</option>
				<option value="Robert De Niro">Robert De Niro</option>
				<option value="Al Pachino">Al Pachono</option>
				<input type="submit" name="submit" value="Покажи">
			</select>
		</form>
		<?php 
		if (!empty($_POST)) {
			if (!empty($_POST['actors'])) {
				$actor = $_POST['actors'];
			//echo $actor;
			}
		}
		$count_movies = count($movies);
		$count_actors = count($actors);
	//echo $count_actors.''.$count_movies;
		for ($i=0; $i < $count_actors; $i++) { 
			if ($actor == $actors[$i]['name']) {
				foreach ($actors[$i] as $key => $value) {
					echo $key.' - '.$value.'<br />';
				}
			}
		}
		$check = $count_movies;
		for ($j=0; $j < $count_movies ; $j++) { 
		//echo $movies[$j]['lead'];
			if ($actor === $movies[$j]['lead']) {
				echo 'Movies - '.$movies[$j]['name'].'<br />';
				$check--;
			}

		}
		if ($check == $count_movies) {
			echo "No films!";
		}
		?>


	</body>
	</html>