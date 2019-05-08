<?php
    class Inscriptions extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('Inscriptions_models');
            $this->load->model('G_models');
        }

        public function index()
        {
            //$this->load->model('Insert_modele');
            $this->load->library('form_validation');

            $this->form_validation->set_rules('nom','Nom','required');
            $this->form_validation->set_rules('prenom','Prenom','required');
            $this->form_validation->set_rules('adresse','Adresse','required');
            $this->form_validation->set_rules('ville','Ville','required');
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('id','Id','required');
            $this->form_validation->set_rules('mdp','Mdp','required', array('required'=>'You must provide a %s.'));

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('inscriptions_view');
            }
            else{
                $this->Inscriptions_models->insert_adherent();
                $this->load->view('message_inscriptions');
            }
        }        
          
    }
?>

