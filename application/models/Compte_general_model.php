<?php

class Compte_general_model extends \CI_Model
{
	/**
	 * @throws Exception
	 */
	function upload_insert($files){
		$this->load->helper('utils');
		$file_count = count($files['name']);
		$img_string = "";
		for ($i = 0; $i < $file_count; $i++) {
			$filename = $files['name'][$i];
			if (in_array(strchr($filename, "."), array('.csv', '.xls'))) {
				move_uploaded_file($files['tmp_name'][$i], 'assets/upload/'.$filename);
				$img_string .= $filename;

				if ($i < $file_count - 1) {
					$img_string .= ",";
				}
				$path = 'assets/upload/'.$img_string;
				$lines = read_csv($path);
				foreach ($lines as $line){
					if(isset($line[0], $line[1])) {
						$this->save($line[0], $line[1]);
					}
				}
			}
		}
	}

    function get_all($limit, $offset){
        $this->db->select('*');
        $this->db->from('compte_general');
        $this->db->order_by('id', 'ASC');
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        return $query->result_array();
    }

	/**
	 * @throws Exception
	 */
	function save($id, $intitule){
		if(intval($id)==0) throw new Exception("invalid value");
		return $this->db->insert('compte_general', array('id'=>$id, 'intitule'=>$intitule));
	}

	function update($id, $numero, $intitule){
		$this->db->where('id',$id);
		return $this->db->update('compte_general',array('id'=>$numero, 'intitule'=>$intitule));
	}

	function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('compte_general');
		return $this->db->affected_rows() > 0;
	}

    public function search($id, $intitule) {
        // build query
        $query = "SELECT * FROM compte_general WHERE id LIKE ? AND LOWER(intitule) LIKE ?";
        $id_param = "%{$id}%";
        $intitule_param = "%{$intitule}%";

        // execute query with parameter binding
        $result = $this->db->query($query, array($id_param, $intitule_param));

        return $result->result_array();
    }
}
