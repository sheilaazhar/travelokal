<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class paket extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->database('travelokal'); // untuk meload database
        $this->load->helper('url'); // meload helper url
        $this->load->model('Mpaket');
    }
                       
    public function index() // function untuk menampilkan data
    {
        $paket = $this->Mpaket->read_data()->result(); // mengexecute query
        $p['paket'] = $paket;
        $this->load->view('user/paket', $p);
    }

}