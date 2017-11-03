<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(COREPATH."controllers/Admin_controller.php");
class Profile extends Admin_Controller
{
  protected $_personal_validation_rules =    array (
                                array('field' => 'first_name', 'label' => 'First Name', 'rules' => 'trim|required'));
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
    $this->data['editdata'] = get_user_info();
    $this->data['profile'] = $this->load->view("frontend/profile/profile",$this->data,true);
    $this->layout->view('frontend/profile');
  }
}
?>