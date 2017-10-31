
<form action="#" class="mt-repeater form-horizontal" name="add_chapter" id="add_chapter" method="post" enctype="multipart/form-data">
           <div class="form-body">
               <!--/row-->
              <div class="row">
                 <div class="col-md-6">
                    <div class="form-group <?php echo (form_error('chapter_name'))?'has-error':'';?>">
                       <label class="control-label col-md-3">Puppy Name<span class="required">*</span></label>
                       <div class="col-md-9">
                          <input type="text" class="form-control" name="chapter_name" id="chapter_name" value="<?php echo set_value('chapter_name',$editdata['chapter_name']);?>"> 
                          <?php echo form_error('chapter_name'); ?>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-group <?php //echo (form_error('color'))?'has-error':'';?>">
                       <label class="control-label col-md-3">Puppy Color<span class="required">*</span></label>
                       <div class="col-md-9">
                          <input type="text" class="form-control form-control-inline date date-picker" name="color" id="color" value="<?php //echo set_value('color',$editdata['color']);?>"> 
                          <?php //echo form_error('color'); ?>
                       </div>
                    </div>
                 </div>
              </div>
                 
           </div>
              <div class="form-actions">
                 <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                       <button type="submit" class="btn green">Submit</button>
                       <a href="<?php //echo site_url('dogs');?>" class="btn default">Cancel</a>
                    </div>
                 </div>
              </div>

        </form>