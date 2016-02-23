<!DOCTYPE html>
<html lang="en">
<head>
	<link href=<?php echo base_url("css/bootstrap.min.css")?> rel="stylesheet">
	<style type="text/css">	
		.top-margin
		{
			margin-top: 200px;
		}
	</style>
</head>
<body>
	<!-- Signup2 Form -->
<div class="container-fluid top-margin">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form method="post" action="<?php echo base_url('index.php/auth/signup/3/0');?>" class="form-horizontal">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong> Details </strong>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-1 "></div>
							<div class="col-md-10 ">
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-envelope"></i>
										</span>
										<input class="form-control" placeholder="Email" type="email" value="<?php echo set_value('email'); ?>" name="email" autofocus>
									</div>
									<p class="help-block"><?php echo form_error('email'); ?></p>
								</div>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-lock"></i>
										</span>
										<input class="form-control" placeholder="Password" type="password"  name="password">
									</div>
									<p class="help-block"><?php echo form_error('password'); ?></p>
								</div>
							</div>
							<div class="col-md-1"></div>
						</div>
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-5">
								
							</div>
							<div class="col-md-5">
								<button  class="btn pull-right btn-info" type="submit">
									Continue <i class="glyphicon glyphicon-arrow-right">  </i>
								</button>
							</div>
							<div class="col-md-1"></div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- signup2 Form End -->
</body>
</html>