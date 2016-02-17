<div class="row">
	<div class="col-md-12">
		<form class="form-horizontal" action="<?php echo base_url('index.php\customer\newconsignment\4'); ?>" method="POST" enctype="multipart/form-data"
>
			<div class="row">
				<div class="col-md-12">
					<h4 style="margin:20px;"><span class="label label-default">Step 3</span><b> Can I See The Consignment </b></h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-2">
					<div class="form-group">
						<div href="#" class="thumbnail">
  							<img id="imppr" src="<?php echo base_url("img/defaultperson.gif"); ?>" alt="...">
  						</div>
						<input id="uploadFile" type="file" name="userfile" value="Choose Image" class="img" />
  						<p class="help-block"><?php echo form_error('userfile'); ?></p>
					</div>
				</div>
				<div class="col-md-7 col-md-offset-1" style="margin-top:10px;">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="glyphicon glyphicon-resize-horizontal"></i>
							</span>
							<input type="number" class="form-control" name="width" placeholder="Width">
						</div>
						<p class="help-block"><?php echo form_error('width'); ?></p>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="glyphicon glyphicon-resize-vertical"></i>
							</span>
							<input type="number" class="form-control" name="height" placeholder="Height">
						</div>
						<p class="help-block"><?php echo form_error('height'); ?></p>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="glyphicon glyphicon-sort-by-alphabet-alt"></i>
							</span>
							<input type="number" class="form-control" name="weight" placeholder="Weight">
						</div>
						<p class="help-block"><?php echo form_error('weight'); ?></p>
					</div>
				</div>
				<div class="col-md-1"></div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<button type="submit" class="btn btn-info pull-right">
					<i class="glyphicon glyphicon-arrow-right"></i></button>
				</div>
			</div>
		</form>
	</div>
</div> <!-- row -->
