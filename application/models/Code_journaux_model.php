<?php

class Code_journaux_model extends CI_Model{
	public $id;
	public $code;
	public $intitule;

	public function insert_code_journaux($code, $intitule){
		return $this->db->insert('code_journaux', array('code'=>$code, 'intitule'=>$intitule));
	}

	public function get_code_journaux_by_id($id){
		$query = $this->db->get_where('code_journaux', array('id'=>$id));
		return $query->row_array();
	}

	public function get_all(){
		$this->db->select();
		return $this->db->get('code_journaux')->result_array();
	}

	public function update_code_journaux($id, $code, $intitule){
		$this->db->where('id', $id);
		$this->db->update('code_journaux', array('code'=>$code, 'intitule'=>$intitule));
	}
	public function delete_code_journaux($id){
		$this->db->where('id', $id);
		$this->db->delete('code_journaux');
		return $this->db->affected_rows() > 0;
	}
}
