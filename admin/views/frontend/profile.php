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
		
			<?php display_flashmsg($this->session->flashdata()); ?>	
             <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#home">Profile</a></li>
              <li><a data-toggle="tab" href="#menu1">York Site</a></li>
              <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
            </ul>
            
            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <h3>HOME</h3>
                <p>Some content.</p>
              </div>
              <div id="menu1" class="tab-pane fade">
                 <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#chapter">Chapter</a></li>
                  <li><a data-toggle="tab" href="#council">Council</a></li>
                  <li><a data-toggle="tab" href="#commandery">Commandery</a></li>
                </ul>
              </div>
              <div id="menu2" class="tab-pane fade">
               
              </div>
            </div>		
			<div class="tab-content">
                 <div id="chapter" class="tab-pane fade">
                   <?php $this->load->view('frontend/yorksite/chapter'); ?>
                 </div>
                 <div id="council" class="tab-pane fade">
                    <?php $this->load->view('frontend/yorksite/council'); ?>
                 </div>
                 <div id="commandery" class="tab-pane fade">
                  <?php $this->load->view('frontend/yorksite/commandery'); ?>
                 </div>
            </div>
		</div>
	</div>	
