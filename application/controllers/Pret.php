<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pret extends CI_Controller {

	 public function __construct()
	 {
	  parent::__construct();
	  $this->load->model('model_pret');
	 }

	 function indexPret()
	 {
	  $this->load->view('indexPret');
	 }

	 function indexPr()
	 {
		$data['listPret'] = $this->model_pret->getListPret();
		// var_dump($data);exit;
	  	$this->load->view('indexPr',$data);
	 }

	 function editPret($id)
	 {
		$data['unPRET'] = $this->model_pret->getOnePret($id);
		// var_dump($data);exit;
	  	$this->load->view('editPret',$data);
	 }

	 function load_data()
	 {
	  $data = $this->model_pret->load_data();
	  echo json_encode($data);
	 }

	 function insert()
	 {
	  $data = array(
	    'ref' => $this->input->post('ref'),
		'libpret' => $this->input->post('libpret'),
		'datpret' => $this->input->post('datpret'),
		'bailleur' => $this->input->post('bailleur'),
		'numcpt' => $this->input->post('numcpt')
	  );
	//   var_dump($data);exit;
	  $this->model_pret->insert($data);

	  $response = array(
			'success' => true,
			'ref' => $this->input->post('ref'),
			'libpret' => $this->input->post('libpret'),
			'datpret' => $this->input->post('datpret'),
			'bailleur' => $this->input->post('bailleur'),
			'numcpt' => $this->input->post('numcpt'),
		);
		echo json_encode($response);exit;
	 }

	function update($id)
	 {
		$data = array(
			'ref' => $this->input->post('ref'),
			'libpret' => $this->input->post('libpret'),
			'datpret' => $this->input->post('datpret'),
			'bailleur' => $this->input->post('bailleur'),
			'numcpt' => $this->input->post('numcpt')
		);

		$this->model_pret->update($data,$id);

		$this->session->set_flashdata("message","Prêt modifié avec succès");

		redirect(base_url()."Pret/indexPr");

		// $response = array(
		// 	'success' => true,
		// 	'ref' => $this->input->post('ref'),
		// 	'libpret' => $this->input->post('libpret'),
		// 	'datpret' => $this->input->post('datpret'),
		// 	'bailleur' => $this->input->post('bailleur'),
		// 	'numcpt' => $this->input->post('numcpt'),
		// );
		// echo json_encode($response);exit;
	}

	 function delete($id)
	 {
	  $this->model_pret->delete($id);
		$response = [
			'success' => true
		];
		echo json_encode($response);exit;
	 }

	public function recherchePret($query)
	{
		echo $this->model_pret->RecherchePret($query);
	}

	public function Actualiser()
	{
		echo $this->model_pret->Actualiser();
	}

	
}
?> 