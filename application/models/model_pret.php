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

	public function getOnePret($id){
		$query = $this->db->get_where('pret',['id' => $id]);
		return $query->row();
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

		// ------------------------------------------------------------------------------

		// --------------------Recherche ORR----------------------------------------

		function RecherchePret($query)
		{
		  $output = '';

		  $this->db->select("*");
		  $this->db->from("pret");

		  if($query != '')
		  {
				$this->db->like('id', $query);
				$this->db->or_like('numcpt', $query);
				$this->db->or_like('ref', $query);
				$this->db->or_like('libpret', $query);
				$this->db->or_like('datpret', $query);
				$this->db->or_like('bailleur', $query);
		  }

			$this->db->order_by('id', 'DESC');
			$data = $this->db->get();

			if($data->num_rows() > 0){
				foreach($data->result() as $row) {
					$output .= 
						'
							<tr id="tr_'.$row->id.'" data-id="'.$row->id.'">
								<td class="Orr" name="id" style="display:none;">'.$row->id.'</td>
								<td class="Orr" name="numcpt">'.$row->numcpt.'</td>
								<td class="Orr" name="ref">'.$row->ref.'</td>
								<td class="Orr" name="libpret">'.$row->libpret.'</td>
								<td class="Orr" name="datpret">'.$row->datpret.'</td>
								<td class="Orr" name="bailleur">'.$row->bailleur.'</td>
								<td>
								<a href="" class="btn btn-success"><i class="fas fa-edit"></i></a>
									<button type="button" class="btn btn-danger btnDeletePret" data-id="'.$row->id.'"><i class="fas fa-trash"></i></button>
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
		// --------------------Actualisation----------------------------------------

		function Actualiser()
		{
		  $output = '';

		  $this->db->select("*");
		  $this->db->from("pret");

			$this->db->order_by('id', 'DESC');
			$data = $this->db->get();

			if($data->num_rows() > 0){
				foreach($data->result() as $row) {
					$output .= 
						'
							<tr id="tr_'.$row->id.'" data-id="'.$row->id.'">
								<td class="Orr" name="id" style="display:none;">'.$row->id.'</td>
								<td class="Orr" name="numcpt">'.$row->numcpt.'</td>
								<td class="Orr" name="ref">'.$row->ref.'</td>
								<td class="Orr" name="libpret">'.$row->libpret.'</td>
								<td class="Orr" name="datpret">'.$row->datpret.'</td>
								<td class="Orr" name="bailleur">'.$row->bailleur.'</td>
								<td>
									<a href="" class="btn btn-success"><i class="fas fa-edit"></i></a>
									<button type="button" class="btn btn-danger btnDeletePret" data-id="'.$row->id.'"><i class="fas fa-trash"></i></button>
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

		// count pret
		public function countPret()
		{
			echo $this->db->count_all('pret'); 
		}
	}
?>
	