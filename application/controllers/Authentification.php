 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentification extends CI_Controller {

	
	public function __construct()
	{
		parent :: __construct();
		$this->load->model('model_user');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function signin()
	{
		//echo "s'inscrire";
		$this->form_validation->set_rules("log","Login",'required');
		$this->form_validation->set_rules("pass","Password",'required');

		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

		if ($this->form_validation->run()) {

			$login = $this->input->post("log");    //$email = $_POST['emails'];
			//$password = $this->input->post("pass");
			$password = md5($this->input->post("pass"));
			
			$userExist = $this->model_user->verifUser($login,$password);

			if($userExist){
				return redirect(base_url()."Pret/indexPr");
			}
			else {
				$this->session->set_flashdata('message','Login ou mot de passe incorrect');
				return redirect("Authentification/index");
			}
			//echo "validation passé";
		}
		else
		{
			$this->index();
		}
	}

	public function logout()
	{
		$this->session->unset_userdata("user_id");
		return redirect(base_url()."Authentification/index");
	}
}
