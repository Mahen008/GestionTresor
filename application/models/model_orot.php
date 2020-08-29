<?php
	
	class model_orot extends CI_Model
	{

		public function insererOROT($data)
		{
			$this->db->insert("idd",$data);
		}

		public function AffichageOROT()
		{
			$this->db->select(['pret.id','pret.numcpt','orotcapital.idd','orotcapital.numor','orotcapital.numot_or','orotcapital.exercice','orotcapital.mtordev','orotcapital.tauxdevar','orotcapital.mtorar','orotcapital.modepmt']);
			$this->db->from('orotcapital');
			$this->db->join('pret','pret.numcpt = orotcapital.numcpt');
			$affichOROT = $this->db->get();
			return $affichOROT->result();
		}

		public function ResearchOrdreOperTres($dataFilter){
			$query = $this->db->query("SELECT * FROM pret WHERE pret.numcpt LIKE '%".$dataFilter."%'");

			//  ["affected_rows"]=> int(1) n ijerevana hoe nety sa tsia
			// var_dump($query);exit;

			$output = '<ul class="list-unstyled hasLiAutocompleted">'; 
			
			if($query->num_rows() > 0){
				foreach($query->result() as $row)
				{
					$output .= '<li class="">'.$row["numcpt"].'</li>'; 
				}
			}
			else{
				$output .= '<li>Aucune suggestion</li>'; 
			}
			
			$output .= '</ul>'; 
			return $output;
		}
	}

?>