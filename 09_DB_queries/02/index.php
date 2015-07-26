<div class="col-xs-8 col-xs-offset-2">
	<?php
	$page_name = 'Dlops';
	require_once('includes/header.php');
	$no = 1;
	$q = "SELECT first_name, 
	last_name, 
	race, 
	gender, 
	date_of_birth, 
	weight, status 
	FROM dlops 
	WHERE date_deleted IS NULL";
	$q_1 = "SELECT id FROM dlops 
	WHERE date_deleted IS NULL";
	$result = mysqli_query($conn, $q);
	$result_1 = mysqli_query($conn, $q_1);
	echo "<table  class='table table-bordered'>";
	if (mysqli_num_rows($result) > 0 && mysqli_num_rows($result_1) > 0 ) {
		echo "<tr>
		<td>No</td>
		<td>First Name</td>
		<td>Last Name</td>
		<td>race</td>
		<td>gender</td>
		<td>Date of birth</td>
		<td>Weight</td>
		<td>Status</td>
		<td>Update</td>	
		<td>Delete</td>
	</tr>";
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr><td>$no</td>";
		
		foreach ($row as $value) {
			echo "<td>".$value."</td>";			
		}
		$row_1 = mysqli_fetch_assoc($result_1);
		$id = $row_1['id'];
		echo "<td><a href='update_dlop.php?id=$id&no=$no' class='btn btn-info' id='$id' role='button'>UPDATE</td>
		<td><a href='delete_dlops.php?id=$id' class='btn btn-danger' id='$id' role='button'>DELETE</a></td>";
		$no++;

		echo "</tr>";
	}
}
echo "</table>";
?>
<div class="col-xs-4 col-xs-offset-4">
	<a href="add_dlop.php" class="btn btn-info btn-lg" role="button">Add a dlop</a>
</div>
<?php
require_once('includes/footer.php');
?>
