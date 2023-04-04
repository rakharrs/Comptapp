<?php

class Operation_model extends CI_Model{
	public function insert_operation($libelle, $numeroPiece, $compte_tiere, $numero_compte,$code_journal,$debit, $credit, $date){
		return $this->db->insert('operation', array(
			'libelle'=>$libelle,
			'numero_piece'=>$numeroPiece,
			'compte_tier'=>$compte_tiere,
			'numero_compte'=>$numero_compte,
			'code_journal'=>$code_journal,
			'debit'=>$debit,
			'credit'=>$credit,
			'date_operation'=>$date
		));
	}

	public function get_all(){
		$query = $this->db->query("select * from operation order by id");
		return $query->result_array();
	}
}
