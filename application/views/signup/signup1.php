<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<link href=<?php echo base_url("css/bootstrap.min.css")?> rel="stylesheet">
	<link href=<?php echo base_url("css/default.css")?> rel="stylesheet">
	
</head>
<body>
	<!-- signup1 Form -->
<div class="container-fluid top-margin">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form method="post" action="" class="form-horizontal">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong><h2> I am a... </h2></strong>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
								<div class="btn-group btn-group-justified" role="group" aria-label="...">
								  <div class="btn-group" role="group">
								    <a href="<?php echo base_url('index.php/auth/signup/2/2') ?>" type="button" name="customer" class="btn btn-default btn-lg">Customer</a>
								  </div>
								  <div class="btn-group" role="group">
								    <a href="<?php echo base_url('index.php/auth/signup/2/1') ?>" name="carrier" type="button" class="btn btn-default btn-lg">Carrier</a>
								  </div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- signup1 Form End -->
</body>
</html>