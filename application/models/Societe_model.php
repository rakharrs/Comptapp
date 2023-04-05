<?php

class Societe_model extends CI_Model
{
	/**
	 * @throws Exception
	 */
	function get_all()
	{
		$query = $this->db->query("select * from societe order by id");
		return $query->result_array();
	}
	function get_by_id($id)
	{
		$query = $this->db->get_where('societe', array('id'=>$id));
		return $query->row_array();
	}
}
