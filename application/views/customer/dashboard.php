<div class="row"><!-- row -->
	<div class="col-md-1"></div>
	<div class="col-md-10">
	<?php 
		if(isset($msg))
		{
			echo "<div class='alert alert-success' role='alert'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
			$msg
			</div>";
		} 
		
	?>
	<form class="form-horizontal" action="" method="post">
		<?php echo $showdata; ?>
		<!-- <Strong><h4><b>Bids</b></h4></Strong>
			 <div style="overflow: scroll; height: 300px;" class="well">
				<div class="list-group">
				  <button type="button" class="list-group-item sbs">Consignment 1
				  <a class="btn btn-default btn-sm pull-right"> View </a></button>
				  <button type="button" class="list-group-item sbs">Consignment 2
				  <a class="btn btn-default btn-sm pull-right"> View </a></button>
				  <button type="button" class="list-group-item sbs" >Consignment 3
				  <a class="btn btn-default btn-sm pull-right"> View </a></button>
				  <button type="button" class="list-group-item sbs">Consignment 4
				  <a class="btn btn-default btn-sm pull-right"> View </a></button>
				  <button type="button" class="list-group-item sbs">Consignment 5
				  <a class="btn btn-default btn-sm pull-right"> View </a></button>
				  <button type="button" class="list-group-item sbs">Consignment 6
				  <a class="btn btn-default btn-sm pull-right"> View </a></button>	 
				  <button type="button" class="list-group-item sbs">Consignment 7
				  <a class="btn btn-default btn-sm pull-right"> View </a></button>
				</div>
			</div>
			<div class="help-block">*Click to open.</div> -->
	</form>
	</div><!-- col -->
	<div class="col-md-1"></div>
</div><!-- row -->