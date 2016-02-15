<!DOCTYPE html>
<html lang="en">
<head>
	<link href=<?php echo base_url("css/bootstrap.css")?> rel="stylesheet">
	<link href=<?php echo base_url("css/default.css")?> rel="stylesheet">
	<style type="text/css">
		body
		{
			margin: 20px;
		}
		
	</style>
</head>
<body>
	<!-- Edit Profile Page Starts -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form class="form-horizontal" action="<?php echo base_url('index.php/customer/update_profile/'.$id);?>" method="post">
				<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div class="form-group">
					    <label class="col-md-2 control-label" for="textinput">Name</label>
					    <div class="col-md-10">
					    	<input type="text"  name="cname" id="cname" placeholder="Name" class="form-control" value="<?php echo $show['name'];?>">
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-md-2 control-label" for="textinput">Address</label>
					    <div class="col-md-10">
					    	<textarea type="text"  name="caddress" id="caddress" placeholder="Address" class="form-control"><?php echo $show['address'];?></textarea>
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-md-2 control-label" for="textinput">Gender</label>
					    <div class="col-md-10 radio">
					    	<label for"gender-0">
								<input type="radio" name="gender" id="gender-0" value="0" checked="checked"> Female
							</label>
							<label for"gender-1">
								<input type="radio" name="gender" id="gender-1" value="1"> Male
							</label>
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-md-2 control-label" for="textinput">DOB</label>
					    <div class="col-md-10">
					    	<input type="text"  name="cdob" id="cusdob" placeholder="Date Of Birth" class="form-control" value="<?php echo $show['dob'];?>" readonly>
					    </div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label" for="textinput">Contact</label>
						<div class="col-md-10">			
								<input type="number"  name="ccontact" id="cnumber" placeholder="Contact Number" class="form-control" value="<?php echo $show['contact'];?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label" for="textinput">Email</label>
						<div class="col-md-10">			
								<input type="email"  name="cemail" id="cemail" placeholder="Email" class="form-control" value="<?php echo $show['email'];?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label" for="textinput">City</label>
						<div class="col-md-10">			
								<input type="text"  name="ccity" id="ccity" placeholder="City" class="form-control" value="<?php echo $show['city'];?>">
						</div>
					</div>
					<button type="submit" class="btn btn-primary pull-right"> Update </button>
					<?php
						if(isset($msg))
						{
				 			echo $msg; 
				 		}
					?>
				<div class="col-md-1"></div>
			</form>
		</div>
	</div> <!-- row -->
</div> <!-- Container Fluid -->
<!-- Edit Profile Page Ends -->
</body>
</html>