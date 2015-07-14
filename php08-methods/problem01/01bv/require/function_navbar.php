<?php 
function print_navbar($arr, $tag2){
		$count = count($arr);
		for ($i= 0; $i < $count  ; $i++) { 
			echo "<$tag2>".$arr[$i]."</$tag2>";
		}
	}
	?>