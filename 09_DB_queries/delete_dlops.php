<?php 
$page_name = "Delete A Dlop";
require_once('includes/header.php');

date_default_timezone_set('Europe/Istanbul');
$date = date('Y-m-d');
//echo $date;
?>
<a href="index.php" class="btn btn-info" role="button">
	Back to DLOP`s table
</a>
<br />
<?php 
$id = $_GET['id'];
$q = "UPDATE dlops SET date_deleted = '$date' WHERE id = $id ";
if (mysqli_query($conn, $q)) {
	header('Location:index.php');
}

require_once('includes/footer.php');
?>