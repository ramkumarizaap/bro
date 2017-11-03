<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(COREPATH."controllers/Admin_controller.php");
class Commandery extends Admin_Controller
{
	function __construct()
  {
    parent::__construct();
    
    if(!is_logged_in())
      redirect('login');
      
    $this->load->model('chapter_model');  
  }

  
  public function index()
  {
    $this->layout->view('frontend/dashboard');
  }
  
  public function add($edit_id = '')
  {
     $this->layout->add_javascripts(array('bootstrap-datepicker.min'));  
     $this->layout->add_stylesheets(array('bootstrap-datepicker3.min'));
    
    
     try
        {
          if($this->input->post('edit_id'))            
            $edit_id = $this->input->post('edit_id');
           
          $this->form_validation->set_rules('comm_name','Commandary Name','trim|required');
          $this->form_validation->set_rules('comm_no','Commandery No','trim|required');
          $this->form_validation->set_rules('district_no','District No','trim|required');
          $this->form_validation->set_rules('top_line_signer','Top Line Signer','trim|required');
          $this->form_validation->set_rules('date_joined','Date Joined','trim|required');
          $this->form_validation->set_rules('master_emi_cmdr','Master Emi Cmdr','trim|required');
          $this->form_validation->set_rules('district_emi_cmdr','District High Priest','trim|required');
          
          
         // $this->form_validation->set_rules('category_id','Color','trim|required');
        //  $this->form_validation->set_rules('row','Row','trim|required|numeric');
        //  $this->form_validation->set_rules('units','Units','trim|required|numeric');
        //  $this->form_validation->set_rules('retail_price','Retail Price','trim|required');
        //  $this->form_validation->set_rules('wholesale_price','Wholesale Price','trim|required');
          
          $this->form_validation->set_error_delimiters('', '');
          if($this->form_validation->run()){
            
              $ins_data = array();
              $ins_data['comm_name']                 = $this->input->post('comm_name');
              $ins_data['comm_no']                   = $this->input->post('comm_no');
              $ins_data['district_no']               = $this->input->post('district_no');
              $ins_data['top_line_signer']           = $this->input->post('top_line_signer');  
              $ins_data['second_line_signer']        = $this->input->post('second_line_signer');
              $ins_data['date_joined']               = $this->input->post('date_joined_commandery');
              $ins_data['master_emi_cmdr']           = $this->input->post('master_emi_cmdr');
              $ins_data['year1']                     = $this->input->post('year1');
              $ins_data['district_emi_cmdr']         = $this->input->post('district_emi_cmdr');
              $ins_data['year2']                     = $this->input->post('year2');
              $ins_data['emi_cmdr']                  = $this->input->post('emi_cmdr');
              $ins_data['year3']                     = $this->input->post('year3');
              $ins_data['generalsmo']                = $this->input->post('generalsmo');
              $ins_data['capt_general']              = $this->input->post('capt_general');
              $ins_data['recorder']                  = $this->input->post('recorder');
              $ins_data['treasurer']                 = $this->input->post('treasurer');
              $ins_data['sr_warden']                 = $this->input->post('sr_warden');
              $ins_data['jr_warden']                 = $this->input->post('jr_warden');
              $ins_data['prebate']                   = $this->input->post('prebate');
              $ins_data['sword_bearer']              = $this->input->post('sword_bearer');
              $ins_data['stand_bearer']              = $this->input->post('stand_bearer');
              $ins_data['warden']                    = $this->input->post('warden');
              $ins_data['sentinel']                  = $this->input->post('sentinel');
              
              if($edit_id){
               // $ins_data['updated_date'] = date('Y-m-d H:i:s'); 
               // $ins_data['updated_id']   = get_current_user_id();    
                $msg                      = 'Commendary updated successfully';
                $this->chapter_model->update(array("id" => $edit_id),$ins_data,'commendary');
               // log_history($edit_id,'inventory',"Product <b>".$ins_data['name']."</b> has been updated."); 
              }
              else
              {   
              //  $ins_data['created_date'] = date('Y-m-d H:i:s'); 
              //  $ins_data['updated_date'] = date('Y-m-d H:i:s');
              //  $ins_data['created_id']   = get_current_user_id();  
                $new_id                   = $this->chapter_model->insert($ins_data,'commendary');         
                $msg                      = 'Commendary added successfully';
                $edit_id                  =  $new_id;
               // log_history($new_id,'inventory',"Product <b>".$ins_data['name']."</b> has been inserted."); 
              }
              $this->session->set_flashdata('success_msg',$msg,TRUE);
              $status  = 'success';
          }    
          else
          {
            $edit_data = array();
            $edit_data['comm_name']                 = '';
            $edit_data['comm_no']                   = '';
            $edit_data['district_no']               = '';
            $edit_data['top_line_signer']           = '';  
            $edit_data['date_joined']               = '';
            $edit_data['master_emi_cmdr']           = '';
            $edit_data['year1']                     = '';
            $edit_data['district_emi_cmdr']         = '';
            $edit_data['year2']                     = '';
            $edit_data['emi_cmdr']                  = '';
            $edit_data['year3']                     = '';
            $edit_data['generalsmo']                = '';
            $edit_data['capt_general']              = '';
            $edit_data['recorder']                  = '';
            $edit_data['treasurer']                 = '';
            $edit_data['sr_warden']                 = '';
            $edit_data['jr_warden']                 = '';
            $edit_data['prebate']                   = '';
            $edit_data['sword_bearer']              = '';
            $edit_data['stand_bearer']              = '';
            $edit_data['warden']                    = '';
            $edit_data['sentinel']                  = '';
            $status = 'error';
          }
        }
        catch (Exception $e)
        {
            $this->data['status']   = 'error';
            $msg  = $e->getMessage();
        }

        if($edit_id){
          $edit_data = $this->chapter_model->get_where(array("id" => $edit_id))->row_array();
        }   
         
        $this->data['editdata']              = $edit_data;
        
        if($this->input->is_ajax_request()){
          $output  = $this->load->view('frontend/yorksite/commandery',$this->data,true);
          return $this->_ajax_output(array('status' => $status, 'output' => $output, 'edit_id' => $edit_id), TRUE);
        } 
        else
        {
            $this->layout->view('frontend/yorksite/commandery',$this->data);
        }  
  }
  
}
?>