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
			'lastVal' => $this->input->post('valPret')
		);
		echo json_encode($response);exit;
	 }

	 function update()
	 {
	  $data = array(
	   $this->input->post('table_column') => $this->input->post('value')
	  );

	  $this->model_pret->update($data, $this->input->post('id'));
	 }

	 function delete()
	 {
	  $this->model_pret->delete($this->input->post('id'));
	 }
}
?> 