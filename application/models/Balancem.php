<?php
class Balancem extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        
    }
 
    public function getBalance(){
        $this->db->select();
        echo "hello";
		return $this->db->get('v_operation_balance')->result_array();
    }

    public function getStatus(){
        $this->db->select();
        return $this->db->get('v_balance_status')->result_array();
    }
}