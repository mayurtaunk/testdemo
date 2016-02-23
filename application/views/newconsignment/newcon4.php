	<div class="row">
		<div class="col-md-12">
			<h4 style="margin:20px;"><span class="label label-default">Step 4</span><b> And Then We Are Done With It </b></h4>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<form class="form-horizontal" action="<?php echo base_url('index.php/customer/newconsignment/5'); ?>" method="post">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon">
									<i class="glyphicon glyphicon-sort-by-alphabet"></i>
								</span>
								<input class="form-control" type="text" placeholder="Title Of Consignment" value="<?php echo set_value('title'); ?>" name="title"> <br>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon">
									<i class="glyphicon glyphicon-sort-by-alphabet"></i>
								</span>
								<textarea class="form-control" placeholder="Description" value="<?php echo set_value('desc'); ?>" name="desc" rows="3"></textarea><br>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon">
									<i class="glyphicon glyphicon-calendar"></i>
								</span>
								<input class="form-control" placeholder="When You Ecpect It To Be Delivered" type="text" value="<?php echo set_value('expdate'); ?>" name="expdate" id="expdate" readonly> <br>
							</div>
						</div>
						<button type="submit" class="btn btn-success pull-right">Post</button>
					</div>
					</div>
					<div>
						<?php
							if(isset($msg))
							{
					 			echo $msg; 
					 		}
					 	?>
					</div>
					<div class="col-md-1"></div>
				
			</form>
		</div>
	</div> <!-- row -->
