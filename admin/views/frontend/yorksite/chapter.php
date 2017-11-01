
<form class="mt-repeater form-horizontal" name="add_chapter" id="add_chapter" method="post" enctype="multipart/form-data">
           <div class="form-body">
               <!--/row-->
              <div class="row">
                 <div class="col-md-6">
                    <div class="form-group <?php echo (form_error('chapter_name'))?'has-error':'';?>">
                       <label class="control-label col-md-3">Chapter Name<span class="required">*</span></label>
                       <div class="col-md-9">
                          <input type="text" class="form-control" name="chapter_name" id="chapter_name" value="<?php echo set_value('chapter_name',$editdata['chapter_name']);?>"> 
                          <?php echo form_error('chapter_name'); ?>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-group <?php echo (form_error('top_line_signer'))?'has-error':'';?>">
                       <label class="control-label col-md-3">Chapter Top Line Singer:<span class="required">*</span></label>
                       <div class="col-md-9">
                          <input type="text" class="form-control form-control-inline" name="top_line_signer" id="top_line_signer" value="<?php echo set_value('top_line_signer',$editdata['top_line_signer']);?>"> 
                          <?php echo form_error('top_line_signer'); ?>
                       </div>
                    </div>
                 </div>
              </div>
               <div class="row">
                 <div class="col-md-6">
                    <div class="form-group <?php echo (form_error('chapter_no'))?'has-error':'';?>">
                       <label class="control-label col-md-3">Chapter No<span class="required">*</span></label>
                       <div class="col-md-9">
                          <input type="text" class="form-control" name="chapter_no" id="chapter_no" value="<?php echo set_value('chapter_no',$editdata['chapter_no']);?>"> 
                          <?php echo form_error('chapter_no'); ?>
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
                       <label class="control-label col-md-3">Date Joined:<span class="required">*</span></label>
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
                       <label class="control-label col-md-3">Most High Priest?</label>
                       <div class="col-md-9">
                          <input type="text" class="form-control" name="most_high_priest" id="most_high_priest" value="<?php echo (isset($editdata['most_high_priest']))?$editdata['most_high_priest']:"";?>"> 
                          <?php //echo form_error('district_no'); ?>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="form-group <?php //echo (form_error('date_joined'))?'has-error':'';?>">
                       <label class="control-label col-md-3">King?<span class="required">*</span></label>
                       <div class="col-md-9">
                          <input type="text" class="form-control form-control-inline" name="king" id="king" value="<?php echo set_value('date_joined',$editdata['date_joined']);?>"> 
                          <?php //echo form_error('date_joined'); ?>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="form-group <?php //echo (form_error('date_joined'))?'has-error':'';?>">
                       <label class="control-label col-md-3">R.A Captain?</label>
                       <div class="col-md-9">
                          <input type="text" class="form-control form-control-inline" name="ra_captain" id="ra_captain" value="<?php echo (isset($editdata['ra_captain']))?$editdata['ra_captain']:"";?>"> 
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
                       <label class="control-label col-md-3">Scribe?</label>
                       <div class="col-md-9">
                          <input type="text" class="form-control form-control-inline" name="scribe" id="scribe" value="<?php echo (isset($editdata['scribe']))?$editdata['scribe']:"";?>"> 
                          <?php //echo form_error('date_joined'); ?>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="form-group <?php //echo (form_error('date_joined'))?'has-error':'';?>">
                       <label class="control-label col-md-3">Master 3rd Vef?</label>
                       <div class="col-md-9">
                          <input type="text" class="form-control form-control-inline" name="master_vef_3" id="master_vef_3" value="<?php echo (isset($editdata['master_vef_3']))?$editdata['master_vef_3']:"";?>"> 
                          <?php //echo form_error('date_joined'); ?>
                       </div>
                    </div>
                 </div>
              </div>  
              <div class="row">
                 <div class="col-md-4">
                    <div class="form-group <?php //echo (form_error('district_no'))?'has-error':'';?>">
                       <label class="control-label col-md-3">District High Priest?</label>
                       <div class="col-md-9">
                          <input type="text" class="form-control" name="district_high_priest" id="district_high_priest" value="<?php echo (isset($editdata['district_high_priest']))?$editdata['district_high_priest']:"";?>"> 
                          <?php //echo form_error('district_no'); ?>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="form-group <?php //echo (form_error('date_joined'))?'has-error':'';?>">
                       <label class="control-label col-md-3">Secretary?</label>
                       <div class="col-md-9">
                          <input type="text" class="form-control form-control-inline" name="secretary" id="secretary" value="<?php echo (isset($editdata['secretary']))?$editdata['secretary']:"";?>"> 
                          <?php //echo form_error('date_joined'); ?>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="form-group <?php //echo (form_error('date_joined'))?'has-error':'';?>">
                       <label class="control-label col-md-3">Master 2nd Vef?</label>
                       <div class="col-md-9">
                          <input type="text" class="form-control form-control-inline" name="master_vef_2" id="master_vef_2" value="<?php echo (isset($editdata['master_vef_2']))?$editdata['master_vef_2']:"";?>"> 
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
                       <label class="control-label col-md-3">Master 1st Vef?</label>
                       <div class="col-md-9">
                          <input type="text" class="form-control form-control-inline" name="master_vef_1" id="master_vef_1" value="<?php echo (isset($editdata['master_vef_1']))?$editdata['master_vef_1']:"";?>"> 
                          <?php //echo form_error('date_joined'); ?>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col-md-4">
                    <div class="form-group <?php //echo (form_error('district_no'))?'has-error':'';?>">
                       <label class="control-label col-md-3">High Priest?</label>
                       <div class="col-md-9">
                          <input type="text" class="form-control" name="hight_priest" id="hight_priest" value="<?php echo (isset($editdata['hight_priest']))?$editdata['hight_priest']:"";?>"> 
                          <?php //echo form_error('district_no'); ?>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="form-group <?php //echo (form_error('date_joined'))?'has-error':'';?>">
                       <label class="control-label col-md-3">Capt.Host?</label>
                       <div class="col-md-9">
                          <input type="text" class="form-control form-control-inline" name="capt_host" id="capt_host" value="<?php echo (isset($editdata['capt_host']))?$editdata['capt_host']:"";?>"> 
                          <?php //echo form_error('date_joined'); ?>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="form-group <?php //echo (form_error('date_joined'))?'has-error':'';?>">
                       <label class="control-label col-md-3">Chaptain?</label>
                       <div class="col-md-9">
                          <input type="text" class="form-control form-control-inline" name="chaptain" id="chaptain" value="<?php echo (isset($editdata['chaptain']))?$editdata['chaptain']:"";?>"> 
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
                          <input type="text" class="form-control" name="year3" id="year3" value="<?php echo (isset($editdata['year3']))?$editdata['year3']:"";?>"> 
                          <?php //echo form_error('district_no'); ?>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="form-group <?php //echo (form_error('date_joined'))?'has-error':'';?>">
                       <label class="control-label col-md-3">Principal Sojourner?</label>
                       <div class="col-md-9">
                          <input type="text" class="form-control form-control-inline" name="principal_sojourner" id="principal_sojourner" value="<?php echo (isset($editdata['principal_sojourner']))?$editdata['principal_sojourner']:"";?>"> 
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
           </div>
              <div class="form-actions">
                 <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                       <button type="button" class="btn green" onclick="tab_view('chapter','chapter/add','add_chapter')">Submit</button>
                       <a href="<?php echo site_url('chapter');?>" class="btn default">Cancel</a>
                    </div>
                 </div>
              </div>

        </form>
   