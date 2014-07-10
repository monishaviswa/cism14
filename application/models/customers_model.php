<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer_model extends CI_Model {


public function _construct()
{
$this->load->database();
}

public function get_customers()
{
$query=$this->db->get('test_customers');
return $query->result_array();
}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */