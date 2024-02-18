<?php


include('header.php');
include('functions.php');

$getID = $_GET['id'];

// Connect to the database
$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

// output any connection error
if ($mysqli->connect_error) {
	die('Error : ('.$mysqli->connect_errno .') '. $mysqli->connect_error);
}

// the query
$query = "SELECT * FROM emp WHERE id = '" . $mysqli->real_escape_string($getID) . "'";

$result = mysqli_query($mysqli, $query);

// mysqli select query
if($result) {
	while ($row = mysqli_fetch_assoc($result)) {

        $emp_name = $row['name']; // Employee name
		$emp_email = $row['email']; // Employee email
		$emp_address_1 = $row['address_1']; // Employee address
		$emp_address_2 = $row['address_2']; // Employee address
		$emp_town = $row['town']; // Employee town
		$emp_county = $row['county']; // Employee county
		$emp_postcode = $row['postcode']; // Employee postcode
		$emp_phone = $row['phone']; // Employee phone number

	}
}

/* close connection */
$mysqli->close();

?>

<h1>Edit Employee</h1>
<hr>

<div id="response" class="alert alert-success" style="display:none;">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	<div class="message"></div>
</div>

<form method="post" id="update_emp">
	<input type="hidden" name="action" value="update_emp">
	<input type="hidden" name="id" value="<?php echo $getID; ?>">
	<div class="row">
		<div class="col-xs-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Editing Employee (<?php echo $getID; ?>)</h4>
					<div class="clear"></div>
				</div>
				<div class="panel-body form-group form-group-sm">
					<div class="row">
						<div class="col-xs-6">
							<div class="form-group">
								<input type="text" class="form-control margin-bottom copy-input required" name="emp_name" id="emp_name" placeholder="Enter name" tabindex="1" value="<?php echo $emp_name; ?>">
							</div>
							<div class="form-group">
								<input type="text" class="form-control margin-bottom copy-input required" name="emp_address_1" id="emp_address_1" placeholder="Address 1" tabindex="3" value="<?php echo $emp_address_1; ?>">	
							</div>
							<div class="form-group">
								<input type="text" class="form-control margin-bottom copy-input required" name="emp_town" id="emp_town" placeholder="Town" tabindex="5" value="<?php echo $emp_town; ?>">		
							</div>
							<div class="form-group no-margin-bottom">
								<input type="text" class="form-control copy-input required" name="emp_postcode" id="emp_postcode" placeholder="Postcode" tabindex="7" value="<?php echo $emp_postcode; ?>">					
							</div>
						</div>
						<div class="col-xs-6">
							<div class="input-group float-right margin-bottom">
								<span class="input-group-addon">@</span>
								<input type="email" class="form-control copy-input required" name="emp_email" id="emp_email" placeholder="E-mail address" aria-describedby="sizing-addon1" tabindex="2" value="<?php echo $emp_email; ?>">
							</div>
						    <div class="form-group">
						    	<input type="text" class="form-control margin-bottom copy-input" name="emp_address_2" id="emp_address_2" placeholder="Address 2" tabindex="4" value="<?php echo $emp_address_2; ?>">
						    </div>
						    <div class="form-group">
						    	<input type="text" class="form-control margin-bottom copy-input required" name="emp_county" id="emp_county" placeholder="County" tabindex="6" value="<?php echo $emp_county; ?>">
						    </div>
						    <div class="form-group no-margin-bottom">
						    	<input type="text" class="form-control required" name="emp_phone" id="emp_phone" placeholder="Phone number" tabindex="8" value="<?php echo $emp_phone; ?>">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 margin-top btn-group">
			<input type="submit" id="action_update_emp" class="btn btn-success float-right" value="Update emp" data-loading-text="Updating...">
		</div>
	</div>
</form>

<?php
	include('footer.php');
?>