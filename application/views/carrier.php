<!DOCTYPE html>
<html lang="en">
<head>
	<link href=<?php echo base_url("css/bootstrap.min.css")?> rel="stylesheet">
	<link href=<?php echo base_url("css/default.css")?> rel="stylesheet">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
</head>
<body>
	<!-- Carrier Form Start -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-inverse fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="">
							<img src=""></img>
						</a>
						<p class="navbar-brand"><b>Username</b></p>
					</div>
					<form class="navbar-form navbar-right pull-right" role="logout">
						<a href="<?php echo base_url('index.php/auth'); ?>" class="glyphicon glyphicon-log-out navbar-brand"> Logout </a>
					</form>
				</div>
			</nav>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<div class="panel-group">
				<div class="panel panel-default">
					<div class="panel-heading">
						<!-- <strong> Navigations </strong> -->
						<h4 class="panel-title">
                  		<a data-toggle="" data-parent="" href="" class="list-group-item">
                  		<span class="glyphicon glyphicon-folder-close"></span> Controls </a>
                	</h4>
					</div>
					<div id="collapseOne" class="panel-collapse">
						<div class="list-group">
							<a href="<?php echo base_url('index.php/carrier/index'); ?>" class="list-group-item"><b>Dashboard</b></a>
							<a href="<?php echo base_url('index.php/carrier/openconsignments/'); ?>" class="list-group-item"><b>View Open Consignments</b></a>
							<a href="<?php echo base_url('index.php/carrier/recentconsignments/1'); ?>" class="list-group-item"><b>Recent Consignments</b></a>
							<a href="<?php echo base_url('index.php/carrier/editprofile'); ?>" class="list-group-item" ><b>Edit Profile</b></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-9">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong> <?php echo $panel_title; ?> </strong>
					</div>
					<div class="panel-body">
						<?php
							if(isset($page))
							{
								$this->load->View($page);
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Carrier Form Ends -->
<script src=<?php echo base_url("js/jq.js")?>></script>
<script src=<?php echo base_url("js/bootstrap.min.js")?>></script>
<script type="text/javascript">
    var baseurl= <?php echo base_url()?>;
    $(document).ready(function() {
    	$(document).delegate("#con","click",function(e){
    		e.preventDefault();
    		jQuery.ajax({
        	  url : baseurl + "index.php/carrier/fetchconsignmentdata",
        	  type:"POST",
        	  dataType:"text",
        	  data : {id:$(this).data('id')},
        	  async:false,
        	  success:function(data){
        	  	console.log(data);
        	  	data = JSON.parse(data);
        	  	//var gen =(data["gender"])?"Male":"Female";
        	  	$("label[for='conname']").html(data["name"]);
        	  	$("label[for='confrom']").html(data["source"]);
        	  	$("label[for='condesc']").html(data["description"]);
        	  	$("label[for='conto']").html(data["destination"]);
        	  	$("label[for='cusname']").html(data["name"]);
        	  	$("label[for='cusaddress']").html(data["address"]);
        	  	$("label[for='cuscontact']").html(data["contact"]);
        	  	$('#consignmentdetails').modal('show'); 
        	  }
        	});
    	});
    });	
</script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
	$(function() {
 		$( "#deliverydate" ).datepicker(
		{
			minDate: new Date()
		});
 		$( "#cadob" ).datepicker({});
	});
</script>
</body>
</html> 
	
