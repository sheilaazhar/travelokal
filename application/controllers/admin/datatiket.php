<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class datatiket extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->database('travelokal'); // untuk meload database
        $this->load->helper('url'); // meload helper url
        $this->load->model('Mpesan');
    }
                       
    public function index() // function untuk menampilkan data
    {
        $pesan = $this->Mpesan->read_data()->result(); // mengexecute query
        $t['pesan'] = $pesan;
        $this->load->view('admin/datatiket', $t);
    }

    public function delete($kode_pesan) { // function untuk menghapus data
        $this->Mpesan->delete_data($kode_pesan);
        redirect('admin/datatiket/index');
    }

}