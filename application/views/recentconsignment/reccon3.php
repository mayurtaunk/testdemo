<!-- Recent Consignment Page3 Starts -->
<div class="modal fade" id="sellerdetails" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Seller Information</h4>
      </div>
      <div class="modal-body">
        <div class="row">

        	<div class="col-md-12">
        		<form class="form-horizontal">
				<div class='form-group'>
				    <label class='control-label col-md-4' for='textinput' style="text-align:right;">Seller's Name:</label>
				    <div class='col-md-8'>
				    	<input type='text'  name='sname' id='sname' placeholder='Name' class='form-control' disabled>
				    </div>
				</div>
				<div class='form-group'>
				    <label class='col-md-4 control-label' for='textinput' style="text-align:right;">Address:</label>
				    <div class='col-md-8'>
				    	<textarea type='text'  name='address' id='saddress' placeholder='Address' class='form-control' row="3" disabled></textarea>
				    </div>
				</div>
				<div class='form-group'>
				    <label class='col-md-4 control-label' for='textinput' style="text-align:right;">Contact No:</label>
				    <div class='col-md-8'>
				    	<input type='number'  name='scontact' id='scontact' placeholder='Contact No' class='form-control' disabled>
				    </div>
				</div>
				</form>
			</div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Approve & Continue</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="row">
	<div class="col-md-12">
		<form class="form-horizontal" action="" method="post">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<Strong><h4><b> Bids for Your Consignments </b></h4></Strong>
					<div class="panel panel-default">
  						<div class="panel-heading"></div>
  						<div class="panel-body">
  							<div class="row">
  								<div class="col-md-1"></div>
								<div class="col-md-8">
									<label class="control-label">Consignment ID</label>
									<input class="form-control" placeholder="Id" type="text" name="title" value="<?php echo $id;?>" disabled ><br>
									<label class="control-label">Consignment Title</label>
									<input class="form-control" placeholder="Title" type="text" name="title" value="<?php echo $show['title'];?>" disabled ><br>
								</div>
								<div class="col-md-2">
									<div class="form-group" >
										<div class="thumbnail">
											<img src="<?php echo base_url($show['image']); ?>">
											
										</div>
  									</div>
								</div>
								<div class="col-md-1"></div>
							</div>
  						</div>
  						<?php echo $showdata; ?>
					</div>
				</div>
			</div>
		</form>
	</div>
</div> <!-- row -->
<!-- Recent Consignment Page3 Ends -->
