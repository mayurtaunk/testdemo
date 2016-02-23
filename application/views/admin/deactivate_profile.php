<!-- Approve Carrier -->
<div class="row">
	<div class="col-md-12">
		<form class="form-horizontal" action="" method="post">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div class="row">
						<div class="col-md-6 well">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<div class="input-group">
    									  <input type="text" id="scust" class="form-control" placeholder="Search Customer">
    									  <span class="input-group-btn">
    									    <button id="sbtn" class="btn btn-default" type="button"><i class="glyphicon glyphicon-search"></i></button>
    									  </span>
    									</div>
    								</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div id="dCustomerData">
									<?php echo $nocustomer; ?>
									</div>
								</div>
							</div>
							<div class="row">
								<div class='help-block'> *Click to view more.</div>
							</div>
						</div>
						<div class="col-md-6 well">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<div class="input-group">
    									  <input type="text" id="scar" class="form-control" placeholder="Search Carrier">
    									  <span class="input-group-btn">
    									    <button id="sbtncl" class="btn btn-default" type="button"><i class="glyphicon glyphicon-search"></i></button>
    									  </span>
    									</div>
    								</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
								<div id="dcarrierdata">
									<?php echo $nocarrier; ?>
								</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class='help-block'> *Click to view more.</div>
								</div>
							</div>
						</div>
					</div>
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
      				<div class="col-md-10 well well-sm">
      					<div class="row">
      						<div class="col-md-6">
  							  <div href="#" class="thumbnail">
  							    <img src="<?php echo base_url("img/defaultperson.gif"); ?>" alt="...">
  							    <div class = "caption">
         							<div class="pic_caption">Identity Proof</div>
         						</div>
  							  </div>
  							</div>
  							<div class="col-md-6">
  							  <div href="#" class="thumbnail">
  							    <img id="crimg" src="<?php echo base_url("img/defaultperson.gif"); ?>" alt="...">
  							    <div class = "caption">
         							<div class="pic_caption">Person Image</div>
         						</div>
  							  </div>
  							</div>
  						</div>
  					</div>
      				<div class="col-md-1"></div>
      			</div>
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10 well well-sm">
						<div class="form-group">							
							<label class="col-md-4 control-label viewdata" for="textinput">Name:</label>
							<label class="col-md-8 control-label" for="crname" id="crname">Name</label>
						</div>
						<div class="form-group">							
							<label class="col-md-4 control-label viewdata" for="textinput">Address :</label>
							<label class="col-md-8 control-label" for="craddress" id="craddress">Address</label>
						</div>
						<div class="form-group">							
							<label class="col-md-4 control-label viewdata" for="textinput">Gender:</label>
							<label class="col-md-8 control-label" for="crgender" id="crgender">Male/Female</label>
						</div>
						<div class="form-group">							
							<label class="col-md-4 control-label viewdata" for="textinput">Date of Birth:</label>
							<label class="col-md-8 control-label" for="crdob" id="crdob">DOB</label>
						</div>
						<div class="form-group">							
							<label class="col-md-4 control-label viewdata" for="textinput">Contact:</label>
							<label class="col-md-8 control-label" for="crcontact" id="crcontact">+910000000000</label>
						</div>
						<div class="form-group">							
							<label class="col-md-4 control-label viewdata" for="textinput">Email:</label>
							<label class="col-md-8 control-label" for="cremail" id="cremail">nili@gmail.com</label>
						</div>
						<div class="form-group">							
							<label class="col-md-4 control-label viewdata" for="textinput">City:</label>
							<label class="col-md-8 control-label" for="crcity" id="crcity">Bhuj</label>
						</div>
					</div>
					<div class="col-md-1"></div>
				</div>
			</div>
			<div class="modal-footer">
				<a id="reject" href="" class="btn btn-danger"> 
					Reject<i class="glyphicon"></i>
				</a>
			</div>
		</div>
	</div>
</div>	

<!--  Modal for Customer Details -->
<div class="modal fade" id="customerdetails" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title" id="myModalLabel">Customer Details</h4>
      		</div>
      		<div class="modal-body">
      			
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10 well well-sm">
						<div class="form-group">							
							<label class="col-md-4 control-label viewdata" for="textinput" >Name:</label>
							<label class="col-md-8 control-label" for="cuname" >Name</label>
						</div>
						<div class="form-group">							
							<label class="col-md-4 control-label viewdata" for="textinput">Address :</label>
							<label class="col-md-8 control-label" for="cuaddress">Address</label>
						</div>
						<div class="form-group">							
							<label class="col-md-4 control-label viewdata" for="textinput">Gender:</label>
							<label class="col-md-8 control-label" for="cugender">Male/Female</label>
						</div>
						<div class="form-group">							
							<label class="col-md-4 control-label viewdata" for="textinput">Date of Birth:</label>
							<label class="col-md-8 control-label" for="cudob">DOB</label>
						</div>
						<div class="form-group">							
							<label class="col-md-4 control-label viewdata" for="textinput">Contact:</label>
							<label class="col-md-8 control-label" for="cucontact">+910000000000</label>
						</div>
						<div class="form-group">							
							<label class="col-md-4 control-label viewdata" for="textinput">Email:</label>
							<label class="col-md-8 control-label" for="cuemail">Email</label>
						</div>
						<div class="form-group">							
							<label class="col-md-4 control-label viewdata" for="textinput">City:</label>
							<label class="col-md-8 control-label" for="cucity">Bhuj</label>
						</div>
					</div>
					<div class="col-md-1"></div>
				</div>
			</div>
			<div class="modal-footer">
				<a id="reject" href="" class="btn btn-danger"> 
					Reject<i class="glyphicon"></i>
				</a>
			</div>
		</div>
	</div>
</div>	












