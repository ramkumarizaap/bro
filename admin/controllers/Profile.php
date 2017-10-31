<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(COREPATH."controllers/Admin_controller.php");
class Profile extends Admin_Controller
{
	function __construct()
  {
    parent::__construct();
    
    if(!is_logged_in())
      redirect('login');
  }

  
  public function index()
  {
    $this->layout->view('frontend/profile');
  }
  
  public function add($edit_id = '')
  {
     try
        {
          if($this->input->post('edit_id'))            
            $edit_id = $this->input->post('edit_id');
           
          $this->form_validation->set_rules('name','Product Name','trim|required');
          $this->form_validation->set_rules('sku','Sku','trim|required|callback_sku_unique_check['.$edit_id.']');
          $this->form_validation->set_rules('quantity','Quantity','trim|required');
          $this->form_validation->set_rules('color_id','Color','trim|required');
          $this->form_validation->set_rules('form_id','Form','trim|required');
          $this->form_validation->set_rules('package_id','Package','trim|required');
          $this->form_validation->set_rules('category_id','Color','trim|required');
          $this->form_validation->set_rules('row','Row','trim|required|numeric');
          $this->form_validation->set_rules('units','Units','trim|required|numeric');
          $this->form_validation->set_rules('retail_price','Retail Price','trim|required');
          $this->form_validation->set_rules('wholesale_price','Wholesale Price','trim|required');
          
          $this->form_validation->set_error_delimiters('', '');
          if($this->form_validation->run()){
            
              $ins_data = array();
              $ins_data['sku']                               = $this->input->post('sku');
              $ins_data['name']                              = $this->input->post('name');
              $ins_data['quantity']                          = $this->input->post('quantity');
              $ins_data['available_qty']                     = $this->input->post('quantity');  
              $ins_data['category_id']                       = $this->input->post('category_id');
              $ins_data['color_id']                          = $this->input->post('color_id');
              $ins_data['form_id']                           = $this->input->post('form_id');
              $ins_data['package_id']                        = $this->input->post('package_id');
              $ins_data['retail_price']                      = $this->input->post('retail_price');
              $ins_data['wholesale_price']                   = $this->input->post('wholesale_price');
              $ins_data['ref_no']                            = $this->input->post('ref_no');
              $ins_data['internal_lot_no']                   = $this->input->post('internal_lot_no');
              $ins_data['vendor_lot_no']                     = $this->input->post('vendor_lot_no');
              $ins_data['received_at_customer']              = (!empty($received_at_customer))?$received_at_customer:"No";
              $ins_data['received_in_warehouse']             = (!empty($received_at_warehouse))?$received_at_warehouse:"No";
              $ins_data['purchase_order_number']             = $this->input->post('purchase_order_number');
              $ins_data['weight']                            = $this->input->post('weight');
              $ins_data['row']                               = $this->input->post('row');
              $ins_data['notes']                             = $this->input->post('notes');
              $ins_data['product']                           = $this->input->post('product');
              $ins_data['units']                             = $this->input->post('units');
              $ins_data['item_type']                         = $this->input->post('item_type');
              $ins_data['in_stock']                          = (!empty($in_stock))?$in_stock:0;
              $ins_data['equivalent']                        = $this->input->post('equivalent');
              $ins_data['warehouse_id']                      = $this->input->post('warehouse_id');
              $ins_data['intransit_to_warehouse']            = (!empty($intransit_to_warehouse))?$intransit_to_warehouse:"No";
              $ins_data['intransit_to_customer']             = (!empty($intransit_to_customer))?$intransit_to_customer:"No";
              $ins_data['purchase_transportation_identifier']= $this->input->post('purchase_transportation_identifier');
              $ins_data['sales_transportation_identifier']   = $this->input->post('sales_transportation_identifier');
              $ins_data['certification_files']               = (isset($_POST['certification_files']))?$_POST['certification_files']:''; 
              
              if($edit_id){
                $ins_data['updated_date'] = date('Y-m-d H:i:s'); 
                $ins_data['updated_id']   = get_current_user_id();    
                $msg                      = 'Product updated successfully';
                $this->inventory_model->update(array("id" => $edit_id),$ins_data);
                log_history($edit_id,'inventory',"Product <b>".$ins_data['name']."</b> has been updated."); 
              }
              else
              {   
                $ins_data['created_date'] = date('Y-m-d H:i:s'); 
                $ins_data['updated_date'] = date('Y-m-d H:i:s');
                $ins_data['created_id']   = get_current_user_id();  
                $new_id                   = $this->inventory_model->insert($ins_data);  
                           
                $msg                      = 'Product added successfully';
                $edit_id                  =  $new_id;
                log_history($new_id,'inventory',"Product <b>".$ins_data['name']."</b> has been inserted."); 
              }
              $this->session->set_flashdata('success_msg',$msg,TRUE);
              $status  = 'success';
          }    
          else
          {
            $edit_data = array();
            $edit_data['id']                                = (!empty($edit_id))?$edit_id:'';
            $edit_data['sku']                               = '';
            $edit_data['name']                              = '';
            $edit_data['color_id']                          = '';
            $edit_data['form_id']                           = '';
            $edit_data['package_id']                        = '';
            $edit_data['category_id']                       = '';
            $edit_data['quantity']                          = '';
            $edit_data['retail_price']                      = '';
            $edit_data['wholesale_price']                   = '';
            $edit_data['shipping_cost']                     = '';
            $edit_data['ref_no']                            = '';
            $edit_data['internal_lot_no']                   = '';
            $edit_data['vendor_lot_no']                     = '';
            $edit_data['received_at_customer']              = '';
            $edit_data['received_in_warehouse']             = '';
            $edit_data['row']                               = '';
            $edit_data['notes']                             = '';
            $edit_data['product']                           = '';
            $edit_data['units']                             = '';
            $edit_data['item_type']                         = '';
            $edit_data['weight']                            = '';
            $edit_data['in_stock']                          = '';
            $edit_data['image_title']                       = '';
            $edit_data['file_name']                         = '';
            $edit_data['purchase_order_number']             = '';
            $edit_data['equivalent']                        = '';
            $edit_data['warehouse_id']                      = '';
            $edit_data['intransit_to_warehouse']            = '';
            $edit_data['intransit_to_customer']             = '';
            $edit_data['certification_files']               = '';
            $edit_data['purchase_transportation_identifier']= '';
            $edit_data['sales_transportation_identifier']   = '';
            $status = 'error';
          }
        }
        catch (Exception $e)
        {
            $this->data['status']   = 'error';
            $msg  = $e->getMessage();
        }

        if($edit_id){
          $edit_data = $this->inventory_model->get_where(array("id" => $edit_id))->row_array();
          $images    = $this->inventory_model->get_where(array("product_id" => $edit_id),'*','product_images')->result_array();
          $pricelists= $this->inventory_model->get_where(array("product_id" => $edit_id),'*','vendor_price_list')->result_array();
        }    
        $this->data['editdata']              = $edit_data;
        $this->data['editdata']['images']    = (!empty($images))?$images:array();
        $this->data['editdata']['pricelts']  = (!empty($pricelists))?$pricelists:array();
        $this->data['colors']                = $this->inventory_model->get_where(array('status' => 1),"*","product_color")->result_array();
        $this->data['forms']                 = $this->inventory_model->get_where(array('status' => 1),"*","product_form")->result_array();
        $this->data['packages']              = $this->inventory_model->get_where(array('status' => 1),"*","product_packaging")->result_array();
        $this->data['categories']            = $this->inventory_model->get_where(array('enabled'=> 1),"*","category")->result_array();
        $this->data['warehouse']             = $this->inventory_model->get_where(array('status' => 1),"*","warehouse")->result_array();
        
        if($this->input->is_ajax_request()){
          $output  = $this->load->view('frontend/inventory/add',$this->data,true);
          return $this->_ajax_output(array('status' => $status,'message' => $msg,'output' => $output, 'edit_id' => $edit_id), TRUE);
        }   
  }
  
}
?>