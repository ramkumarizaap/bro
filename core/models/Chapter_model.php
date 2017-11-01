<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once(COREPATH.'libraries/models/App_model.php');

class Chapter_model extends App_model
{
  function __construct()
  {
    parent::__construct();
    $this->_table = 'chapters';
  }
  
  function listing()
  {  
    
    $this->_fields = "*";
    $this->db->group_by('id');

    foreach ($this->criteria as $key => $value)
    {
      if( !is_array($value) && strcmp($value, '') === 0 )
        continue;
      switch ($key)
      {
        case 'id':
          $this->db->like($key, $value);
        break;
      }
    }
    return parent::listing();
  }

  function get_data($table_name,$where,$field_name)
  { 
    
    if(count($where))
    {
      if($field_name!='')
        $this->db->select($field_name); 
          
      $result = $this->db->get_where($table_name,$where);
    }
    else
    {
      if($field_name!='')
        $this->db->select($field_name); 

      $result = $this->db->get($table_name);
    }
    return $result;
  }

 
}
?>