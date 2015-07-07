<?php 
$quest = array(array());
$quest[0] = array(
	'question' => 'What is the nationality of Bono?',
	'answ1' => 'Irish',
	'answ2' => 'British',
	'answ3' => 'American',
	'answ4' => 'Scottish',
	'c_answ'=> 'Irish'
	);
$quest[1] = array(
	'question' => 'What is the name of the band whose lead singer is Bono@',
	'answ1' => 'D2',
	'answ2' => 'P2P',
	'answ3' => 'U2',
	'answ4' => 'I2',
	'c_answ'=> 'U2'
	);
$quest[2] = array(
	'question' => 'Which is my favourite U2 song?',
	'answ1' => 'One',
	'answ2' => 'Two',
	'answ3' => 'You',
	'answ4' => 'Me',
	'c_answ'=> 'One'
	);
$quest[3] = array(
	'question' => 'How many musicians play in U2?',
	'answ1' => '3',
	'answ2' => '4',
	'answ3' => '5',
	'answ4' => '6',
	'c_answ'=> '4'
	);
$quest[4] = array(
	'question' => 'What movie did U2 made music for?',
	'answ1' => 'Batman',
	'answ2' => 'Ratman',
	'answ3' => 'Spiderman',
	'answ4' => 'Superman',
	'c_answ'=> 'Batman'
	);

$question = rand(0,4);
echo $quest[$question]['question'];
echo "<br />";
$answ_ord = rand(1,4);
switch ($answ_ord) {
	case 1:
	echo 'a '.$quest[$question]['answ1'];
	echo "<br />";
	echo 'b '.$quest[$question]['answ2'];
	echo "<br />";
	echo 'c '.$quest[$question]['answ3'];
	echo "<br />";
	echo 'd '.$quest[$question]['answ4'];

	break;
	case 2:
	echo 'a '.$quest[$question]['answ1'];
	echo "<br />";
	echo 'b '.$quest[$question]['answ4'];
	echo "<br />";
	echo 'c '.$quest[$question]['answ2'];
	echo "<br />";
	echo 'd '.$quest[$question]['answ3'];
	break;
	case 3:
	echo 'a '.$quest[$question]['answ3'];
	echo "<br />";
	echo 'b '.$quest[$question]['answ4'];
	echo "<br />";
	echo 'c '.$quest[$question]['answ1'];
	echo "<br />";
	echo 'd '.$quest[$question]['answ2'];
	break;
	case '4':
	echo 'a '.$quest[$question]['answ2'];
	echo "<br />";
	echo 'b '.$quest[$question]['answ1'];
	echo "<br />";
	echo 'c '.$quest[$question]['answ4'];
	echo "<br />";
	echo 'd '.$quest[$question]['answ3'];
	break;
}
?>