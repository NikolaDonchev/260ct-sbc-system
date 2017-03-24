<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bookings extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('is_logged_in')) {
            redirect('home');
        }

    }

    public function index() {
        $data['page'] = "Bookings";

        $this->load->view('snippets/header', $data);
        $this->load->view('vwMakeBooking');    
        $this->load->view('snippets/footer');
    }

}