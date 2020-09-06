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
  $this->load->view('indexDev');
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
 }

 function update()
 {
  $data = array(
   $this->input->post('table_column') => $this->input->post('value')
  );

  $this->model_devise->update($data, $this->input->post('id'));
 }

 function delete()
 {
  $this->model_devise->delete($this->input->post('id'));
 }
 

}

?> 