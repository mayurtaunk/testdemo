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
			<form method="post" action="<?php echo base_url('index.php/auth/signup/6/0');?>" class="form-horizontal" enctype="multipart/form-data">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong> I Have To Verify You... </strong>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-5">
								<div class="form-group">
									<div href="#" class="thumbnail">
  										<img id="imppr" src="<?php echo base_url("img/defaultperson.gif"); ?>" alt="...">
  									</div>
									<input id="uploadFile" type="file" name="userfile" value="Choose Image" class="img" />
  									<p class="help-block"><?php echo form_error('userfile'); ?></p>
								</div>
								<!-- <div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-info-sign"></i>
										</span>
										<input class="form-control" placeholder="Proof" type="proof" id="proof" name="image" autofocus>
									</div>
								</div> -->
							</div>
							<div class="col-md-5">

							</div>
							<div class="col-md-1"></div>
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-11">
									<button type="submit" class="btn btn-primary pull-right"> Take Me To Panel </button>
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
<script src=<?php echo base_url("js/jq.js")?>></script>
<script src=<?php echo base_url("js/bootstrap.min.js")?>></script>
<script type="text/javascript">
    var baseurl= <?php echo base_url()?>;
    $(document).ready(function() {
	    	$("#uploadFile").change(function (){     
        	var file = this.files[0];
        	var reader = new FileReader();
        	reader.onload = function (e) {
        		$('#imppr').attr("src",e.target.result);
        	}        
        	reader.readAsDataURL(file);
    	});     
    });
    
</script>
</body>
</html>