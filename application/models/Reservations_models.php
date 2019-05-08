<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Reservations_models extends CI_Model {

    public function __construct() {
        $this->load->database();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    /**
     * insérer une réservation 
     * @return type 
     */
    public function insert_reservation(){
        $login = $this->session->userdata('login_adherent');
        $this->db->select('numero_adherent')->where(array('login_adherent' => $login));
        $query = $this->db->get('adherent');
        foreach ($query->result() as $row) {
            $numeroadherent = $row->numero_adherent;
        }
//        $datea =$this->input->post('date_a');
//        $date_a=date('Y-m-d',strtotime($datea));
//        
//        $dated =$this->input->post('date_d');
//        $date_d=date('Y-m-d',strtotime($dated));
        $data = array(
            'type_reservation' => 'internet',
            'date_reservation' => date('d-m-Y'),
            'dateArriver_reservation' => $this->input->post('date_a'),
            'dateDepart_reservation' => $this->input->post('date_d'),
            'etat_reservation' => 'en attente',
            'numero_adherent'=> $numeroadherent,
            'numero_typehabitation' => $this->input->post('logement'),
            'type_pension' => $this->input->post('pension'),
            'menage' => $this->input->post('menage'));
        
        
        return $this->db->insert('reservation', $data);
    }

}
