<!-- Outstanding Consignments List -->
<div class="row">
	<div class="col-md-12">
		<?php echo $outcon;?>
		<!-- <div style="overflow: scroll; height: 300px;">
			<div class="list-group">
		  		<button data-toggle="modal" data-target="#condetails" type="button" class="list-group-item">
		  			<label class='control-label' for='textinput'>
		  			Consignment Title:</label><br>
		  			<label class='control-label' for='textinput'>From:</label>
		  			<label class='col-md-offset-3 control-label' for='textinput'>To:</label><br>
		  			<label class='control-label' for='textinput'>Customer Contact:</label><br>
		  		</button>
		  		<button type="button" class="list-group-item">
		  			<label class='control-label' for='textinput'>
		  			Consignment Title:</label><br>
		  			<label class='control-label' for='textinput'>From:</label>
		  			<label class='col-md-offset-3 control-label' for='textinput'>To:</label><br>
		  			<label class='control-label' for='textinput'>Customer Contact:</label><br>
		  		</button>
		  		<button type="button" class="list-group-item">
		  			<label class='control-label' for='textinput'>
		  			Consignment Title:</label><br>
		  			<label class='control-label' for='textinput'>From:</label>
		  			<label class='col-md-offset-3 control-label' for='textinput'>To:</label><br>
		  			<label class='control-label' for='textinput'>Customer Contact:</label><br>
				</button>
			</div>
		</div>
		<div class="help-block"> *Click to view more. </div> -->
	</div>
</div>
<!-- Outstanding Consignments List -->
<!-- Modal for Details -->
<div class="modal fade" id="condetails" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title" id="myModalLabel">Consignment Details</h4>
      		</div>
      		<div class="modal-body">
      			<div class="row">
      				<div class="col-md-1"></div>
      				<div class="col-md-8">
					<Strong><h4><b> Details Of Your Consignment </b></h4></Strong>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon">
									<i class="glyphicon glyphicon-user"></i>
								</span>
								<input class="form-control" type="text" placeholder="ID" name="id" disabled> <br>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon">
									<i class="glyphicon glyphicon-sort-by-alphabet"></i>
								</span>
								<input type="text" class="form-control" placeholder="Title" name="title" disabled><br>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon">
									<i class="glyphicon glyphicon-sort-by-alphabet"></i>
								</span>
								<textarea class="form-control" placeholder="Description" type="text" name="desc" rows="3" disabled></textarea><br>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon">
									<i class="glyphicon"> From </i>
								</span>
								<input class="form-control" placeholder="" type="text" name="from" disabled ><br>
								<span class="input-group-addon">
									<i class="glyphicon"> To </i>
								</span>
								<input class="form-control" placeholder="" type="text" name="to"  disabled><br>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="label label-warning">Date Of Post : DD-MM-YYYY</div><br>
								
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<Strong><h4><center>Picture</center></h4></Strong>
						<div href="#" class="thumbnail">
							<img src="<?php echo base_url("img/defaultperson.gif"); ?>" alt="...">
  						</div>
					</div>	
      			</div>
      			<div class="col-md-1"></div>
      		</div>
      		<div class="row">
      		<div class="col-md-1"></div>
      		<div class="col-md-7">
  				<div href="#" class="thumbnail">
  					<div class = "caption">
         				<div class="pic_caption">Map</div>
         			</div>
  				  <img src="<?php echo base_url("img/defaultperson.gif"); ?>" alt="...">
  				    
  				</div>
  			</div>
  			<div class="col-md-3">
  				<div class="form-group">
					<div class="input-group">
						<div class="label label-warning">Details</div>
						
					</div>
				</div>
  			</div>
  			<div class="col-md-1"></div>
  			</div>
      		</div>
      	</div>
    </div>
</div>  
<!-- Modal for Details -->

