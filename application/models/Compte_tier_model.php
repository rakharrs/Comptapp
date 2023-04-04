<?php

class Compte_tier_model extends CI_Model{
	public $id;
	public $id_type;
	public $numero;
	public $intitule;

	public function insertCompteTier($idType,$numero,$intitule){
		$this->id_type = $idType;
		$this->numero = $numero;
		$this->intitule = $intitule;
		return $this->db->insert('compte_tier', array('id_type'=>$idType, 'numero'=>$numero, 'intitule'=>$intitule));
	}

	public function getCompteTierByNumero($numero){
		$query = $this->db->get_where('compte_tier', array('numero'=>$numero));
		return $query->result_array();
	}
	public function getCompteTierById($id){
		$query = $this->db->get_where('compte_tier', array('id'=>$id));
		return $query->row_array();
	}
	public function getListCompteTier(){
		$this->db->select();
		return $this->db->get('liste_compte_tier')->result_array();
	}
	public function update_compte_tier($id, $id_type,$numero, $intitule){
		$this->db->where('id', $id);
		$this->db->update('compte_tier', array('id_type'=>$id_type,'numero'=>$numero, 'intitule'=>$intitule));
	}
	public function delete_compte_tier($id){
		$this->db->where('id', $id);
		$this->db->delete('compte_tier');
		return $this->db->affected_rows() > 0;
	}

	public function search($type, $numero, $intitule){
		// build query
		$sql = "SELECT * FROM liste_compte_tier";
		$params = array();

		if (!empty($type)) {
			$sql .= "WHERE LOWER(type) LIKE ?";
			$params[] = "%".$type."%";
		}

		if (!empty($intitule)) {
			if (!empty($type)) {
				$sql .= " AND";
			}
			$sql .= " LOWER(intitule) LIKE ?";
			$params[] = '%'.$intitule.'%';
		}

		if (!empty($numero)) {
			if (!empty($type) || !empty($intitule)) {
				$sql .= " AND";
			}
			$sql .= " LOWER(numero) LIKE ?";
			$params[] = "%".$numero."%";
		}

		$query = $this->db->query($sql, $params);
		return $query->result_array();
	}
}
