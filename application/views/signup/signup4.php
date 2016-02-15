<!DOCTYPE html>
<html lang="en">
<head>
	<link href=<?php echo base_url("css/bootstrap.min.css")?> rel="stylesheet">
	<link href=<?php echo base_url("css/dp.css")?> rel="stylesheet">
	<style type="text/css">	
		.top-margin
		{
			margin-top: 200px;
		}
	</style>
</head>
<body>
	<!-- signup4 Form Start -->
<div class="container-fluid top-margin">
	<div lass="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form method="post" action="<?php echo base_url('index.php/auth/signup/5/0');?>" class="form-horizontal">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong> Wait!! Lets Secure Your Account... </strong>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-10">
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-question-sign"></i>
										</span>
										<input class="form-control" placeholder="Question ex. My First Car." type="text" name="question" autofocus>
									</div>
									<p class="help-block"><?php echo form_error('question'); ?></p>
								</div>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-font"></i>
										</span>
										<input class="form-control" placeholder="Answer" type="text" id="answer" name="answer"> 
									</div>
									<p class="help-block"><?php echo form_error('answer'); ?></p>
								</div>
							</div>
							<div class="col-md-1"></div>
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-11">
									<button type="submit" class="btn btn-primary pull-right"> Secure It </button>
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
<script src=<?php echo base_url("js/jq.js")?>></script>
<script src=<?php echo base_url("js/bootstrap.min.js")?>></script>
<script src=<?php echo base_url("js/bootstrap-datepicker.js")?>></script>
	<!-- signup4 Form End -->
</body>
</html>