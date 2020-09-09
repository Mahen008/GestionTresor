<?php

class Model_orot extends CI_Model
	{
		// function load_data()
		// {
		// 	$this->db->order_by('id', 'DESC');
		// 	$query = $this->db->get('orotcapital');
		// 	return $query->result_array();
		// }

		function listOrr()
		{
			$this->db->order_by('id', 'DESC');
			$query = $this->db->get('orotcapital');
			return $query->result();
		}

		function listOneOrr($id)
		{
			$query = $this->db->get_where('orotcapital',['id' => $id]);
			return $query->row();
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

			// $query = $this->db->query("SELECT DISTINCT pret.numcpt FROM `pret` JOIN `orotcapital` ON `pret`.`numcpt` = `orotcapital`.`numcpt` JOIN `devise` ON `devise`.`numcpt` = `pret`.`numcpt` ");
			// return $query->result();
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

		//----------------------------AUTOCOMPLETION------------------------------------------

		public function autocompletionNumCompte($numcpt){
			$output = '';

			$this->db->like('numcpt', $numcpt);
			// 1621-08-150
			$query = $this->db->get('pret');

			// var_dump($query);exit;

			$output = '<ul class="list-unstyled list">';

			if($query->num_rows() > 0){
				foreach($query->result() as $row) {
					$output .= '<li>'.$row->numcpt.'</li>'; 
				}
			}
			else{
				$output .= '<li>Aucun suggestion</li>'; 
			}

			$output .= '</ul>';  
      		echo $output; 
		}

		// --------------------Recherche ORR----------------------------------------

		function RechercheOrr($query)
		{
		  $output = '';

		  $this->db->select("*");
		  $this->db->from("orotcapital");

		  if($query != '')
		  {
		   $this->db->like('ID', $query);
		   $this->db->or_like('numcpt', $query);
		   $this->db->or_like('numor', $query);
		   $this->db->or_like('numot_or', $query);
		   $this->db->or_like('exercice', $query);
		   $this->db->or_like('mtordev', $query);
		   $this->db->or_like('tauxdevar', $query);
		   $this->db->or_like('modepmt', $query);
		  }

			$this->db->order_by('id', 'DESC');
			$data = $this->db->get();

			if($data->num_rows() > 0){
				foreach($data->result() as $row) {
					$output .= 
						'
							<tr id="tr_'.$row->id.'" data-id="'.$row->id.'">
								<td class="Orr" name="numcpt" style="display:none;">'.$row->id.'</td>
								<td class="Orr" name="numcpt">'.$row->numcpt.'</td>
								<td class="Orr" name="numor">'.$row->numor.'</td>
								<td class="Orr" name="numot_or">'.$row->numot_or.'</td>
								<td class="Orr" name="exercice">'.$row->exercice.'</td>
								<td class="Orr" name="mtordev">'.$row->mtordev.'</td>
								<td class="Orr" name="tauxdevar">'.$row->tauxdevar.'</td>
								<td class="Orr" name="tauxdevar">'.$row->tauxdevar*$row->mtordev.'</td>
								<td class="Orr" name="modepmt">'.$row->modepmt.'</td>
								<td>
									<button type="button" class="btn btn-danger btnDeleteOr" onclick="return alert("Vous voulez vraiment supprimer");" data-id="'.$row->id.'"><i class="fas fa-trash"></i></button>
								</td>
							</tr>
						';
				}
			}
			else{
				$output .= '<tr><td class="text-center" colspan="10">Aucun suggestion<td></tr>'; 
			}
			echo $output;
		}

		//--------------------------------Actualisation----------------------------

		// --------------------Recherche ORR----------------------------------------

		function Actualiser()
		{
		  $output = '';

		  	$this->db->select("*");
		  	$this->db->from("orotcapital");

			$this->db->order_by('id', 'DESC');
			$data = $this->db->get();

			if($data->num_rows() > 0){
				foreach($data->result() as $row) {
					$output .= 
						'
							<tr id="tr_'.$row->id.'" data-id="'.$row->id.'">
								<td class="Orr" name="numcpt" style="display:none;">'.$row->id.'</td>
								<td class="Orr" name="numcpt">'.$row->numcpt.'</td>
								<td class="Orr" name="numor">'.$row->numor.'</td>
								<td class="Orr" name="numot_or">'.$row->numot_or.'</td>
								<td class="Orr" name="exercice">'.$row->exercice.'</td>
								<td class="Orr" name="mtordev">'.$row->mtordev.'</td>
								<td class="Orr" name="tauxdevar">'.$row->tauxdevar.'</td>
								<td class="Orr" name="tauxdevar">'.$row->tauxdevar*$row->mtordev.'</td>
								<td class="Orr" name="modepmt">'.$row->modepmt.'</td>
								<td>
									<button type="button" class="btn btn-danger btnDeleteOr" data-id="'.$row->id.'" onclick="return alert("Vous voulez vraiment supprimer");"><i class="fas fa-trash"></i></button>
								</td>
							</tr>
						';
				}
			}
			else{
				$output .= '<tr><td class="text-center" colspan="10">Aucun suggestion<td></tr>'; 
			}
			echo $output;
		}

		// count ORR
		public function countOrotcapital()
		{
			echo $this->db->count_all('orotcapital'); 
		}

	}
?>