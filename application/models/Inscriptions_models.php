<?php

class Inscriptions_models extends CI_Model {

    public function __construct() {
         $this->load->database();
    }

    
    
    public function insert_adherent(){
        $data = array(
            'login_adherent' => $this->input->post('id'),
            'mdp_adherent' => $this->input->post('mdp'),
            'prenom_adherent' => $this->input->post('prenom'),
            'nom_adherent' => $this->input->post('nom'),
            'adresse_adherent' => $this->input->post('adresse'),
            'ville_adherent' => $this->input->post('ville'),
            'administrateur' => '0',
            'email_adherent' => $this->input->post('email'));
        
        
        return $this->db->insert('adherent', $data);
    }           

}

?>