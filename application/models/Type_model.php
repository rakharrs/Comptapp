<?php

class Type_model extends CI_Model{
	public $id;
	public $intitule;

	public function insertType($intitule){
		$this->intitule = $intitule;
		$this->db->insert('type',$this);
	}

	public function getTypeByIntitule($intitule){
		$query = $this->db->get_where('type', array('intitule'=>$intitule));
		return $query->result_array();
	}
	public function getListType(){
		$this->db->select();
		return $this->db->get('type')->result_array();
	}
	public function update_type($id,$intitule){
		$this->db->where('id', $id);
		$this->db->update('type', array('intitule'=>$intitule));
	}
	public function delete_type($id){
		$this->db->where('id', $id);
		$this->db->delete('type');
		return $this->db->affected_rows() > 0;
	}
}
