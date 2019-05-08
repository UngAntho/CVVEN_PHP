<?php

class Connexions extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Connexions_models');
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index() {


        $this->load->library('form_validation');

        $this->form_validation->set_rules('id', 'Id', 'required');

        $this->form_validation->set_rules('mdp', 'Mdp', 'required', array('required' => 'You must provide a %s.'));


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('connexions_view');
        } else {

            $result = $this->Connexions_models->authentification();
            
            if (!$result) {
                //$this->session->set_flashdata('noconnect', 'Aucun compte ne correspond à vos identifiants ');
                $this->load->view('connexions_view');
                echo 'Aucun compte ne correspond à vos identifiants et mots de passe';
            } else {
                
                $id=$this->input->post('id');
                $mdp= $this->input->post('mdp');
                $result2 = $this->Connexions_models->admin($id,$mdp) ;
                
                if ($result2 == "t") {
                    $this->load->library('session');
                    $this->session->set_userdata('login_adherent', $result[0]->login_adherent);
                    //$admin=$this->Connexions_models->admin();
                    //print_r($admin);
                    redirect('Admin',$result2);
                } else {
                    $this->load->library('session');
                    $this->session->set_userdata('login_adherent', $result[0]->login_adherent);
                    //$admin=$this->Connexions_models->admin();
                    //print_r($admin);
                    redirect('G');
                }
            }
        }
    }
    public function Deconnexions(){
        $this->session->unset_userdata('user_id');
	$this->session->sess_destroy();
	redirect('Connexions');
    }
}
?>

