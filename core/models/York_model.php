<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once(COREPATH.'libraries/models/App_model.php');

class York_model extends App_model
{
  function __construct()
  {
    parent::__construct();
    $this->_table = "users";
  }
  function listing()
  {  
    $this->_fields = "a.*";
    $user = get_user_data();
    $info = get_user_info();
    if($user['role_id']=="2")
    	$this->db->where("b.state",$info['home_address']['state']);
    if($user['role_id']=="3")
    	$this->db->where("b.city",$info['home_address']['city']);
    // if($user['role_id']=="4")
    // 	$this->db->where("b.state",$info['home_address']['state']);
    $this->db->where("a.id!=",$user['id']);
    $this->db->from("users a");
    $this->db->join("home_address b","a.id=b.user_id","left");
    $this->db->group_by('a.id');

    foreach ($this->criteria as $key => $value)
    {
      if( !is_array($value) && strcmp($value, '') === 0 )
        continue;
      switch ($key)
      {
        case 'first_name':
          $this->db->like('a.'.$key, $value);
        break;
        case 'last_name':
          $this->db->like('a.'.$key, $value);
        break;
        case 'email':
          $this->db->like('a.'.$key, $value);
        break;
        case 'phone':
          $this->db->like('a.'.$key, $value);
        break;
        case 'status':
          $this->db->like('a.'.$key, $value);
        break;
      }
    }
    return parent::listing();
  }
}
?>