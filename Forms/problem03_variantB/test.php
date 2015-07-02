<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Задача 1 - php + html forms - Събития</title>
	<link type="text/css" rel="stylesheet" href="default.css" />
</head>
<body>
	<form method="get" action=""> <!--  task1-2.php -->
		<table align="center">
		<tr>
			<td colspan="4" align="center"><h4>Търсачка за събития</h4></td>

		</tr>	
				
			
		<?php
			if (!empty($_GET['sub'])) {
					
		switch ($_GET['event']) {
			case 'sport':
				
				switch ($_GET['city']) {
					case 'vratsa':
						echo 'Промени в състева на юношите в Ботев Враца';
						break;
					case 'sofia':
						echo 'ЦСКА възражда стари дербита във В група, отборите ще са 20 ';
						break;
					case 'plovdiv':
						echo 'Пирин съсипа Локо Пловдив в контрола ';
						break;
					default:
						# code...
						break;
				}
				break;
			case 'music':
				
				switch ($_GET['city']) {
					case 'vratsa':
						echo 'Vola Open Air Festival Враца';
						break;
					case 'sofia':
						echo 'Sofia Rock Fest';
						break;
					case 'plovdiv':
						echo 'Вечер на Европейските фолклорни състави';
						break;
					default:
						# code...
						break;
				}
				break;
			case 'culture':
				
					switch ($_GET['city']) {
					case 'vratsa':
						echo 'Нощ на прилепите';
						break;
					case 'sofia':
						echo 'Фестивал „Малък сезон” на Театрална работилница "Сфумато" ';
						break;
					case 'plovdiv':
						echo 'Есенен панаир Пловдив';
						break;
					default:
						# code...
						break;
				}
				break;
			default:
				# code...
				break;
		}
		?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
</head>
<body>
<tr>
				<td align="right">Спорт</td><td align="left"><input type="radio" name="event" value="sport" checked="checked" /></td>
				<td>Избери град</td>			
			</tr>
			<tr>
				<td align="right">Музика</td><td align="left"><input type="radio" name="event" value="music" /></td>
				<td rowspan="2">
					<select id="city" name="city">
						<option value="vratsa">Враца</option>
						<option value="sofia">София</option>
						<option value="plovdiv">Пловдив</option>
					</select>
				</td>			
			</tr>
			<tr>
				<td align="right">Култура</td><td align="left"><input type="radio" name="event" value="culture" /></td></td>
			</tr>
			<tr>
				<td colspan="3" align="center" ><input id="sub" type="submit" name="sub" value="Търси" /></td>
			</tr>
		</table>
	</form>
</body>
</html>

   

    © 2015 GitHub, Inc.