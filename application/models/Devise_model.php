<?php

class Devise_model extends CI_Model{
	/**
	 * @throws Exception
	 */
	function save($id_societe, $nom, $value){
		if(intval($id_societe)==0) throw new Exception("invalid value");
		return $this->db->insert('devise', array('id-societe'=>$id_societe, 'nom'=>$nom, 'value'=>$value));
	}

	function get_all(){
		$query = $this->db->query("select * from devise order by id");
		return $query->result_array();
	}
	function get_by_id($id){
		$query = $this->db->get_where('devise', array('id'=>$id));
		return $query->row_array();
	}
	function update($id, $nom, $value){
		$this->db->where('id',$id);
		return $this->db->update('devise',array('nom'=>$nom, 'value'=>$value));
	}
	function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('devise');
		return $this->db->affected_rows() > 0;
	}
	function get_devise_by_id_societe($id_societe){
		$query = $this->db->get_where('devise', array('id_societe'=>$id_societe));
		return $query->row_array();
	}
}
