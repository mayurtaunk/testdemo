<!-- Approve Carrier -->
<div class="row">
	<div class="col-md-12">
		<form class="form-horizontal" action="" method="post">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<?php echo $nor;?>	
				</div>
				<div class="col-md-1"></div>
			</div>
		</form>
	</div>
</div>
<!-- Approve Carrier -->
<!--  Modal for Carrier Details -->
<div class="modal fade" id="carrierdetails" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title" id="myModalLabel">Carrier Details</h4>
      		</div>
      		<div class="modal-body">
      			<div class="row">
      				<div class="col-md-1"></div>
      				<div class="col-md-2">
      					<!-- <div class="row"> -->
      						<!-- <div class="col-md-6"> -->
  							  <div href="#" class="thumbnail">
  							    <img id="image" src="<?php echo base_url("img/defaultperson.gif"); ?>" alt="...">
  							    <div class = "caption">
         							<div class="pic_caption">Identity Proof</div>
         						</div>
  							  </div>
  							<!-- </div> -->
  							<!-- <div class="col-md-6">
  							  <div href="#" class="thumbnail">
  							    <img src="<?php echo base_url("img/defaultperson.gif"); ?>" alt="...">
  							    <div class = "caption">
         							<div class="pic_caption">Person Image</div>
         						</div>
  							  </div>
  							</div> -->
  						<!-- </div> -->
  					</div>
      				<!-- <div class="col-md-1"></div> -->
      			<!-- </div> -->
				<!-- <div class="row">
					<div class="col-md-1"></div> -->
					<div class="col-md-8 well well-sm">
						<div class="form-group">							
							<label class="col-md-4 control-label viewdata" for="textinput">Name:</label>
							<label id="name" class="col-md-8 control-label" for="name">Name</label>
						</div>
						<div class="form-group">							
							<label class="col-md-4 control-label viewdata" for="textinput">Address :</label>
							<label class="col-md-8 control-label" for="address">Address</label>
						</div>
						<div class="form-group">							
							<label class="col-md-4 control-label viewdata" for="textinput">Gender:</label>
							<label class="col-md-8 control-label" for="gender">Male/Female</label>
						</div>
						<div class="form-group">							
							<label class="col-md-4 control-label viewdata" for="textinput">Date of Birth:</label>
							<label class="col-md-8 control-label" for="dob">DOB</label>
						</div>
						<div class="form-group">							
							<label class="col-md-4 control-label viewdata" for="textinput">Contact:</label>
							<label class="col-md-8 control-label" for="contact">+910000000000</label>
						</div>
						<div class="form-group">							
							<label class="col-md-4 control-label viewdata" for="textinput">Email:</label>
							<label class="col-md-8 control-label" for="email">nili@gmail.com</label>
						</div>
						<div class="form-group">							
							<label class="col-md-4 control-label viewdata" for="textinput">City:</label>
							<label class="col-md-8 control-label" for="city">Bhuj</label>
						</div>
					</div>
					<div class="col-md-1"></div>
				<!-- </div> -->
			</div>
			<div class="modal-footer">

			<div class="pull-right">
				<a id="reject" href="" class="btn btn-danger"> 
					Reject<i class="glyphicon"></i>
				</a>
	 			<a id="accept" href="" class="btn btn-success"> 
	 				Approve<i class="glyphicon"></i>
	 			</a>
	 		</div>
			</div>
		</div>
	</div>
</div>	













