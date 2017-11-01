<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			 Dashboard
			</h3>
			<div class="page-bar">
				 <?php echo set_breadcrumb(); ?>
			</div>
			<div class="blue-mat"></div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<?php display_flashmsg($this->session->flashdata()); ?>
			<div class="row dashboard-content">
				<h2>Let's get Started!</h2><br><br>
				<div class="row">
					<div class="col-md-5">&nbsp;</div>
					<div class="col-md-2 btn btn-primary">
						<a href="<?=site_url('personal_info');?>"><i class="fa fa-user"></i> My Information
					</div>
				</div>
				<div class="clearfix"></div><br>
				<div class="row">
					<div class="col-md-5"></div>
					<div class="col-md-2 btn btn-primary"><i class="fa fa-users"></i> York Rite **</div>
				</div>
				<div class="clearfix"></div><br>
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-2 btn btn-primary"><i class="fa fa-users"></i> Scottish Rite **</div>
					<div class="col-md-1">&nbsp;</div>
					<div class="col-md-2 btn btn-primary"><i class="fa fa-users"></i> Shriners **</div>
				</div>
				<div class="clearfix"></div><br>
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-2 btn btn-primary"><i class="fa fa-users"></i> Grotto **</div>
					<div class="col-md-1">&nbsp;</div>
					<div class="col-md-2 btn btn-primary"><i class="fa fa-users"></i> Eastern Star **</div>
				</div>
			</div>
			<!-- END PAGE CONTENT -->
		</div>
	</div>	
