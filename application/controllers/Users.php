<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Users extends CI_Controller
	{
		
		public function __construct()
		{
			parent :: __construct();
			$this->load->model('model_user');
		}
		
		public function affichageUser()
		{
			$users = $this->model_user->affichUser();
			$this->load->view('affichageUser',['users' => $users]);
		}

		public function creeUser()
		{
			$this->form_validation->set_rules("log","Login",'required');
			$this->form_validation->set_rules("sex","Sexe",'required');
			$this->form_validation->set_rules("pass","Password",'required');


			$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

			if ($this->form_validation->run()) 
			{
				$data = array(
					"login" => $this->input->post("log"),
					"sexe" => $this->input->post("sex"),
					"password" => md5($this->input->post("pass"))
				);

				$this->model_user->insererUser($data);

				$response = array(
					'success' => true,
					"log" => $this->input->post("log"),
					"sex" => $this->input->post("sex"),
					"pass" => md5($this->input->post("pass"))
				);

				echo json_encode($response);exit;
			} 
			else 
			{
				$this->affichageUser();
			}
			
		}

		//editer un utilisateur
		public function editUser($user_id)
		{
			$unUser = $this->model_user->getUnUser($user_id);
			$this->load->view('editUser',['unUser' => $unUser]);
		}

		//modifier un utilisateur
		public function updateUser($user_id)
		{
			$this->form_validation->set_rules("log","Login",'required');
			$this->form_validation->set_rules("sex","Sexe",'required');
			$this->form_validation->set_rules("pass","Password",'required');

			$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

			if ($this->form_validation->run()) 
			{
				$data = array(
				"login" => $this->input->post("log"),
				"sexe" => $this->input->post("sex"),
				"password" => md5($this->input->post("pass"))
				);

				$this->model_user->updateUser($user_id,$data);

				$this->session->set_flashdata("message","Utilisateur modifié avec succès");

				redirect(base_url()."Users/affichageUser");
			} 
			else 
			{
				$this->editUser($user_id);
			}
		}

		//supprimer un utilisateur
		public function deleteUser($user_id)
		{
			$this->model_user->suppUser($user_id);
			$response = [
				'success' => true
			];
			echo json_encode($response);exit;
		}
	}
?>