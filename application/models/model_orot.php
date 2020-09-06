<?php

class Model_orot extends CI_Model
	{
		function load_data()
		{
			$this->db->order_by('id', 'DESC');
			$query = $this->db->get('orotcapital');
			return $query->result_array();
		}

		function insert($data)
		{
			$this->db->insert('orotcapital', $data);
		}

		function update($data, $id)
		{
			$this->db->where('id', $id);
			$this->db->update('orotcapital', $data);
		}

		function delete($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('orotcapital');
		}

		public function editionOR($id)
		{
			$this->db->select(['pret.*','orotcapital.*','devise.*','date_format(now(),"%d/%m/%y")as today']);
			$this->db->from('pret ');
			$this->db->join('orotcapital ','pret.numcpt = orotcapital.numcpt');
			$this->db->join('devise','devise.numcpt = pret.numcpt');
			$this->db->where('orotcapital.id', $id);
			$editOROT = $this->db->get();
			return $editOROT->row();
		}

		public function editionOT($numcpt)
		{
			$this->db->select(['pret.*','orotcapital.*','devise.*','date_format(now(),"%d/%m/%y")as today','pret.id AS numEmission']);
			$this->db->from('pret ');
			$this->db->join('orotcapital ','pret.numcpt = orotcapital.numcpt');
			$this->db->join('devise','devise.numcpt = pret.numcpt');
			$this->db->where('orotcapital.numcpt', $numcpt);
			$editOROT = $this->db->get();
			return $editOROT->row();
		}

		public function editionOTs($numcpt)
		{
			$this->db->select(['pret.*','orotcapital.*','devise.*','date_format(now(),"%d/%m/%y")as today','pret.id AS numEmission']);
			$this->db->from('pret ');
			$this->db->join('orotcapital ','pret.numcpt = orotcapital.numcpt');
			$this->db->join('devise','devise.numcpt = pret.numcpt');
			$this->db->where('orotcapital.numcpt', $numcpt);
			$editOROT = $this->db->get();
			return $editOROT->result();
		}

		public function editionOTss($numcpt)
		{
			$this->db->select(['SUM(orotcapital.tauxdevar*orotcapital.mtordev) AS emission']);
			$this->db->from('pret ');
			$this->db->join('orotcapital ','pret.numcpt = orotcapital.numcpt');
			$this->db->join('devise','devise.numcpt = pret.numcpt');
			$this->db->where('orotcapital.numcpt', $numcpt);
			$editOROT = $this->db->get();
			return $editOROT->result();
		}

		function AfficheList()
		{
			$this->db->select(["orotcapital.*","devise.*","pret.*"]);
			$this->db->from("pret");
			$this->db->join("devise","devise.numcpt=pret.numcpt");
			$this->db->join("orotcapital","orotcapital.numcpt=pret.numcpt");
			$affichList = $this->db->get();
			return $affichList->result();		
		}


		function getListORR()
		{
			$this->db->select(['pret.*','devise.*','orotcapital.*']);
			$this->db->from('pret ');
			$this->db->join('orotcapital ','pret.numcpt = orotcapital.numcpt');
			$this->db->join('devise','devise.numcpt = pret.numcpt');
			$query = $this->db->get();
			return $query->result();
		}
		// -------------------------------------------------------------------
		function fetch_data($query)
		{
		  $this->db->select("*");
		  $this->db->from("orotcapital");

		  if($query != '')
		  {
		   $this->db->like('numcpt', $query);
		   $this->db->or_like('numor', $query);
		   $this->db->or_like('numot_or', $query);
		   $this->db->or_like('exercice', $query);
		   $this->db->or_like('mtordev', $query);
		   $this->db->or_like('tauxdevar', $query);
		   $this->db->or_like('mtorar', $query);
		   $this->db->or_like('modepmt', $query);
		  }

		  $this->db->order_by('id', 'DESC');
		  return $this->db->get();
		}
	}
?>