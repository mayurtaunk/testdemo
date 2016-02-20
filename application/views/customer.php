<!DOCTYPE html>
<html lang="en">
<head>
	<link href="<?php echo base_url("css/bootstrap.min.css")?>" rel="stylesheet">
	<link href="<?php echo base_url("css/default.css")?>" rel="stylesheet">
	<link href="<?php echo base_url("css/city-autocomplete.css")?>" rel="stylesheet">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<?php 
	if(isset($map['js']))
	{
		 echo $map['js']; 
	}
	?>
</head>
<body>
<!-- customer Form Start -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-inverse fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="">
							<img src=""></img>
						</a>
						<p class="navbar-brand"><b> Username </b></p>
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
			<div class="row">
			<div class="col-md-12">
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
							<!-- value of argument that is 1 for page1 -->
							<a href="<?php echo base_url('index.php/customer/index'); ?>" class="list-group-item"><b>Dashboard</b></a>
							<a href="<?php echo base_url('index.php/customer/newconsignment/1'); ?>" class="list-group-item"><b>New Consignment</b></a>
							<a href="<?php echo base_url('index.php/customer/recentconsignment/1/0'); ?>" class="list-group-item"><b>Recent Consignment</b></a>
							<a href="<?php echo base_url('index.php/customer/editprofile'); ?>" class="list-group-item"><b>Edit Profile</b></a>
						</div>
					</div>
				</div>
			</div>
			</div>
			</div>
			<?php if(isset($ismap)){ ?>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default backimage">
						<div class="panel-heading">
						<!-- <M>Varaible to assign new title on page load -->
							<strong>Map </strong>
						</div>
						<div class="panel-body">
						<div style="border: solid; border-color: rgba(30,20,40,0.5);">
							<label>Distance : <?php echo $dist ?></label>
							<?php echo $map['html']; ?>
						</div>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
		<div class="col-md-9">
				<div class="panel panel-default backimage">
					<div class="panel-heading">
						<!-- <M>Varaible to assign new title on page load -->
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
</div>
<script src=<?php echo base_url("js/jq.js")?>></script>
<script src=<?php echo base_url("js/bootstrap.min.js")?>></script>
<script src=<?php echo base_url("js/jquery.city-autocomplete.js")?>></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&language=en"></script>
<script>
$('input#scity').cityAutocomplete();
$('input#dcity').cityAutocomplete();
</script>
<script type="text/javascript">
    var baseurl= <?php echo base_url()?>;
    $(document).ready(function() {
    	$(document).delegate("#view","click",function(e){
    		e.preventDefault();
    		jQuery.ajax({
        	  url : baseurl + "index.php/customer/info",
        	  type:"POST",
        	  dataType:"text",
        	  data : {id:$(this).data('id')},
        	  async:false,
        	  success:function(data){
        	  	
        	  	data = JSON.parse(data);
        	  	console.log(data);
        	  	console.log(data["name"]);
        	  	$("#sname").val(data["name"]);
        	  	$("#saddress").val(data["address"]);
        	  	$("#scontact").val(data["contact"]);
        	  	$('#sellerdetails').modal('show'); 
        	  }
        	});
    	});
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
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
	$(function() {
 		$( "#expdate" ).datepicker(
		{
			minDate: new Date()
		});
		$( "#cusdob" ).datepicker(
		{
			maxDate: new Date()
		});
	});
</script>

</body>
</html> 
	
