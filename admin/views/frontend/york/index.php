<div class="page-content-wrapper">
	<div class="page-content">
		<!-- BEGIN PAGE HEADER-->
		<h3 class="page-title">
		 York Rite
		</h3>
		<div class="page-bar">
			 <?php echo set_breadcrumb(); ?>
		</div>
		<div class="blue-mat"></div>
		<!-- END PAGE HEADER-->
		<!-- BEGIN PAGE CONTENT-->
		<?php display_flashmsg($this->session->flashdata()); ?>
		<?=$grid;?>
	</div>
</div>