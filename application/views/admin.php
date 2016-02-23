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
	</style>
</head>
<body>
<!-- Admin Form Start -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-inverse fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="">
							<img src=""></img>
						</a>
						<div class="navbar-brand"><b> Admin Panel </b></div>
					</div>
					<form class="navbar-form navbar-right pull-right" role="logout">
						<a href="<?php echo base_url('index.php/auth'); ?>" class="glyphicon glyphicon-log-out navbar-brand"> Logout</a>
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
							<a href="<?php echo base_url('index.php/admin/index'); ?>" class="list-group-item"><b>Dashboard</b></a>
							<a href="<?php echo base_url('index.php/admin/approvecarrier'); ?>" class="list-group-item"><b>Approve Carrier</b></a>
							<a href="<?php echo base_url('index.php/admin/deactpro'); ?>" class="list-group-item"><b>Deactivate Profile</b></a>
							<a href="<?php echo base_url('index.php/admin/outconsignment'); ?>" class="list-group-item"><b>Outstanding Consignments</b></a>
							<a class="list-group-item"><b><s>View Carriers (Report)</s></b></a>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<!-- ///<M>Changed to 9  -->
		<div class="col-md-9">
			<div class="panel panel-default">
				<div class="panel-heading">
					<strong> <?php echo $panel_title; ?> </strong>
				</div>
				<div class="panel-body">
					<?php
						if(isset($page))
						{
							$this->load->view($page);
						} 
					?>
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- Admin Form End -->
<script src=<?php echo base_url("js/jq.js")?>></script>
<script src=<?php echo base_url("js/bootstrap.min.js")?>></script>
<!-- <M> -->
<script type="text/javascript">
    var baseurl= <?php echo base_url()?>;
    $(document).ready(function() {
    	$(document).delegate("#cu","click",function(e){
    		e.preventDefault();
    		jQuery.ajax({
        	  url : baseurl + "index.php/admin/fetchcustomerdata",
        	  type:"POST",
        	  dataType:"text",
        	  data : {id:$(this).data('id')},
        	  async:false,
        	  success:function(data){
        	  	console.log(data);
        	  	data = JSON.parse(data);
        	  	var gen =(data["gender"])?"Male":"Female";
        	  	$("label[for='cuname']").html(data["name"]);
        	  	$("label[for='cuaddress']").html(data["address"]);
        	  	$("label[for='cucontact']").html(data["contact"]);
        	  	$("label[for='cudob']").html(data["dob"]);
        	  	$("label[for='cugender']").html(gen);
        	  	$("label[for='cucity']").html(data["city"]);
        	  	$("label[for='cuemail']").html(data["email"]);
        	  	$('#customerdetails').modal('show'); 
        	  }
        	});
    	});	
    	$(document).delegate("#cr","click",function(e){
        	e.preventDefault();
			var id=$(this).data('id');

    		jQuery.ajax({
    			url : baseurl + "index.php/admin/fetchcarrierdata",
    			type : "POST",
    			dataType : "text",
    			data : {id:$(this).data('id')},
    			async : false,
    			success:function(data){
    				console.log(data);

    				data = JSON.parse(data);
    				var href= baseurl + "index.php/admin/deactuser/" + id;
    				console.log(href);
    				var gen =(data["gender"])?"Male":"Female";
        	  		$("label[for='crname']").html(data["name"]);
        	  		$("label[for='craddress']").html(data["address"]);
        	  		$("label[for='crcontact']").html(data["contact"]);
        	  		$("label[for='crdob']").html(data["dob"]);
        	  		$("label[for='crgender']").html(gen);
        	  		$("label[for='crcity']").html(data["city"]);
        	  		$("label[for='cremail']").html(data["email"]);
        	  		$('#reject').attr('href',href);
        	  		$('#carrierdetails').modal('show'); 
    			}
    		});
    	});
<<<<<<< HEAD
		$(document).delegate("#approvecarrier","click",function(e){
			e.preventDefault();
			var id= $(this).data('id');
			console.log(id);
			jQuery.ajax({
				url : baseurl + "index.php/admin/carrierdetail",
				type : "POST",
				dataType : "text",
				data : {id:$(this).data('id')},
				async : false,
				success:function(data){
					data = JSON.parse(data);
					console.log(data);
					var hrefr = baseurl + "index.php/admin/rejectuser/" + id;
					var hrefa = baseurl + "index.php/admin/acceptuser/" + id;
					var image = baseurl + data['id_proof'];
					var gen =(data["gender"])?"Male":"Female";
					$("label[for='name']").html(data['name']);
					$("label[for='address']").html(data['address']);
					$("label[for='gender']").html(gen);
					//$("label[for='gender']").html(data['gender']);
					$("label[for='dob']").html(data['dob']);
					$("label[for='contact']").html(data['contact']);
					$("label[for='email']").html(data['email']);
					$("label[for='city']").html(data['city']);
					$('#image').attr('src',image);
					$('#reject').attr('href',hrefr);
					$('#accept').attr('href',hrefa);
					$('#carrierdetails').modal('show');
				}
			});
=======
		$(document).delegate("#sbtn","click",function(e){
			 jQuery.ajax({
    			url : baseurl + "index.php/admin/getCustomer",
    			type : "POST",
    			dataType : "text",
    			data : {name:$("#scust").val()},
    			async : false,
    			success:function(data){
    				$("#dCustomerData").html(data);
    			}
    		});
		});
		$(document).delegate("#sbtncl","click",function(e){
			 jQuery.ajax({
    			url : baseurl + "index.php/admin/getCarrier",
    			type : "POST",
    			dataType : "text",
    			data : {name:$("#scar").val()},
    			async : false,
    			success:function(data){
    				$("#dcarrierdata").html(data);
    				console.log(data);
    			}
    		});
>>>>>>> 322523a1fbf3c9794ac572d9772146390ff8314b
		});
    });
</script>
</body>
</html> 
	
