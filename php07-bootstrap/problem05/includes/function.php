<?php 
function print_site_info($page_name, $arr){
	echo "<div class='col-xs-6 col-xs-offset-3'>";
	$count = count($arr);
	for ($i=0; $i < $count ; $i++) { 
		if ($arr[$i]['name'] == $page_name) {
			foreach ($arr[$i] as $key => $value) {
				echo "<h3>".$key."</h3>"."<p>".$value."</p>";
			}
		}
	}
}
?>