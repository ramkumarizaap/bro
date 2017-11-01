   <form class="mt-repeater form-horizontal" name="commandery" id="commandery" method="post" enctype="multipart/form-data">
           <div class="form-body">
               <!--/row-->
              <div class="row">
                 <div class="col-md-6">
                    <div class="form-group <?php echo (form_error('comm_name'))?'has-error':'';?>">
                       <label class="control-label col-md-3">Commandery Name<span class="required">*</span></label>
                       <div class="col-md-9">
                          <input type="text" class="form-control" name="comm_name" id="comm_name" value="<?php echo set_value('comm_name',$editdata['comm_name']);?>"> 
                          <?php echo form_error('comm_name'); ?>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-group <?php echo (form_error('top_line_signer'))?'has-error':'';?>">
                       <label class="control-label col-md-3">Commandery Top Line Singer:<span class="required">*</span></label>
                       <div class="col-md-9">
                          <input type="text" class="form-control form-control-inline" name="top_line_signer" id="top_line_signer" value="<?php echo set_value('top_line_signer',$editdata['top_line_signer']);?>"> 
                          <?php echo form_error('top_line_signer'); ?>
                       </div>
                    </div>
                 </div>
              </div>
               <div class="row">
                 <div class="col-md-6">
                    <div class="form-group <?php echo (form_error('comm_no'))?'has-error':'';?>">
                       <label class="control-label col-md-3">Commandery No<span class="required">*</span></label>
                       <div class="col-md-9">
                          <input type="text" class="form-control" name="comm_no" id="comm_no" value="<?php echo set_value('comm_no',$editdata['comm_no']);?>"> 
                          <?php echo form_error('comm_no'); ?>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-group <?php //echo (form_error('second_line_signer'))?'has-error':'';?>">
                       <label class="control-label col-md-3">Second Line Singer:<span class="required">*</span></label>
                       <div class="col-md-9">
                          <input type="text" class="form-control form-control-inline" name="second_line_signer" id="second_line_signer" value="<?php echo (isset($editdata['second_line_signer']))?$editdata['second_line_signer']:""; ?>"> 
                          <?php //echo form_error('second_line_signer'); ?>
                       </div>
                    </div>
                 </div>
              </div>
               <div class="row">
                 <div class="col-md-6">
                    <div class="form-group <?php echo (form_error('district_no'))?'has-error':'';?>">
                       <label class="control-label col-md-3">District No<span class="required">*</span></label>
                       <div class="col-md-9">
                          <input type="text" class="form-control" name="district_no" id="district_no" value="<?php echo set_value('district_no',$editdata['district_no']);?>"> 
                          <?php echo form_error('district_no'); ?>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-group <?php echo (form_error('date_joined'))?'has-error':'';?>">
                       <label class="control-label col-md-3">Commandery Date Joined:<span class="required">*</span></label>
                       <div class="col-md-9">
                          <input type="text" class="form-control form-control-inline" name="date_joined" id="date_joined" value="<?php echo set_value('date_joined',$editdata['date_joined']);?>"> 
                          <?php echo form_error('date_joined'); ?>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col-md-4">
                    <div class="form-group <?php //echo (form_error('district_no'))?'has-error':'';?>">
                       <label class="control-label col-md-3">M. Emin. Priest?</label>
                       <div class="col-md-9">
                          <input type="text" class="form-control" name="master_emi_cmdr" id="master_emi_cmdr" value="<?php echo (isset($editdata['master_emi_cmdr']))?$editdata['master_emi_cmdr']:"";?>"> 
                          <?php //echo form_error('district_no'); ?>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="form-group <?php //echo (form_error('date_joined'))?'has-error':'';?>">
                       <label class="control-label col-md-3">Generalsmo?<span class="required">*</span></label>
                       <div class="col-md-9">
                          <input type="text" class="form-control form-control-inline" name="generalsmo" id="generalsmo" value="<?php echo (isset($editdata['generalsmo']))?$editdata['generalsmo']:"";?>"> 
                          <?php //echo form_error('date_joined'); ?>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="form-group <?php //echo (form_error('date_joined'))?'has-error':'';?>">
                       <label class="control-label col-md-3">Prebate?</label>
                       <div class="col-md-9">
                          <input type="text" class="form-control form-control-inline" name="prebate" id="prebate" value="<?php echo (isset($editdata['prebate']))?$editdata['prebate']:"";?>"> 
                          <?php //echo form_error('date_joined'); ?>
                       </div>
                    </div>
                 </div>
              </div> 
               <div class="row">
                 <div class="col-md-4">
                    <div class="form-group <?php //echo (form_error('district_no'))?'has-error':'';?>">
                       <label class="control-label col-md-3">Year</label>
                       <div class="col-md-9">
                          <input type="text" class="form-control" name="year1" id="year1" value="<?php echo (isset($editdata['year1']))?$editdata['year1']:"";?>"> 
                          <?php //echo form_error('district_no'); ?>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="form-group <?php //echo (form_error('date_joined'))?'has-error':'';?>">
                       <label class="control-label col-md-3">Capt. General?</label>
                       <div class="col-md-9">
                          <input type="text" class="form-control form-control-inline" name="capt_general" id="capt_general" value="<?php echo (isset($editdata['capt_general']))?$editdata['capt_general']:"";?>"> 
                          <?php //echo form_error('date_joined'); ?>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="form-group <?php //echo (form_error('date_joined'))?'has-error':'';?>">
                       <label class="control-label col-md-3">Sword Bearer?</label>
                       <div class="col-md-9">
                          <input type="text" class="form-control form-control-inline" name="sword_bearer" id="sword_bearer" value="<?php echo (isset($editdata['sword_bearer']))?$editdata['sword_bearer']:"";?>"> 
                          <?php //echo form_error('date_joined'); ?>
                       </div>
                    </div>
                 </div>
              </div>  
              <div class="row">
                 <div class="col-md-4">
                    <div class="form-group <?php //echo (form_error('district_no'))?'has-error':'';?>">
                       <label class="control-label col-md-3">Dist. Emin. Master?</label>
                       <div class="col-md-9">
                          <input type="text" class="form-control" name="district_emi_cmdr" id="district_emi_cmdr" value="<?php echo (isset($editdata['district_emi_cmdr']))?$editdata['district_emi_cmdr']:"";?>"> 
                          <?php //echo form_error('district_no'); ?>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="form-group <?php //echo (form_error('date_joined'))?'has-error':'';?>">
                       <label class="control-label col-md-3">Recorder?</label>
                       <div class="col-md-9">
                          <input type="text" class="form-control form-control-inline" name="recorder" id="recorder" value="<?php echo (isset($editdata['recorder']))?$editdata['recorder']:"";?>"> 
                          <?php //echo form_error('date_joined'); ?>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="form-group <?php //echo (form_error('date_joined'))?'has-error':'';?>">
                       <label class="control-label col-md-3">Stand Bearer?</label>
                       <div class="col-md-9">v
                          <input type="text" class="form-control form-control-inline" name="stand_bearer" id="stand_bearer" value="<?php echo (isset($editdata['stand_bearer']))?$editdata['stand_bearer']:"";?>"> 
                          <?php //echo form_error('date_joined'); ?>
                       </div>
                    </div>
                 </div>
              </div> 
              
              <div class="row">
                 <div class="col-md-4">
                    <div class="form-group <?php //echo (form_error('district_no'))?'has-error':'';?>">
                       <label class="control-label col-md-3">Year</label>
                       <div class="col-md-9">
                          <input type="text" class="form-control" name="year2" id="year2" value="<?php echo (isset($editdata['year2']))?$editdata['year2']:"";?>"> 
                          <?php //echo form_error('district_no'); ?>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="form-group <?php //echo (form_error('date_joined'))?'has-error':'';?>">
                       <label class="control-label col-md-3">Treasurer?</label>
                       <div class="col-md-9">
                          <input type="text" class="form-control form-control-inline" name="treasurer" id="treasurer" value="<?php echo (isset($editdata['treasurer']))?$editdata['treasurer']:"";?>"> 
                          <?php //echo form_error('date_joined'); ?>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="form-group <?php //echo (form_error('date_joined'))?'has-error':'';?>">
                       <label class="control-label col-md-3">Warden?</label>
                       <div class="col-md-9">
                          <input type="text" class="form-control form-control-inline" name="warden" id="warden" value="<?php echo (isset($editdata['warden']))?$editdata['warden']:"";?>"> 
                          <?php //echo form_error('date_joined'); ?>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col-md-4">
                    <div class="form-group <?php //echo (form_error('district_no'))?'has-error':'';?>">
                       <label class="control-label col-md-3">Eminent Cmdr?</label>
                       <div class="col-md-9">
                          <input type="text" class="form-control" name="emi_cmdr" id="emi_cmdr" value="<?php echo (isset($editdata['emi_cmdr']))?$editdata['emi_cmdr']:"";?>"> 
                          <?php //echo form_error('district_no'); ?>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="form-group <?php //echo (form_error('date_joined'))?'has-error':'';?>">
                       <label class="control-label col-md-3">Senior Warden?</label>
                       <div class="col-md-9">
                          <input type="text" class="form-control form-control-inline" name="sr_warden" id="sr_warden" value="<?php echo (isset($editdata['sr_warden']))?$editdata['sr_warden']:"";?>"> 
                          <?php //echo form_error('date_joined'); ?>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="form-group <?php //echo (form_error('date_joined'))?'has-error':'';?>">
                       <label class="control-label col-md-3">Sentinel?</label>
                       <div class="col-md-9">
                          <input type="text" class="form-control form-control-inline" name="sentinel" id="sentinel" value="<?php echo (isset($editdata['sentinel']))?$editdata['sentinel']:"";?>"> 
                          <?php //echo form_error('date_joined'); ?>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col-md-6">
                    <div class="form-group <?php //echo (form_error('district_no'))?'has-error':'';?>">
                       <label class="control-label col-md-3">Year</label>
                       <div class="col-md-9">
                          <input type="text" class="form-control" name="year3" id="year3" value="<?php echo (isset($editdata['year3']))?$editdata['year3']:"";?>"> 
                          <?php //echo form_error('district_no'); ?>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-group <?php //echo (form_error('date_joined'))?'has-error':'';?>">
                       <label class="control-label col-md-3">Junior Warden?</label>
                       <div class="col-md-9">
                          <input type="text" class="form-control form-control-inline" name="jr_warden" id="jr_warden" value="<?php echo (isset($editdata['jr_warden']))?$editdata['jr_warden']:"";?>"> 
                          <?php //echo form_error('date_joined'); ?>
                       </div>
                    </div>
                 </div>
                
              </div> 
           </div>
              <div class="form-actions">
                 <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                       <button type="button" class="btn green" onclick="tab_view('commandery','commandery/add','commandery')">Submit</button>
                       <a href="<?php echo site_url('chapter');?>" class="btn default">Cancel</a>
                    </div>
                 </div>
              </div>

        </form>
   