<?php
	class ORR extends CI_Controller
	{
		public function __construct()
		{
			parent ::__construct();
			$this->load->model("model_orot");
			
		}
		
		public function indexORR()
		{
			$afficheOROT = $this->model_orot->AffichageOROT();
			$this->load->view('indexORR',['afficheOROT' => $afficheOROT]);
			
		}

		public function EditionOR()
		{
			// $afficheOROT = $this->model_orot->AffichageOROT();
			$this->load->view('EditionOR');
			
		}

		public function EditionOT()
		{
			// $afficheOROT = $this->model_orot->AffichageOROT();
			$this->load->view('EditionOT');
		}

		public function FiltreOrdreOperTres($dataFilter){
			// $dataFilter = $this->input->post("dataFilter");
			// var_dump($data);exit;
			// $dataFilter = 100;
			echo $this->model_orot->ResearchOrdreOperTres($dataFilter);
		}
	}
?>