<?php 

function print_pages($arr, $tag1, $tag2){
	$count = count($arr);
	echo "<$tag1>";
	for ($i= 0; $i < $count  ; $i++) { 
		echo "<$tag2>".$arr[$i]."</$tag2>";
	}
	echo "</$tag2>";
}
$site_pages = array('Mens', 'Ladies', 'Kids', 'Football Shirts', 'Accessories', 'Sports', 'Brands', 'Sale');
print_pages($site_pages, 'ol', 'li');
?>