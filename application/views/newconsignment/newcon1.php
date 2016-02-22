<!-- New Consignment Page1 Starts -->
<div class="row">
	<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<h4 style="margin:20px;"><span class="label label-default">Step 1</span><b> Let's Deliver Your Consignment <b></h4>	
				</div>
			</div>
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<!-- <Strong><h3><b><span class="label label-default">Step 1</span> </b></h3></Strong> -->
					<form class="form-horizontal" action="<?php echo base_url('index.php/customer/newconsignment/2')?>" method="post">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="glyphicon glyphicon-home"></i>
							</span>
						
							<input id="scity" class="form-control" type="text" autocomplete="off" placeholder="Source City" name="scity" data-country="in" value="<?php echo set_value('scity');?>"> <br>
						</div>
						<p class="help-block"><?php echo form_error('scity'); ?></p>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="glyphicon glyphicon-home"></i>
							</span>
							<input id="dcity" class="form-control" autocomplete="off" type="text" placeholder="Destination City" name="dcity" data-country="in" value="<?php echo set_value('dcity');?>"> <br>
						</div>
						<p class="help-block"><?php echo form_error('dcity'); ?></p>
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
<!-- Recent Consignment Page3 Ends -->
