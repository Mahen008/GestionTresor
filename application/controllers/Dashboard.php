<?php
    class Dashboard extends CI_Controller {

        public function __construct()
        {
            parent :: __construct();
            $this->load->model('model_dashboard');
        }

        public function display()
        {
            $data['countUser'] = $this->model_dashboard->countUser();
            $data['countPret'] = $this->model_dashboard->countPret();
            $data['countORR'] = $this->model_dashboard->countORR();
            $data['countDevise'] = $this->model_dashboard->countDevise();
            
            $this->load->view('affichageTableauDeBord',$data);
        }
    }
?>