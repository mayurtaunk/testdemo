<!DOCTYPE html>
<html lang="en">
<head>
	<link href=<?php echo base_url("css/bootstrap.min.css")?> rel="stylesheet">
	<link href=<?php echo base_url("css/dp.css")?> rel="stylesheet">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<style type="text/css">	
		.top-margin
		{
			margin-top: 100px;
		}
	</style>
</head>
<body>
	<!-- Signup2 Form -->
<div class="container-fluid top-margin">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form method="post" action="<?php echo base_url('index.php/auth/signup/4/0');?>" class="form-horizontal">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong> Let Me Know you... </strong>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-1 "></div>
							<div class="col-md-10 ">
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-user"></i>
										</span>
										<input class="form-control" placeholder="Name" type="text" name="name" autofocus>
									</div>
									<p class="help-block"><?php echo form_error('name'); ?></p>
								</div>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-map-marker"></i>
										</span>
										<textarea class="form-control input" placeholder="Address" rows="3" type="textarea" name="address"></textarea>
									</div>
									<p class="help-block"><?php echo form_error('address'); ?></p>
								</div>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-earphone"></i>
										</span>
										<input class="form-control input" placeholder="Contact" type="number" name="contact">
									</div>
									<p class="help-block"><?php echo form_error('contact'); ?></p>
								</div>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-home"></i>
										</span>
										<input class="form-control input" placeholder="City" type="text" name="city">
									</div>
									<p class="help-block"><?php echo form_error('city'); ?></p>
								</div>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-calendar"></i>
										</span>
										<input class="form-control input datepicker" placeholder="Date Of Birth" id="dob" type="text" name="dob">
									</div>
									<p class="help-block"><?php echo form_error('dob'); ?></p>
								</div>							
							</div>
							<div class="col-md-1"></div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-1"></div>
								<label class="col-md-2 control-label" for="gender"> Gender </label>
								<div class="col-md-9">
									<div class="radio">
										<label for"gender-0">
											<input type="radio" name="gender" id="gender-0" value="0" checked="checked"> Female
										</label>
										<label for"gender-1">
											<input type="radio" name="gender" id="gender-1" value="1" > Male
										</label>
									</div>
								</div>
								<p class="help-block"><?php echo form_error('gender'); ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<button type="submit" class="btn btn-primary pull-right" > Register </button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- signup2 Form End -->

<script src=<?php echo base_url("js/jq.js")?>></script>
<script src=<?php echo base_url("js/bootstrap.min.js")?>></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
	$(function() {
 		$( "#dob" ).datepicker({ maxDate: new Date() });
	});
</script>
<!-- <script src=<?php //echo base_url("js/bootstrap-datepicker.js")?>></script>
<script type="text/javascript">

	$('.datepicker').datepicker({
		format:'dd/mm/yyyy',
		endDate : Date(),
		keyboardNavigation : true
	});

</script> -->
</body>
</html>