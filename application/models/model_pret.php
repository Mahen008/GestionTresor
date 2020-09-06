<?php

class Model_pret extends CI_Model
	{

	public function getListPret(){
		// $this->db->select('pret.*',' DATE_FORMAT(pret.datpret, "%d-%b-%y") AS dateP');
		// $this->db->order_by('id', 'DESC');
		// $this->db->from('pret');
		$list = $this->db->query('SELECT pret.*, DATE_FORMAT(pret.datpret, "%d-%b-%y") AS dateP FROM pret ORDER BY `id` DESC');
		// $list = $this->db->get();
		return $list->result();
	}

	// SELECT pret.*,date_format(pret.datpret,"%d-%b-%y") as dateP FROM pret
		
		function load_data()
		{
			$this->db->order_by('id', 'DESC');
			$query = $this->db->get('pret');
			return $query->result_array();
		}

		function insert($data)
		{
			$this->db->insert('pret', $data);
		}

		function update($data, $id)
		{
			$this->db->where('id', $id);
			$this->db->update('pret', $data);
		}

		function delete($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('pret');
		}
	}
?>
	