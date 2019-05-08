<?php

class G_models extends CI_Model {

    public function __construct() {
         $this->load->database();
         $this->load->library('session');
    }
    
    public function numero_adherent(){
        $login= $this->session->userdata('login_adherent');
        $requete = "SELECT numero_adherent FROM adherent where login_adherent = '$login'";
        //$requete = $this->db->get_where('adherent',array('loginadherent'=>$login));
        
        $req = $this->db->query($requete);
        $abc = $req->row(0);
        //echo json_decode($numero, true);
        $numero= $abc->numero_adherent;
        return $numero;
    }
    
    public function affiche_typehabitation(){
        
    }
    public function affiche_adherent(){
        $query = $this->db->get_where('adherent', array('numero_adherent' => $this->numero_adherent()));
        return $query->result_array();
        
        /*$login= $this->get_userdata();
        $requete = "SELECT numeroadherent FROM adherent where loginadherent = '$login'";
        $numero = $this->db->query($requete);
        $requete1 = "SELECT * FROM reservation where numeroadherent = '$numero'";
        $a=$this->db->query($requete1);
        return $a;*/
        //return $this->db->insert('adherent', $data);
    }
    
    public function affiche_reservation(){
        $this->db->select('*');
        $this->db->from('reservation','typehabitation');
        $this->db->join('typehabitation','reservation.numero_typehabitation=typehabitation.idtypehabitation');
        $this->db->where(array('numero_adherent' => $this->numero_adherent()));
        $query = $this->db->get();
        //$query = $this->db->get_where('reservation', array('numero_adherent' => $this->numero_adherent()));
        return $query->result_array();
    }
    
//    public function affiche_habitation(){
//        $this->db->select('*');
//        $this->db->from('typehabitation');
//        $this->db->join('reservation', 'reservation.numero_typehabitation = typehabitation.idtypehabitation');
//        $this->db->where('idtypehabition =')
//    }
    
    public function change_mdp($numero){
        $data =array(
            'mdp_adherent' => $this->input->post('nouveau_mdp'));
            $this->db->where('numero_adherent' , $numero);
            return $this->db->update('adherent',$data);
    }
    public function verification_mdp(){
                $numero = $this->G_models->numero_adherent();
                //$mdp = $this->input->post('mdp');
                
                $requete = "SELECT mdp_adherent FROM adherent WHERE numero_adherent='$numero'";

//                return $this->db->select('mdp_adherent')
//                ->from($this->table)
//                ->where('numero_adherent', $numero)
//                ->where('mdp_adherent', $mdp)->get()->result();
                $req = $this->db->query($requete);
                $abc = $req->row(0);
                //echo json_decode($numero, true);
                $mdpp= $abc->mdp_adherent;
                //var_dump($mdpp);
                return $mdpp;
    }
    
    public function update_adherent($numero){
        $data =array(
            'login_adherent' => $this->input->post('id'),
            'mdp_adherent' => $this->input->post('mdp'),
            'prenom_adherent' => $this->input->post('prenom'),
            'nom_adherent' => $this->input->post('nom'),
            'adresse_adherent' => $this->input->post('adresse'),
            'ville_adherent' => $this->input->post('ville'),
            'administrateur' => '0',
            'email_adherent' => $this->input->post('email'));
        
            $this->db->where('numero_adherent' , $numero);
            return $this->db->update('adherent',$data);
    }

}

?>