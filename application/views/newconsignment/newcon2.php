
	<div class="row">
		<div class="col-md-12">
			<form class="form-horizontal" action="<?php echo base_url('index.php\customer\newconsignment\3'); ?>" method="post">
				<div class="row">
					<div class="col-md-12">
						<h4 style="margin:20px;"><span class="label label-default">Step 2</span><b> I Would Like to Know More </b></h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10">
						<!-- <Strong><h4><b> </b></h4></Strong> -->
						<Strong> Your Pick Up Address </Strong>

						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon">
									<i class="glyphicon glyphicon-map-marker"></i>
								</span>
								<textarea class="form-control" placeholder="Address" name="saddress" rows="3"></textarea><br>
							</div>
							<p class="help-block"><?php echo form_error('saddress'); ?></p>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon">
									<i class="glyphicon glyphicon-envelope"></i>
								</span>
								<input class="form-control" type="number" placeholder="Pin Code" name="spincode"> <br>
							</div>
							<p class="help-block"><?php echo form_error('spincode'); ?></p>
						</div>
						<br> <Strong> Your Delivery Address </Strong>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon">
									<i class="glyphicon glyphicon-map-marker"></i>
								</span>
								<textarea class="form-control" placeholder="Address" name="daddress" rows="3"></textarea><br>
							</div>
							<p class="help-block"><?php echo form_error('daddress'); ?></p>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon">
									<i class="glyphicon glyphicon-envelope"></i>
								</span>
								<input class="form-control" type="number" placeholder="Pin Code" name="dpincode"> <br>
							</div>
							<p class="help-block"><?php echo form_error('dpincode'); ?></p>
						</div>

					</div>
					<div class="col-md-1"></div>
				</div>
				<div class="row">
					<div class="col-md-12">
						
						<button type="submit" class="btn btn-info pull-right">
						<i class="glyphicon glyphicon-arrow-right"></i></button>
					</div>
				</div>
			</form>
		</div>
	</div> <!-- row -->
