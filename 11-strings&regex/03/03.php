Да се направи база данни за новинарски сайт, 
която съхранява заглавие на новина, съдържание и дата. 
Да се направи страница, която отпечатва последните 5 новини като 
показва тяхното заглавие, дата и първите 60 символа от съдържанието. 
След това има бутон ‘Прочети още’, който ни отвежда към цялата статия.
<?php 
$connect = mysqli_connect('localhost', 'root', '', 'news'); 
if (!$connect) {
	die ("Connection failed: mysqli_connect_error()");
} else {
	echo "Connected successfully<br />";
}
mysqli_set_charset($connect, 'utf8');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>news site</title>
</head>
<body>
	<?php 

	$q = "SELECT * FROM `news` ORDER BY `id` DESC LIMIT 5";
	$res = mysqli_query($connect, $q);
	$i = 0;
	$news = array(array());
	if (mysqli_num_rows($res)>0) {
		while ($row = mysqli_fetch_assoc($res)) {
			foreach ($row as $key => $value) {
				$news[$i][$key] = $value;
				if (isset($news[$i]['text'])) {
					$text_news = $news[$i]['text'];
					$news[$i]['min'] = substr($text_news, 0, 60);
				}
			}
			$i++;
		}
	}

	/*
	echo "<pre>";
	var_dump($news);
	echo "<pre/>";
*/
	
	for ($j=0; $j < 5 ; $j++) { 
		echo " </p>";
		echo $news[$j]['title_news']."<br/>";
		echo $news[$j]['date_published']."<br/>";
		echo $news[$j]['min'].' ';
		$id = $news[$j]['id'];
		echo "<a href='full_text.php?id=$id'>цялата новина</a><br/>";
		echo " </p>";
	}
	
	

	?>
</body>
</html>