<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Events</title>
</head>
<body>
<form action="event.php" method="get">
<p>Изберете категория събитие -</p>
<input type="radio" name="type" value="music" required>Музика
<input type="radio" name="type" value="sport">Спорт
<input type="radio" name="type" value="cinema">Кино
<P>Къде - </P>
<select name="place">
	<option value="Vratsa">Враца</option>
	<option value="Sofia">София</option>
	<option value="Kavarna">Каварна</option>
</select>
<input type="submit" value="Избери">	
</form>

</body>
</html>