<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Devise extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  $this->load->model('model_devise');
 }

 function indexDev()
 {
    $data['listDevise'] = $this->model_devise->getListDevise();
    $this->load->view('indexDev',$data);
 }

 //editer un devise
 public function editDevise($id)
 {
    $data['unDevise'] = $this->model_devise->getOneDevise($id);
    $this->load->view('editDevise',$data);
 }

 function load_data()
 {
  $data = $this->model_devise->load_data();
  echo json_encode($data);
 }

 function insert()
 {
  $data = array(
   'numcpt' => $this->input->post('numcpt'),
   'devise'  => $this->input->post('devise'),
   'ninf'   => $this->input->post('ninf')
  );

  $this->model_devise->insert($data);

  $response = [
    'success' => true,
     'numcpt' => $this->input->post('numcpt'),
     'devise'  => $this->input->post('devise'),
     'ninf'   => $this->input->post('ninf')
  ];

  echo json_encode($response);exit;
 }

 function update($id)
 {
   $data = array(
      'numcpt' => $this->input->post('numcpt'),
      'devise'  => $this->input->post('devise'),
      'ninf'   => $this->input->post('ninf')
     );

   $this->model_devise->update($data, $id);

   $this->session->set_flashdata("message","Devise modifié avec succès");

	redirect(base_url()."Devise/indexDev");
 }

 function delete($id)
	{
	  $this->model_devise->delete($id);
		$response = [
			'success' => true
		];
		echo json_encode($response);exit;
	}
 

}

?> 