<?php 
$id = $_GET['id'];
$q = "DELETE FROM `recipes` WHERE `id` = $id LIMIT 1";
if (mysqli_query($conn, $q)) {
	header('Location:enter_recipe.php');
}
?>