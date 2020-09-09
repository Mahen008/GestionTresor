<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ORR extends CI_Controller {

	 public function __construct()
	 {
	  parent::__construct();
	  $this->load->model('model_orot');
	 }

	//  function indexORR()
	//  {
	//   $this->load->view('indexORR');
	//  }

	 function indexOR()
	 {
		$data['listORs'] = $this->model_orot->listOrr();
		// var_dump($data);exit;
	  	$this->load->view('indexOR',$data);
	 }

	 function editionsOR()
	 {
		$data['listORR'] = $this->model_orot->getListORR();
		// var_dump($data);exit;
	  	$this->load->view('editionsOR',$data);
	 }

	 function indexEdition()
	 {
	  $data['affiche'] = $this->model_orot->getListORR();
	//   var_dump($data);exit;
	  $this->load->view('indexEdition', $data);
	 }

	 function editORR($id)
	 {
	  	$data['unORR'] = $this->model_orot->listOneOrr($id);
	  	$this->load->view('editORR', $data);
	 }

	 function load_data()
	 {
	  $data = $this->model_orot->load_data();
	  echo json_encode($data);
	 }

	public function EditionOR($id)
	{
		$data['editionOROT'] = $this->model_orot->editionOR($id);
		$this->load->view('EditionOR',$data);
		// var_dump($data);exit;

		// -------------------------------------------------------------

		// $mpdf = new \Mpdf\Mpdf();
		// $html = $this->load->view('EditionOR',$data,true);


		// foreach ($data as $row){
		// 	// var_dump($row);exit;
		// 	// $html = '<p>'.$row->numcpt.'</p>';
		// 	$html = '
			
		// 				<style>
		// 					#police{
		// 						font-weight: normal;
		// 					}
		// 					ul.list-font{
		// 						font-size : 11px;
		// 					}
		// 					.align-vertical{
		// 						display:flex;
		// 						justify-content: space-around;
		// 					}
		// 				</style>
		// 				<div class="content" style="width: 1350px;">
		// 					<div class="col-md-10">
		// 						<!-- card box -->
		// 						<div class="card-box align-vertical">
		// 							<center>
		// 								<ul class="list-unstyled mb-0">
		// 									<li>REPUBLIQUE <br> DE MADAGASCAR</li>
		// 									<li>______</li>
		// 									<li>FARITANY <br> d ............</li>
		// 									<li>______</li>
		// 									<li>N° '.$row->numcpt.'</li>
		// 								</ul>
		// 							</center>

		// 							<center>
		// 								<ul class="list-unstyled mb-0">
		// 									<li>EXERCICE '.$row->exercice.'</li>
		// 									<li>______</li>
		// 									<li>OPERATION TRESORERIE</li>
		// 									<li>______</li>
		// 									<li><h4><strong><b>ORDRE DE RECETTE</b></strong></h4></li>
		// 									<li>AU COMPTE: N°'.$row->numcpt.'</li>
		// 									<li>NI: '.$row->id.'</li>
		// 										<br>
		// 									<li>EMPRUNT CONTRACTE AUPRES DE '.$row->bailleur.' SUIVANT LA CONVENTION DU '.$row->datpret.'</li>
		// 										<br><br>
		// 									<li>________</li>
		// 								</ul>
		// 							</center>
		// 							<center>
		// 								<ul class="list-unstyled mb-0 list-font">
		// 									<li>Modèle n°'.$row->ninf.'</li>
		// 									<li>______</li>
		// 									<li>Art: <span>130</span></li>
		// 									<li>'.$row->today.'</li>
		// 									<li>______</li>
		// 								</ul>
		// 							</center>
		// 						</div>
		// 						<!-- end card box -->
		// 						<br>

		// 						<div class="row" style="margin-left: 90px;">
		// 							<p> M. l <strong>AGENT COMPTABLE CENTRAL DU TRESOR ET DE LA DETTE PUBLIQUE</strong>
		// 								est invité à recevoir de M <b>'.$row->bailleur.'</b> la somme <br> de <b>(Ar.'.$row->mtordev*$row->tauxdevar.')
		// 								<br><span class="montantEnLettre"></span>/~</b> 
		// 							</p>
		// 							<p style="margin-left: 40px;">pour les motifs ci-après :
		// 							</p>
		// 						</div>

		// 						<table style="margin-left: 90px;">
		// 							<br>
		// 							<tbody>
		// 								<tr>
		// 									<td>Prise en charge des dépenses payées sur <br>
		// 									fonds d emprunt contracté auprès du <br> bailleur'.$row->bailleur.' suivant Convention du <br>'.$row->datpret.'. <span class="float-right"></span></td>
		// 								</tr>
		// 								<tr>
		// 									<td>'.$row->modepmt.'<strong><br> N° GCL NO. (2019) 5</strong></td>
		// 								</tr>
		// 								<tr>
		// 									<td><strong>'.$row->libpret.'</strong> <span class="float-right"></span></td>
		// 								</tr>
		// 								<tr>
		// 									<td>devise  montant devise       taux<span class="float-right"></span></td>
		// 								</tr>
		// 								<tr>
		// 									<td>CNY        '.$row->mtordev.'  X   '.$row->tauxdevar.' = </td>
		// 									<td style=" border: solid black; width: 400px;height: 70px;"><center><strong><span name="montants">'.$row->mtordev * $row->tauxdevar.'</strong></center></span></td>
		// 								</tr>
		// 							</tbody>
		// 						</table>

		// 						<center>
		// 							<br><br>
		// 							<p>A ANTANANARIVO, le</p>
		// 						</center>
		// 					</div>

		// 				</div>
		// 			';
		// }
		


		// $mpdf->WriteHTML($html);
		// $mpdf->output();
	}

	public function EditionOT($numcpt)
	{
		$data['editionOROT'] = $this->model_orot->EditionOT($numcpt);
		$data['editionOROTs'] = $this->model_orot->EditionOTs($numcpt);
		$data['editionOROTss'] = $this->model_orot->EditionOTss($numcpt);
		$this->load->view('EditionOT',$data);
	}

	 function insert()
	 {
	  $data = array(
	    'numcpt' => $this->input->post('numcpt'),
		'numor'  => $this->input->post('numor'),
		'numot_or'   => $this->input->post('numot_or'),
		'exercice'   => $this->input->post('exercice'),
		'mtordev'   => $this->input->post('mtordev'),
		'tauxdevar'   => $this->input->post('tauxdevar'),
		'modepmt'   => $this->input->post('modepmt')
	  );

	  $this->model_orot->insert($data);

	  $response = array(
			'success' => true,
			'numcpt' => $this->input->post('numcpt'),
			'numor'  => $this->input->post('numor'),
			'numot_or'   => $this->input->post('numot_or'),
			'exercice'   => $this->input->post('exercice'),
			'mtordev'   => $this->input->post('mtordev'),
			'tauxdevar'   => $this->input->post('tauxdevar'),
			'modepmt'   => $this->input->post('modepmt')
		);
		echo json_encode($response);exit;
	 }

	 function update($id)
	 {
		$data = array(
			'numcpt' => $this->input->post('numcpt'),
			'numor'  => $this->input->post('numor'),
			'numot_or'   => $this->input->post('numot_or'),
			'exercice'   => $this->input->post('exercice'),
			'mtordev'   => $this->input->post('mtordev'),
			'tauxdevar'   => $this->input->post('tauxdevar'),
			'modepmt'   => $this->input->post('modepmt')
		  );
	
		$this->model_orot->update($data, $id);

		$this->session->set_flashdata("message","ORR modifié avec succès");

		redirect(base_url()."ORR/indexOR");
	 }

	function delete($id)
	{
	  $this->model_orot->delete($id);
		$response = [
			'success' => true
		];
		echo json_encode($response);exit;
	}

	// public function autocompleted($numcpt='1621-08-150')
	public function autocompleted($numcpt)
	{
		echo $this->model_orot->autocompletionNumCompte($numcpt);
	}

	public function rechercheOrr($query)
	{
		echo $this->model_orot->RechercheOrr($query);
	}

	public function Actualiser()
	{
		echo $this->model_orot->Actualiser();
	}
}
?> 