	<?php 
	$page_name = 'Add A New Dlop';
	require_once('includes/header.php');
	?>
	<div class="col-xs-8 col-xs-offset-2">		
		<div class="col-xs-10 col-xs-offset-1">
	<h2>New Dlop</h2>
	</div>
	<form class="form-horizontal" method="get" action="add_dlop.php">
		<div class="form-group">
			<label for="fn" class="col-xs-2 control-label">First name</label>
			<div class="col-xs-10">
				<input type="text" class="form-control" name="first_name" id="fn">
			</div>	
		</div>
		<!--<div class="form-group">
			<label for="ln" class="col-xs-2 control-label">Last name</label>
			<div class="col-xs-10">
				<input type="text" class="form-control" name="last_name" id="ln">
			</div>
		</div>
		<div class="form-group">
			<label for="race" class="col-xs-2 control-label">Race</label>
			<div class="col-xs-4">
				<select name="race" class="form-control" id="race">
					<?php/* 
					if (mysqli_num_rows($race_result) > 0) {
						while ($race_row = mysqli_fetch_assoc($race_result)) {
							foreach ($race_row as $value) {
								echo "<option value='$value'>".$value."</option>";			
							}
						}
					}*/
					?>
				</select>
			</div>
			<label for="gen" class="col-xs-2 control-label">Gender</label>
			<div class="col-xs-4">
				<input type="radio" name="gender" id="gen" value="male" checked>Male
				<input type="radio" name="gender" value="female" >Female
			</div>
		</div>
		<div class="form-group">
			<label for="date_b" class="col-xs-2 control-label">Date of birth</label>
			<div class="col-xs-2">
				<input type="text" class="form-control" name="date_of_birth" id="dare_b" placeholder="yyyy-mm-dd">
			</div>
			<label for="weight" class="col-xs-2 control-label">Weight</label>
			<div class="col-xs-2">
				<input type="number" class="form-control" name="weight" id="weight" min="10">
			</div>			
			<label for="stat" class="col-xs-2 control-label">Status</label>
			<div class="col-xs-2">
				<select class="form-control" name="status" id="stat">
					<?php 
					if (mysqli_num_rows($status_result) > 0) {
						while ($status_row = mysqli_fetch_assoc($status_result)) {
							foreach ($status_row as $value) {
								echo "<option value='$value'>".$value."</option>";			
							}
						}
					}
					?>
				</select>
			</div>
		</div>-->
		<div class="form-group">
			<div class="col-xs-4 col-xs-offset-1">
				<button type="submit" class="btn btn-info">Add New Dlop Info</button>
			</div>
		</div>
	</form>
	<hr/>
	<div class="col-xs-4 col-xs-offset-8">
		<a class='btn btn-success' href='index.php' role='button'>Back to DLOPS`s table</a>
	</div>
	
	<?php 
	if (!empty($_GET)) {
		if (!empty($_GET['gender'])) {
			$first_name = $_GET['first_name'];
			/*$last_name = $_GET['last_name'];
			$race = $_GET['race'];
			$gender = $_GET['gender'];
			$date_of_birth = $_GET['date_of_birth'];
			$weight = $_GET['weight'];
			$status = $_GET['status'];*/

			$q = "INSERT INTO `measures`(`measure`) VALUES ('$first_name')";
			if (mysqli_query($conn, $q)) {
				echo "Success!";
			} 
		}
	}  
	require_once('includes/footer.php');
	?>

