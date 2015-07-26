	<?php 
	$page_name = "Update Dlop Info";
	require_once('includes/header.php');

	$q = "SELECT first_name, 
	last_name, 
	race, 
	gender,
	date_of_birth,  
	weight,
	status 
	FROM dlops WHERE id = $id";
	$result = mysqli_query($conn, $q);
	$row = mysqli_fetch_assoc($result);
	?>
	<div class="col-xs-8 col-xs-offset-2">
		
		<div class="col-xs-10 col-xs-offset-1">
			<h2>Change Dlop Info No<?php echo $no?> </h2>
		</div>		
		<form class="form-horizontal" method="post" action="update_dlop.php">
			<input type="hidden" name="id" value="<?php echo $id;?>">
			<div class="form-group">
				<label for="fn" class="col-xs-2 control-label">First name</label>
				<div class="col-xs-10">
					<input type="text" class="form-control" name="first_name" id="fn" value="<?php echo $row['first_name'];?>">
				</div>
			</div>
			<div class="form-group">
				<label for="ln" class="col-xs-2 control-label">Last name</label>
				<div class="col-xs-10">
					<input type="text" class="form-control" name="last_name" id="ln" value="<?php echo $row['last_name'];?>">
				</div>
			</div>
			<div class="form-group">
				<label for="race" class="col-xs-2 control-label">Race</label>
				<div class="col-xs-4">
					<select name="race" id="race" class="form-control">
						<?php 
						if (mysqli_num_rows($race_result) > 0) {
							while ($race_row = mysqli_fetch_assoc($race_result)) {
								foreach ($race_row as $value) {
									echo "<option value='$value' ";
									if ($row['race'] == $value) {
				//do it better
										echo "selected";
									}
									echo ">".$value."</option>";			
								}
							}
						}
						?>
					</select>
				</div>
				<label class="col-xs-2 control-label">Gender</label>
				<div class="col-xs-4">
					<input type="radio" name="gender" value="male" 
					<?php if ($row['gender'] == 'male') {echo "checked";}?>
					>Male
					<input type="radio" name="gender" value="female" 
					<?php if ($row['gender'] == 'female') {echo "checked";}?>
					>Female
				</div>
			</div>
			<div class="form-group">			
				<label for="d_birth" class="col-xs-2 control-label">Date of Birth</label>
				<div class="col-xs-2">
					<input type="text" class="form-control" name="date_of_birth" id="d_birth" value="<?php echo $row['date_of_birth'];?>">
				</div>
				<label for="weight" class="col-xs-2 control-label">Weight</label>
				<div class="col-xs-2">
					<input type="number"  class="form-control" name="weight" id="weight" value="<?php echo $row['weight'];?>">
				</div>
				<label for="stat" class="col-xs-2 control-label">Status</label>	
				<div class="col-xs-2">
					<select class="form-control" name="status" id="stat">
						<?php 
						if (mysqli_num_rows($status_result) > 0) {
							while ($status_row = mysqli_fetch_assoc($status_result)) {
								foreach ($status_row as $value) {
									echo "<option value='$value' ";
									if ($row['status'] == $value) {
				//do it better
										echo "selected ";
									}
									echo ">".$value."</option>";			
								}
							}
						}
						?>
					</select>
				</div>
			</div>
			<div class="form-group">
			<div class="col-xs-4 col-xs-offset-1">
				<button type="submit" class="btn btn-info">Update Dlop Info</button>
				</div>
			</div>
		</form>
		<hr/>
		<div class="col-xs-4 col-xs-offset-8">
			<a class='btn btn-success' href='index.php' role='button'>Back to DLOPS`s table</a>
		</div>

		<?php 
		if (!empty($_POST)) {
			$id = $_POST['id'];
			$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name']; 
			$race = $_POST['race'];
			$gender = $_POST['gender'];
			$date_of_birth = $_POST['date_of_birth'];
			$weight = $_POST['weight'];
			$status = $_POST['status'];

			$update_q = "UPDATE dlops 
			SET first_name = '$first_name', 
			last_name = '$last_name', 
			race = '$race',
			gender = '$gender',		
			date_of_birth = '$date_of_birth',
			weight = '$weight',
			status = '$status'
			WHERE id = $id ";
			if (mysqli_query($conn, $update_q)) {
				header('Location: index.php');
			} 		
		} 

		?>

		<?php 
		require_once('includes/footer.php');
		?>