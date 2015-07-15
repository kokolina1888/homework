<?php 
$page_name = 'Home';
require_once('includes/require.php');
require_once('includes/header.php');
?>	
<p>Имаме двумерен асоциативен масив, 
който съхранява информация за 5 популярни уеб сайта: 
име, кратко описание, създател, брой потребители, използвана технология . 
Да се направи списък с линкове (List group -> Linked items), който съдържа имената на уеб сайтовете.  
При натискане на всеки от елементите в списъка да ни се отваря нова страница с цялата информация за сайта.
б)* За всеки сайт да се добави информация в масива 
и за логото (линк към файла). При показване на цялата информация да се показва и логото.
</p>
<div class="col-xs-8 col-xs-offset-2">
	<div class="list-group">
		<?php 
		$count = count($sites);
		for ($i=0; $i < $count ; $i++) { 
			$name = $sites[$i]['name'];
			echo "<a href='$name.php' class='list-group-item'>".$name."</a>";
		}
		require_once('includes/footer.php');
		?>
		