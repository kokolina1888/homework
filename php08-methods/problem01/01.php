<?php 
function print_numbers($tag1, $tag2, $tag3) {
	$num = 42;
		echo "<$tag1>";
		while ($num >= 11) {
		echo "<$tag2>".$num."</$tag2>";
		$num--;
	}
	echo "</$tag3>";
}

print_numbers('table border="1"><tr', 'td', 'table></tr');
print_numbers('ol', 'li', 'ol');
print_numbers('ul', 'li', 'ul');
?>