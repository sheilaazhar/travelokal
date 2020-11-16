<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pesan extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->database('travelokal'); // untuk meload database
        $this->load->helper('url'); // meload helper url
        $this->load->model('Mpesan');
    }
                       
    public function index() // function untuk menampilkan data
    {
        $pesan['paketdata'] = $this->Mpesan->get_kodepaket();
        $s['pesan'] = $this->Mpesan->read_data()->result(); // mengexecute query
        $s['pesan'] = $pesan;
        $this->load->view('user/Pesan', $pesan);
    }
                       
    public function add_process() { // function untuk memproses tambah data

        $Kode_paket          = $this->input->post('Kode_paket');
        $nama_pesan          = $this->input->post('nama_pesan');
        $no_telp             = $this->input->post('no_telp');
        $tgl_berangkat       = $this->input->post('tgl_berangkat');
        $jam                 = $this->input->post('jam');
        $jml_pesan           = $this->input->post('jml_pesan');

        date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
        $now = date('Y-m-d ');
        $pesan['tgl_pesan']     = $now;

        $harga = $this->Mpesan->get_hargapaket($Kode_paket);
        $pesan['total_harga'] = $harga*$jml_pesan;
        
        $id_user = $this->session->userdata('id_user'); 
        $pesan['id_user']      = $id_user;

        $pesan['Kode_paket']    = $Kode_paket;
        $pesan['nama_pesan']    = $nama_pesan;
        $pesan['no_telp']       = $no_telp;
        $pesan['tgl_berangkat'] = $tgl_berangkat;
        $pesan['jam']           = $jam;
        $pesan['jml_pesan']     = $jml_pesan;
        
                                       
        $this->Mpesan->insert_data($pesan);
        redirect('user/hasilpesan');
    }

}