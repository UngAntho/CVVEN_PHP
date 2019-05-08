<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Admin extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('G_models');
            $this->load->model('Admin_models');
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
            $data['liste']=$this->Admin_models->adherent();
            $data['rsv']=$this->Admin_models->reservation_adherent();
            $this->load->view('admin_view', $data);
	}
        public function suppression($id){
            $this->Admin_models->supprimer($id);
            redirect('Admin');
        }
        public function supprimer($id){
            $this->Admin_models->supprime($id);
            redirect('Admin');
        }
        public function valider($id){
            $this->Admin_models->valider($id);
            redirect('Admin/index');
        }
}
        