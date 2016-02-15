<!-- Edit Profile Page Starts -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form class="form-horizontal" action="<?php echo base_url('index.php/carrier/update_profile/'.$id);?>" method="post">
				<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-3">
					<div class="thumbnail">
						<img src="<?php echo base_url("img/defaultperson.gif"); ?>" alt="...">
					</div>
					<input id="uploadFile" type="file" name="image" value="Choose Image" class="img" />
				</div>
				<div class="col-md-7">
					<div class="form-group">
					    <label class="col-md-2 control-label" for="textinput">Name</label>
					    <div class="col-md-10">
					    	<input type="text"  name="caname" id="caname" placeholder="Name" class="form-control" value="<?php echo $show['name'];?>">
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-md-2 control-label" for="textinput">Address</label>
					    <div class="col-md-10">
					    	<textarea type="text"  name="caaddress" id="caaddress" placeholder="Address" class="form-control" rows="3"><?php echo $show['address'];?></textarea>
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
					    	<input type="text"  name="cadob" id="cadob" placeholder="Date Of Birth" class="form-control" value="<?php echo $show['dob'];?>" readonly>
					    </div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label" for="textinput">Contact</label>
						<div class="col-md-10">			
							<input type="number"  name="cacontact" id="canumber" placeholder="Contact Number" class="form-control" value="<?php echo $show['contact'];?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label" for="textinput">Email</label>
						<div class="col-md-10">			
								<input type="email"  name="caemail" id="caemail" placeholder="Email" class="form-control" value="<?php echo $show['email'];?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label" for="textinput">City</label>
						<div class="col-md-10">			
								<input type="text"  name="cacity" id="cacity" placeholder="City" class="form-control" value="<?php echo $show['city'];?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label" for="textinput">Id Proof</label>
						<div class="col-md-10">
						<input id="uploadFile" type="file" name="image" value="Choose Image" class="img" />
						</div>
					</div>
					<button type="submit" href="" class="btn btn-info pull-right"> Update </button>
				</div>
				<div class="col-md-1"></div>
			</form>
		</div>
	</div> <!-- row -->
</div> <!-- Container Fluid -->
<!-- Edit Profile Page Ends -->