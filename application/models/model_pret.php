<?php
	
	class model_pret extends CI_Model
	{

		public function affichepret()
		{
			$affiche = $this->db->get("pret");
			return $affiche->result();
		}

		public function insererpret($data)
		{
			$this->db->insert("pret",$data);
		}

		public function getpret($id)
		{	
			$unpret = $this->db->get_where('pret',array('id' => $id));
			if ($unpret->num_rows() > 0) {
				return $unpret->row();
			}
		}

		public function updatePret($id,$data)
		{
			return $this->db->where('id',$id)
							->update('pret',$data);
		}

		public function suppret($id)
		{
			return $this->db->delete('pret',['id' => $id]);
		}
		
	}

?>