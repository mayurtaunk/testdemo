<div class="row">
	<div class="col-md-12">
		<form class="form-horizontal" action="<?php echo base_url('index.php/customer/bids_for_con/'.$show['id']);?>" method="post">
			<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-6">
				<Strong><h4><b> Details Of Your Consignment </b></h4></Strong>
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="glyphicon glyphicon-user"></i>
						</span>
						<input class="form-control" type="text" placeholder="ID" name="id" value="<?php echo $show['id']; ?>" disabled><br>
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="glyphicon glyphicon-sort-by-alphabet"></i>
						</span>
						<input type="text" class="form-control" placeholder="Title" name="title" value="<?php echo $show['title']; ?>" disabled><br>
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="glyphicon glyphicon-sort-by-alphabet"></i>
						</span>
						<textarea class="form-control" placeholder="Description" type="text" name="desc" rows="3"  disabled><?php echo $show['description']; ?></textarea><br>
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="glyphicon"> From </i>
						</span>
						<input class="form-control" placeholder="" type="text" value="<?php echo $show['from']; ?>" name="from" disabled><br>
						<span class="input-group-addon">
							<i class="glyphicon"> To </i>
						</span>
						<input class="form-control" placeholder="" type="text" name="to" value="<?php echo $show['to']; ?>" disabled><br>
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<div class="label label-info"><?php echo $show['date']; ?></div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group" style="margin:40px;">
					<div href="#" class="thumbnail">
						<img src="<?php echo base_url("img/defaultperson.gif"); ?>" alt="...">
					</div>
					<button type="submit" href="<?php echo base_url('index.php/customer/recentconsignment/3/1');?>" class="btn btn-info">View Bids</button>
				</div>
			</div>
			<div class="col-md-1"></div>
		</form>
	</div>
</div> <!-- row -->
