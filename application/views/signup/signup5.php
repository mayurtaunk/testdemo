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
	<!-- signup5 Form Start -->
<div class="container-fluid top-margin">
	<div lass="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form method="post" action="" class="form-horizontal">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong> I Have To Verify You... </strong>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-5">
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-info-sign"></i>
										</span>
										<input class="form-control" placeholder="Proof" type="proof" id="proof" name="proof" autofocus>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-lock"></i>
										</span>
										<input class="form-control" placeholder="OTP" type="otp" id="otp" name="otp"> 
									</div>
								</div>
							</div>
							<div class="col-md-5">

							</div>
							<div class="col-md-1"></div>
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-11">
									<a class="btn btn-primary pull-right"> Take Me To Panel </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>
	<!-- signup5 Form End -->
</body>
</html>