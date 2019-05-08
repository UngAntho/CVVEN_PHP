<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class G extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('G_models');
        }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            $data['adherent'] = $this->G_models->affiche_adherent();
            $data['reservation'] = $this->G_models->affiche_reservation();
            $this->load->view('accueil_view', $data);
	}
        
        public function Mdp(){
            $this->load->library('form_validation');

            $this->form_validation->set_rules('mdp','Mot de passe','required');
            $this->form_validation->set_rules('mdp1','Mot de passe 1','required');
            $this->form_validation->set_rules('nouveau_mdp','Nouveau mot de passe','required');
            
            if ($this->form_validation->run() === FALSE){
                $this->load->view('Mdp_view');
            }
            else{
                if($this->input->post('mdp') != $this->input->post('mdp1')){
                    $this->load->view('Mdp_view');
                    echo 'Les  2 mots de passe sont différents';
                }
                    else{
                                           
                        if($this->input->post('mdp') != $this->G_models->verification_mdp()){
                            $this->load->view('Mdp_view');
                            echo 'Le mot de passe est pas le bon';
                        }
                        else{
                            //$numero = print_r($this->G_models->numero_adherent());
                            $this->G_models->change_mdp($this->G_models->numero_adherent());
                            $this->load->view('Mdp_view');
                            echo 'Mot de passe modifié avec succès !';
                        }
                    }
            }
        }
        
        public function Perso(){
            
            $data['adherent'] = $this->G_models->affiche_adherent();
            $data['update'] = $this->G_models->update_adherent($this->G_models->numero_adherent());
            $this->load->view('Perso_view', $data);
        }
}
        