<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(COREPATH."controllers/Admin_controller.php");
class Yorksite extends Admin_Controller
{
	function __construct()
  {
    parent::__construct();
    
    if(!is_logged_in())
      redirect('login');
  }

  
  public function index()
  {
    $this->layout->view('frontend/yorksite/index');
  }
  
  
  
}
?>