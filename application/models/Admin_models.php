<?php

class Admin_models extends CI_Model {

    public function __construct() {
         $this->load->database();
         $this->load->library('session');
    }
    
    public function adherent(){
        $this->db->where('administrateur', 'false');
        $query = $this->db->get('adherent');
        return $query->result_array();
    }
    public function reservation_adherent(){
        $this->db->select('*');
        $this->db->from('reservation','typehabitation');
        $this->db->join('typehabitation','reservation.numero_typehabitation=typehabitation.idtypehabitation');
        $query = $this->db->get();
        //$query = $this->db->get_where('reservation', array('numero_adherent' => $this->numero_adherent()));
        return $query->result_array();
    }
    
    public function supprimer($id){
        $this->db->where('numero_adherent', $id);
        $this->db->delete('adherent');
    }
    
    public function supprime($id){
        $this->db->where('numero_reservation', $id);
        $this->db->delete('reservation');
    }
        /*$login= $this->get_userdata();
        $requete = "SELECT numeroadherent FROM adherent where loginadherent = '$login'";
        $numero = $this->db->query($requete);
        $requete1 = "SELECT * FROM reservation where numeroadherent = '$numero'";
        $a=$this->db->query($requete1);
        return $a;*/
        //return $this->db->insert('adherent', $data);
    
    public function valider($id){
        $data =array(
            'etat_reservation' => 'Valider');
            $this->db->where('numero_reservation' , $id);
            return $this->db->update('reservation',$data);
        }
    
    }
    
    
//    public function affiche_habitation(){
//        $this->db->select('*');
//        $this->db->from('typehabitation');
//        $this->db->join('reservation', 'reservation.numero_typehabitation = typehabitation.idtypehabitation');
//        $this->db->where('idtypehabition =')
//    }

?>