<!DOCTYPE html>
<html lang="en">
<head>
	<link href="<?php echo base_url("css/bootstrap.min.css")?>" rel="stylesheet">
	<style type="text/css">	
		.login-margin
		{
			margin-top: 200px;
		}
	</style>
</head>
<body>
<!-- Login Form -->
<div class="container-fluid login-margin">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form method="post" action="<?php echo base_url('index.php/auth/validateuser'); ?>" class="form-horizontal">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong> Get Access </strong>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-1 "></div>
							<div class="col-md-10 ">
								<?php 
								

									if(isset($errormsg))
									{
										echo $errormsg;
									}
								?>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-user"></i>
										</span>
										<input class="form-control" placeholder="Username" type="text"  name="username" autofocus>
									</div>
									<p class="help-block"><?php echo form_error('username'); ?></p>
								</div>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-lock"></i>
										</span>
										<input class="form-control" placeholder="Password" type="password" name="pass" >
									</div>
									<p class="help-block"><?php echo form_error('pass'); ?></p>
								</div>
							</div>
							<div class="col-md-1"></div>
						</div>
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-5">
								<a href="<?php echo base_url('index.php/auth/signup/1/0') ?>"> Sign Up </a>
							</div>
							<div class="col-md-5">
								<button type="submit" name="login" class="btn btn-default pull-right"> Login 
									<i class="glyphicon glyphicon-log-in"></i>
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

<!-- Login Form End -->

</body>
</html>