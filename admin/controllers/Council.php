<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(COREPATH."controllers/Admin_controller.php");
class Council extends Admin_Controller
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
     try
        {
          if($this->input->post('edit_id'))            
            $edit_id = $this->input->post('edit_id');
           
          $this->form_validation->set_rules('council_name','Council Name','trim|required');
          $this->form_validation->set_rules('council_no','Council No','trim|required');
          $this->form_validation->set_rules('district_no','District No','trim|required');
          $this->form_validation->set_rules('top_line_signer','Top Line Signer','trim|required');
          $this->form_validation->set_rules('most_il_master','Most Il Master','trim|required');
          $this->form_validation->set_rules('district_il_master','District Il Master','trim|required');
         // $this->form_validation->set_rules('category_id','Color','trim|required');
        //  $this->form_validation->set_rules('row','Row','trim|required|numeric');
        //  $this->form_validation->set_rules('units','Units','trim|required|numeric');
        //  $this->form_validation->set_rules('retail_price','Retail Price','trim|required');
        //  $this->form_validation->set_rules('wholesale_price','Wholesale Price','trim|required');
          
          $this->form_validation->set_error_delimiters('', '');
          if($this->form_validation->run()){
            
              $ins_data = array();
              $ins_data['council_name']              = $this->input->post('council_name');
              $ins_data['council_no']                = $this->input->post('council_no');
              $ins_data['district_no']               = $this->input->post('district_no');
              $ins_data['top_line_signer']           = $this->input->post('top_line_signer');  
              $ins_data['second_line_signer']        = $this->input->post('second_line_signer');
              $ins_data['date_joined']               = $this->input->post('date_joined');
              $ins_data['most_il_master']            = $this->input->post('most_il_master');
              $ins_data['year1']                     = $this->input->post('year1');
              $ins_data['district_il_master']        = $this->input->post('district_il_master');
              $ins_data['year2']                     = $this->input->post('year2');
              $ins_data['illustrious_master']        = $this->input->post('illustrious_master');
              $ins_data['year3']                     = $this->input->post('year3');
              $ins_data['deputy_master']             = $this->input->post('deputy_master');
              $ins_data['princ_cond_of_work']        = $this->input->post('princ_cond_of_work');
              $ins_data['recorder']                  = $this->input->post('recorder');
              $ins_data['treasurer']                 = $this->input->post('treasurer');
              $ins_data['capt_of_guard']             = $this->input->post('capt_of_guard');
              $ins_data['cond_of_council']           = $this->input->post('cond_of_council');
              $ins_data['steward']                   = $this->input->post('steward');
              $ins_data['chaptain']                  = $this->input->post('chaptain');
              $ins_data['sentinel']                  = $this->input->post('sentinel');
              $ins_data['marshal']                   = $this->input->post('marshal');
              
              if($edit_id){
               // $ins_data['updated_date'] = date('Y-m-d H:i:s'); 
               // $ins_data['updated_id']   = get_current_user_id();    
                $msg                      = 'Council updated successfully';
                $this->chapter_model->update(array("id" => $edit_id),$ins_data,'council');
               // log_history($edit_id,'inventory',"Product <b>".$ins_data['name']."</b> has been updated."); 
              }
              else
              {   
              //  $ins_data['created_date'] = date('Y-m-d H:i:s'); 
              //  $ins_data['updated_date'] = date('Y-m-d H:i:s');
              //  $ins_data['created_id']   = get_current_user_id();  
                $new_id                   = $this->chapter_model->insert($ins_data,'council');         
                $msg                      = 'Council added successfully';
                $edit_id                  =  $new_id;
               // log_history($new_id,'inventory',"Product <b>".$ins_data['name']."</b> has been inserted."); 
              }
              $this->session->set_flashdata('success_msg',$msg,TRUE);
              $status  = 'success';
          }    
          else
          {
              $edit_data = array();            
              $edit_data['council_name']              = "";
              $edit_data['council_no']                = "";
              $edit_data['district_no']               = "";
              $edit_data['top_line_signer']           = "";  
              $edit_data['second_line_signer']        = "";
              $edit_data['date_joined']               = "";
              $edit_data['most_il_master']            = "";
              $edit_data['year1']                     = "";
              $edit_data['district_il_master']        = "";
              $edit_data['year2']                     = "";
              $edit_data['illustrious_master']        = "";
              $edit_data['year3']                     = "";
              $edit_data['deputy_master']             = "";
              $edit_data['princ_cond_of_work']        = "";
              $edit_data['recorder']                  = "";
              $edit_data['treasurer']                 = "";
              $edit_data['capt_of_guard']             = "";
              $edit_data['cond_of_council']           = "";
              $edit_data['steward']                   = "";
              $edit_data['chaptain']                  = "";
              $edit_data['sentinel']                  = "";
              $edit_data['marshal']                   = "";
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
          $output  = $this->load->view('frontend/yorksite/council',$this->data,true);
          return $this->_ajax_output(array('status' => $status, 'output' => $output, 'edit_id' => $edit_id), TRUE);
        } 
        else
        {
            $this->layout->view('frontend/yorksite/council',$this->data);
        }  
  }
  
}
?>