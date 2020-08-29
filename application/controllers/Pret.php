<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Pret extends CI_Controller
	{
		public function __construct()
		{
			parent ::__construct();
			$this->load->model("model_pret");
			
		}

		public function indexPret()
		{
			$affichpret = $this->model_pret->affichepret();
			$this->load->view('indexPret',['affichpret' => $affichpret]);
			
		}

		//ajout
		public function Ajouter()
		{	
			$this->form_validation->set_rules("re","Réference Prêt");
			$this->form_validation->set_rules("libpre","Libellé Prêt");
			$this->form_validation->set_rules("datpre","Date du prêt","required");
			$this->form_validation->set_rules("bailleu","Bailleur de fond");
			$this->form_validation->set_rules("numcp","Numéro de compte");

			$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

			if ($this->form_validation->run()) {
				
				$data = array(
					"ref" => $this->input->post("re"),
					"libpret" => $this->input->post("libpre"),
					"datpret" => $this->input->post("datpre"),
					"bailleur" => $this->input->post("bailleu"),
					"numcpt" => $this->input->post("numcp")
				);

				if ($this->model_pret->insererpret($data)) {
					return redirect(base_url()."Pret/indexPret");
				}

				else{
					return redirect(base_url()."Pret/indexPret");
				}

			}
			else
			{
				$this->indexPret();
			}
		}

		public function editPret($id)
		{
			$unPret = $this->model_pret->getpret($id);
			$this->load->view('editPret',['unPret' => $unPret]);
		}

		public function updatePret($id)
		{	
			
			$this->form_validation->set_rules("re","Réference Prêt");
			$this->form_validation->set_rules("libpre","Libellé Prêt");
			$this->form_validation->set_rules("datpre","Date du prêt","required");
			$this->form_validation->set_rules("bailleu","Bailleur de fond");
			$this->form_validation->set_rules("numcp","Numéro de compte");

			$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

			if ($this->form_validation->run()) {
				
				$data = array(
					"ref" => $this->input->post("re"),
					"libpret" => $this->input->post("libpre"),
					"datpret" => $this->input->post("datpre"),
					"bailleur" => $this->input->post("bailleu"),
					"numcpt" => $this->input->post("numcp")
				);

				if ($this->model_pret->updatePret($id,$data)) {
					return redirect(base_url()."Pret/indexPret");
				}

				else{
					return redirect(base_url()."Pret/indexPret");
				}

			}

			else
			{
				$this->model_pret($id);
			}
		}

		public function deletePret($id)
		{
			if ($this->model_pret->suppret($id)) {
				return redirect("Pret/indexPret");
			}
		}
	}
?>