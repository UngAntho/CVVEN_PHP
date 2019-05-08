
<?php

class Reservations extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Reservations_models');
    }

    public function index() {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('date_a', 'Date arrivee', 'required');
        $this->form_validation->set_rules('date_d', 'Date depart', 'required');
        $this->form_validation->set_rules('menage', 'Menage', 'required');
        $this->form_validation->set_rules('pension', 'Pension', 'required');
        $this->form_validation->set_rules('logement', 'Logement', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('reservations_view');

        } else {
            $this->Reservations_models->insert_reservation();
            $this->load->view('reservations_view');
            echo "Votre réservation à été effecutée avec succès !";
        }
    }

}

?>
