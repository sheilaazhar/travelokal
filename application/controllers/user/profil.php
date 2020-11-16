<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profil extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->database('travelokal'); // untuk meload database
        $this->load->helper('url'); // meload helper url
        $this->load->model('Mpesan');
    }
                       
    public function index() // function untuk menampilkan data
    {
        $id_user = $this->session->userdata('id_user');
        //$pesan = $this->Mpesan->read_data()->result();
        $pesan = $this->Mpesan->read_data_user($id_user)->result(); // mengexecute query
        $p['pesan'] = $pesan;
        $this->load->view('user/profil', $p);
    }
}