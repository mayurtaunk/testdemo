<div class="row"><!-- row -->
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<?php echo $showdata; ?>
		<!-- <Strong><h4><b>Customer Approved Consignments</b></h4></Strong>
			<div style="overflow: scroll; height: 300px;" class="well">
				<div class="list-group">
				  <button type="button" class="list-group-item sbs">Consignment 1
				  <a class="btn btn-default btn-sm pull-right"> View </a></button>
				  <button type="button" class="list-group-item sbs">Consignment 2
				  <a class="btn btn-default btn-sm pull-right"> View </a></button>
				  <button type="button" class="list-group-item sbs" >Consignment 3
				  <a class="btn btn-default btn-sm pull-right"> View </a></button>
				</div>
			</div> -->
	</div>
	<div class="col-md-1"></div>
</div><!-- row -->
<!--  Modal for Carrier Details -->
<div class="modal fade" id="consignmentdetails" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title" id="myModalLabel">Consignment Details</h4>
      		</div>
      		<div class="modal-body">
      			<div class="row">
      				<div class="col-md-1"></div>
      				<div class="col-md-10 well well-sm">
      					<div class="row">
      						<div class="col-md-12">
  							  <div href="#" class="thumbnail">
  							    <img src="<?php echo base_url("img/defaultperson.gif"); ?>" alt="...">
  							    <div class = "caption">
         							<div class="pic_caption">Consignment Picture</div>
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
						<form class="form-horizontal">
						<div class="form-group">							
							<label class="col-md-4 control-label viewdata" for="textinput">Title:</label>
							<label class="col-md-8 control-label" style="text-align:left;" for="conname">Name</label>
						</div>
						<div class="form-group">							
							<label class="col-md-4 control-label viewdata" for="textinput">From :</label>
							<label class="col-md-8 control-label" style="text-align:left;" for="confrom">From</label>
						</div>
						<div class="form-group">							
							<label class="col-md-4 control-label viewdata" for="textinput">To:</label>
							<label class="col-md-8 control-label" style="text-align:left;" for="conto">To</label>
						</div>
						<div class="form-group">							
							<label class="col-md-4 control-label viewdata" for="textinput">Description:</label>
							<label class="col-md-8 control-label" style="text-align:left;" for="condesc">Description</label>
						</div>
						<div class="form-group">							
							<label class="col-md-4 control-label viewdata" for="textinput">Customer Name:</label>
							<label class="col-md-8 control-label" style="text-align:left;" for="cusname">Name</label>
						</div>
						<div class="form-group">							
							<label class="col-md-4 control-label viewdata" for="textinput">Customer Address:</label>
							<label class="col-md-8 control-label" style="text-align:left;" for="cusaddress">Address</label>
						</div>
						<div class="form-group">							
							<label class="col-md-4 control-label viewdata" for="textinput">Customer Contact:</label>
							<label class="col-md-8 control-label" style="text-align:left;" for="cuscontact">Contact</label>
						</div>
					</form>
					</div>
					<div class="col-md-1"></div>
				</div>
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>