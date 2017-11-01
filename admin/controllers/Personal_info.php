<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(COREPATH."controllers/Admin_controller.php");
class Personal_info extends Admin_Controller
{
  protected $_perosnal_validation_rules =    array (
                                array('field' => 'first_name', 'label' => 'First Name', 'rules' => 'trim|required'),
                                array('field' => 'middle_name', 'label' => 'Middle Name', 'rules' => 'trim'),
                                array('field' => 'last_name', 'label' => 'Last Name', 'rules' => 'trim|required'),
                                array('field' => 'mason', 'label' => 'Mason', 'rules' => 'trim|required'),
                                array('field' => 'status', 'label' => 'Status', 'rules' => 'trim|required'),
                                array('field' => 'is_admin', 'label' => 'Is Admin?', 'rules' => 'trim|required'),
                                array('field' => 'mobile', 'label' => 'Email', 'rules' => 'trim'),
                                array('field' => 'phone', 'label' => 'Home', 'rules' => 'trim|required'),
                                array('field' => 'work', 'label' => 'Email', 'rules' => 'trim'),
                                array('field' => 'off_email', 'label' => 'Office Email', 'rules' => 'trim'),
                                array('field' => 'email', 'label' => 'Email', 'rules' => 'trim|required|valid_email'),
                                array('field' => 'password', 'label' => 'Password', 'rules' => 'trim'),
                                array('field' => 'dob', 'label' => 'D.O.B', 'rules' => 'trim|required'),
                                array('field' => 'b_city', 'label' => 'Birth City', 'rules' => 'trim|required'),
                                array('field' => 'b_state', 'label' => 'Birth State', 'rules' => 'trim|required'),
                                array('field' => 'address1', 'label' => 'Address 1', 'rules' => 'trim|required'),
                                array('field' => 'address2', 'label' => 'Address 2', 'rules' => 'trim'),
                                array('field' => 'city', 'label' => 'City', 'rules' => 'trim|required'),
                                array('field' => 'state', 'label' => 'State', 'rules' => 'trim|required'),
                                array('field' => 'zip', 'label' => 'Zip', 'rules' => 'trim|required'),
                                array('field' => 'w_address1', 'label' => 'Address 1', 'rules' => 'trim'),
                                array('field' => 'w_address2', 'label' => 'Address 2', 'rules' => 'trim'),
                                array('field' => 'w_city', 'label' => 'City', 'rules' => 'trim'),
                                array('field' => 'w_state', 'label' => 'State', 'rules' => 'trim'),
                                array('field' => 'w_zip', 'label' => 'Zip', 'rules' => 'trim'),
                                array('field' => 'york_rite', 'label' => 'York Rite', 'rules' => 'trim|required'),
                                array('field' => 'scottish_rite', 'label' => 'Scottish Rite', 'rules' => 'trim'),
                                array('field' => 'shriner', 'label' => 'Shriner', 'rules' => 'trim'),
                                array('field' => 'grotto', 'label' => 'Grotto', 'rules' => 'trim'),
                                array('field' => 'spouse', 'label' => 'Spouse', 'rules' => 'trim'),
                                array('field' => 'kids', 'label' => 'Kids', 'rules' => 'trim'));
	function __construct()
  {
    parent::__construct();
    
    if(!is_logged_in())
      redirect('login');
    $this->load->model('personal_model');
  }  
  public function index()
  {
    $this->layout->add_stylesheets('profile');
    $this->form_validation->set_rules($this->_perosnal_validation_rules);
    $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
    if($this->form_validation->run())
    {
      $form = $this->input->post();
      $edit_id = $form['id'];
      /* Users Table*/
      $ins['first_name'] = $form['first_name'];
      $ins['middle_name'] = $form['middle_name'];
      $ins['last_name'] = $form['last_name'];
      $ins['email'] = $form['email'];
      $ins['password'] = $form['password'];
      $ins['home_blue_lodge'] = "";//$form['home_blue_lodge'];
      $ins['phone'] = $form['phone'];
      $ins['role_id'] = "2";
      $ins['status'] = $form['status'];
      /*Personal Info Table*/
      $ins1['mobile'] = $form['mobile'];
      $ins1['work'] = $form['work'];
      $ins1['off_email'] = $form['off_email'];
      $ins1['dob'] = date("Y-m-d",strtotime($form['dob']));
      $ins1['b_city'] = $form['b_city'];
      $ins1['b_state'] = $form['b_state'];
      $ins1['mason'] = $form['mason'];
      /*Home Address Table*/
      $ins2['address1'] = $form['address1'];
      $ins2['address2'] = $form['address2'];
      $ins2['city'] = $form['city'];
      $ins2['state'] = $form['state'];
      $ins2['zip'] = $form['zip'];
      /*Work Address Table*/
      $ins3['w_address1'] = $form['w_address1'];
      $ins3['w_address2'] = $form['w_address2'];
      $ins3['w_city'] = $form['w_city'];
      $ins3['w_state'] = $form['w_state'];
      $ins3['w_zip'] = $form['w_zip'];
      /*Affiliations Table*/
      $ins4['york_rite'] = $form['york_rite'];
      $ins4['scottish_rite'] = $form['scottish_rite'];
      $ins4['shriner'] = $form['shriner'];
      $ins4['grotto'] = $form['grotto'];
      /*Family Table*/
      $ins5['spouse'] = $form['spouse'];
      $kid1 = ($form['kids1']!='')?$form['kids1'].",":"";
      $kid2 = ($form['kids2']!='')?$form['kids2'].",":"";
      $kid3 = ($form['kids3']!='')?$form['kids3']:"";
      $ins5['kids'] = rtrim($kid1.$kid2.$kid3,",");
      if($edit_id)
      {
        $ins['updated_by'] = get_current_user_id();
        $ins_id = $this->personal_model->update(array("id"=>$edit_id),$ins,"users");
        $ins_id1 = $this->personal_model->update(array("user_id"=>$edit_id),$ins1,"personal_info");
        $ins_id2 = $this->personal_model->update(array("user_id"=>$edit_id),$ins2,"home_address");
        $ins_id3 = $this->personal_model->update(array("user_id"=>$edit_id),$ins3,"work_address");
        $ins_id4 = $this->personal_model->update(array("user_id"=>$edit_id),$ins4,"affiliations");
        $ins_id5 = $this->personal_model->update(array("user_id"=>$edit_id),$ins5,"family");
        $this->session->set_flashdata("success_msg","Personal Info updated successfully.");
      }
      else
      {
        $ins['created_by'] = get_current_user_id();
        $ins_id = $this->personal_model->insert($ins,"users");
        $ins1['user_id'] = $ins2['user_id'] = $ins3['user_id'] = $ins4['user_id'] = $ins5['user_id'] = $ins_id;
        $ins_id1 = $this->personal_model->insert($ins1,"personal_info");
        $ins_id2 = $this->personal_model->insert($ins2,"home_address");
        $ins_id3 = $this->personal_model->insert($ins3,"work_address");
        $ins_id4 = $this->personal_model->insert($ins4,"affiliations");
        $ins_id5 = $this->personal_model->insert($ins5,"family");
        $this->session->set_flashdata("success_msg","Personal Info inserted successfully.");
      }
      redirect("personal_info");
    }
    $this->data['editdata'] = array("id"=>"","first_name"=>"","mason"=>"","status"=>"","is_admin"=>"","password"=>"","middle_name"=>"","last_name"=>"","mobile"=>"","phone"=>"","work"=>"","off_email"=>"","email"=>"","dob"=>"","b_city"=>"","b_state"=>"","address1"=>"","address2"=>"","city"=>"","state"=>"","zip"=>"","w_address1"=>"","w_address2"=>"","w_city"=>"","w_state"=>"","w_zip"=>"","york_rite"=>"","scottish_rite"=>"","shriner"=>"","grotto"=>"","spouse"=>"","kids1"=>"","kids2"=>"","kids3"=>"");
    $this->layout->view('frontend/personal_info/index');
  }
}
?>