<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Connexions_models extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    protected $table = 'adherent';

    public function authentification() {
        $id = $this->input->post('id');
        $mdp = $this->input->post('mdp');
        return $this->db->select('login_adherent,mdp_adherent')
                        ->from($this->table)
                        ->where('login_adherent', $id)
                        ->where('mdp_adherent', $mdp)
                        ->get()
                        ->result();
    }

    public function admin($id, $mdp) {
        $this->db->select('administrateur');
        $this->db->from('adherent');
        $this->db->where('login_adherent', $id);
        $this->db->where('mdp_adherent', $mdp);
        $query = $this->db->get();

        foreach ($query->result_array() as $admin) {
            return $admin['administrateur'];
        }
    }

}
