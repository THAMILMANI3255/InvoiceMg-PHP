<?php

include('header.php');

?>

<h1>Add Employeessss </h1>
<hr>

<div id="response" class="alert alert-success" style="display:none;">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	<div class="message"></div>
</div>

<form method="post" id="create_emp">
	<input type="hidden" name="action" value="create_emp">
	<div class="row">
		<div class="col-xs-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Employee Information</h4>
					<div class="clear"></div>
				</div>
				<div class="panel-body form-group form-group-sm">
					<div class="row">
						<div class="col-xs-6">
							<div class="form-group">
								<input type="text" class="form-control margin-bottom required" name="emp_name" id="emp_name" placeholder="Enter Name" tabindex="1">
							</div>
							<div class="form-group">
								<input type="text" class="form-control margin-bottom required" name="emp_address_1" id="emp_address_1" placeholder="Address 1" tabindex="3">	
							</div>
							<div class="form-group">
								<input type="text" class="form-control margin-bottom required" name="emp_town" id="emp_town" placeholder="Town/City" tabindex="5">		
							</div>
							<div class="form-group no-margin-bottom">
								<input type="text" class="form-control required" name="emp_postcode" id="emp_postcode" placeholder="Postcode" tabindex="7">					
							</div>
						</div>
						<div class="col-xs-6">
							<div class="input-group float-right margin-bottom">
								<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
								<input type="email" class="form-control required" name="emp_email" id="emp_email" placeholder="Email" aria-describedby="sizing-addon1" tabindex="2">
							</div>
						    <div class="form-group">
						    	<input type="text" class="form-control margin-bottom" name="emp_address_2" id="emp_address_2" placeholder="Address 2" tabindex="4">
						    </div>
						    <div class="form-group">
						    	<input type="text" class="form-control margin-bottom required" name="emp_county" id="emp_county" placeholder="Country" tabindex="6">
						    </div>
						    <div class="form-group no-margin-bottom">
						    	<input type="text" class="form-control required" name="emp_phone" id="emp_phone" placeholder="Phone Number" tabindex="8">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 margin-top btn-group">
			<input type="submit" id="action_create_emp" class="btn btn-success float-right" value="Create Employee" data-loading-text="Creating...">
		</div>
	</div>
</form>

<?php
	include('footer.php');
?>