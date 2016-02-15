<!DOCTYPE html>
<html lang="en">
<head>
	<link href=<?php echo base_url("css/bootstrap.css")?> rel="stylesheet">
	<link href=<?php echo base_url("css/default.css")?> rel="stylesheet">
	<style type="text/css">
		body
		{
			margin: 20px;
		}
		.sbs
		{
			height: 50px;
		}
		.imagePreview 
		{
		    width: 180px;
		    height: 180px;
		    background-position: center center;
		    background-size: cover;
		    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
		    display: inline-block;
		}
	</style>
</head>
<body>
	<!-- Recent Consignment Page3 Starts -->
<div class="container-fluid" style="overflow: scroll; height: 400px;">
	<div class="row">
		<div class="col-md-12">
			<form class="form-horizontal" action="" method="post">
				<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<Strong><h4><b> Bids for Your Consignments </b></h4></Strong>
					<div class="row well">
						<div class="col-md-8">
							<input class="form-control" placeholder="Id" type="text" name="title" ><br>
							<input class="form-control" placeholder="Title" type="text" name="title" ><br>
						</div>
						<div class="col-md-4">
							<div class="form-group" >
							<div class="imagePreview"></div>
  							</div>
						</div>
					</div>
					<div style="overflow: scroll; height: 300px;" class="well">
					<ul class="list-group">
					  <li class="list-group-item sbs">Bid 1
					  <a class="btn btn-default btn-sm pull-right"> View </a></li>
					  <li class="list-group-item sbs">Bid 2
					  <a class="btn btn-default btn-sm pull-right"> View </a></li>
					  <li class="list-group-item sbs" >Bid 3
					  <a class="btn btn-default btn-sm pull-right"> View </a></li>
					  <li class="list-group-item sbs">Bid 4
					  <a class="btn btn-default btn-sm pull-right"> View </a></li>
					  <li class="list-group-item sbs">Bid 5
					  <a class="btn btn-default btn-sm pull-right"> View </a></li>
					  <li class="list-group-item sbs">Bid 6
					  <a class="btn btn-default btn-sm pull-right"> View </a></li>					 
					  <li class="list-group-item sbs">Bid 7
					  <a class="btn btn-default btn-sm pull-right"> View </a></li>
					</ul>
					</div>
					<div class="row well">
						<div class='form-group'>
						    <label class='col-md-4 control-label' for='textinput'>Seller's Name:</label>
						    <div class='col-md-8'>
						    	<input type='text'  name='sname' id='sname' placeholder='Name' class='form-control'>
						    </div>
						</div>
						<div class='form-group'>
						    <label class='col-md-4 control-label' for='textinput'>Address:</label>
						    <div class='col-md-8'>
						    	<input type='text'  name='address' id='address' placeholder='Address' class='form-control'>
						    </div>
						</div>
						<div class='form-group'>
						    <label class='col-md-4 control-label' for='textinput'>Contact No.:</label>
						    <div class='col-md-8'>
						    	<input type='number'  name='scontact' id='scontact' placeholder='Address' class='form-control'>
						    </div>
						</div>
					</div>
					</div> 
				</div>
				<div class="col-md-1"></div>
				<a href="<?php echo base_url('index.php/customer/recentconsignment/4');?>" class="btn btn-success"> Next Page </a>
			</form>
		</div>
	</div> <!-- row -->
</div> <!-- Container Fluid -->
	<!-- Recent Consignment Page1 Ends -->
</body>
</html>
