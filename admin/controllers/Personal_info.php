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
  }  
  public function index()
  {
    $this->layout->add_stylesheets('profile');
    $this->form_validation->set_rules($this->_perosnal_validation_rules);
    $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
    if($this->form_validation->run())
    {
    }
    $this->data['editdata'] = array("id"=>"","first_name"=>"","mason"=>"","status"=>"","is_admin"=>"","password"=>"","middle_name"=>"","last_name"=>"","mobile"=>"","phone"=>"","work"=>"","off_email"=>"","email"=>"","dob"=>"","b_city"=>"","b_state"=>"","address1"=>"","address2"=>"","city"=>"","state"=>"","zip"=>"","w_address1"=>"","w_address2"=>"","w_city"=>"","w_state"=>"","w_zip"=>"","york_rite"=>"","scottish_rite"=>"","shriner"=>"","grotto"=>"","spouse"=>"","kids1"=>"","kids2"=>"","kids3"=>"");
    $this->layout->view('frontend/personal_info/index');
  }
}
?>