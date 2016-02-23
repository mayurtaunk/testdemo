<!-- Recent Consignment Page2 Starts -->
<div class="container-fluid" style="overflow: scroll; height: 400px;">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-2">
					<div class="thumbnail">
						<img src="<?php echo base_url('img/defaultperson.gif'); ?>" alt="...">
						<div class="caption">
							<div class="pic_caption">
								Consignment Picture
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8">	
					<div class="row">
					<form class="form-horizontal">
						<div class="form-group">
					    	<label class="col-md-2 control-label" for="textinput">Title: </label>
					    	<div class="col-md-10">
					    		<input type="text"  name="title" id="Title" placeholder="Title" class="form-control" value="<?php echo $show['title'];?>" disabled>
					    	</div>
						</div>
						<div class="form-group">
					    	<label class="col-md-2 control-label" for="textinput">Details: </label>
					    		<div class="col-md-10">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="glyphicon"> From </i>
									</span>
									<input class="form-control" placeholder="" type="text" 	name="from" value="<?php echo $show['from'];?>" disabled>
									<span class="input-group-addon">
										<i class="glyphicon"> To </i>
									</span>
									<input class="form-control" placeholder="" type="text" name="to" value="<?php echo $show['to'];?>" disabled>
								</div>
							</div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label" for="textinput">Delivery Date: </label>
						    <div class="col-md-10">
						    	<input type="text"  name="ddate" id="ddate" placeholder="Delivery Date" class="form-control" value="<?php echo $show['expdate'];?>" disabled>
						    </div>
						</div><hr>
						</form>
						</div>
					</div> 
					<div class="col-md-1"></div>
				</div>
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-5">
						<div class="row">
							<strong style="font-size:15pt"> Customer Details </strong><hr>
							<div class="form-group">
							    <label class="col-md-3 control-label" for="textinput">Name: </label>
							    <div class="col-md-9">
							    	<input type="text"  name="cname" id="cname" placeholder="Name" class="form-control" value="<?php echo $show['name'];?>" disabled> <br>
							    </div>
							</div> 
							<div class="form-group">
							   	<label class="col-md-3 control-label" for="textinput">Contact No.: </label> 
							    <div class="col-md-9">
							    	<input type="text"  name="contact" id="contact" placeholder="Contact Number" class="form-control" value="<?php echo $show['contact'];?>" disabled>
							    </div>
							</div>
						</div>
					</div>
					<div class="col-md-5" style="margin-top:70px;">
						<div class="form-group">
							<label class="col-md-3 control-label" for="textinput">Amount: </label> 
							<div class="col-md-9">
								<input type="text" name="amount" id="amount" value="<?php echo set_value('amount'); ?>" placeholder="Amount" class="form-control" value="<?php echo $show['amount'];?>" disabled> <br>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="textinput">Delivery Date: </label> 
							<div class="col-md-9">
								<input type="text" name="deliverydate" id="deliverydate"  value="<?php echo set_value('deliverydate'); ?>"placeholder="Delivery Date" class="form-control" value="<?php echo $show['ddate'];?>" disabled> <br>
							</div>
						</div>
						<form class="form-horizontal" action="<?php echo base_url('index.php/carrier/notdone/'.$show['id']);?>" method="post">
						<div class="form-group">
							<button type="submit" class="btn btn-info pull-right"> Mark As Not Done </button>
						</div>
					</div>
					<div class="col-md-1"></div>
				</form>
				</div>
		</div>
	</div> <!-- row -->
</div> <!-- Container Fluid -->
<!-- Recent Consignment Page2 Ends -->
