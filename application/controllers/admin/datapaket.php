<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class datapaket extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->database('travelokal'); // untuk meload database
        $this->load->helper('url'); // meload helper url
        $this->load->model('Mcrudpaket');
    }
                       
    public function index() // function untuk menampilkan data
    {
        $paket = $this->Mcrudpaket->read_data()->result(); // mengexecute query
        $p['paket'] = $paket;
        $this->load->view('admin/datapaket', $p);
    }
                       
    public function add() { // functiom untuk menambah data
        $this->load->view('admin/addpaket');
    }
                       
    public function add_process() { // function untuk memproses tambah data
        $Kode_Paket            = $this->input->post('Kode_Paket');
        $Nama_Paket            = $this->input->post('Nama_Paket');
        $Desc_Paket            = $this->input->post('Desc_Paket');
        $Harga_Paket           = $this->input->post('Harga_Paket');
                                       
        $paket['Kode_Paket']    = $Kode_Paket;
        $paket['Nama_Paket']    = $Nama_Paket;
        $paket['Desc_Paket']    = $Desc_Paket;
        $paket['Harga_Paket']   = $Harga_Paket;
                                       
        $this->Mcrudpaket->insert_data($paket);
        redirect('admin/datapaket/index');
    }
                       
    public function edit($Kode_Paket) { // function untuk edit data
        $paket = $this->Mcrudpaket->read_data_by_id($Kode_Paket)->row();
        $p['paket'] = $paket;
        $this->load->view('admin/editpaket', $p);
    }
                       
    public function edit_process() { // function untuk proses edit data
        $Kode_Paket            = $this->input->post('Kode_Paket');
        $Nama_Paket            = $this->input->post('Nama_Paket');
        $Desc_Paket            = $this->input->post('Desc_Paket');
        $Harga_Paket           = $this->input->post('Harga_Paket');
                                       
        $paket['Kode_Paket']    = $Kode_Paket;
        $paket['Nama_Paket']    = $Nama_Paket;
        $paket['Desc_Paket']    = $Desc_Paket;
        $paket['Harga_Paket']   = $Harga_Paket;
                                       
        $this->Mcrudpaket->update_data($Kode_Paket, $paket);
        redirect('admin/datapaket/index');
    }
                       
    public function delete($Kode_Paket) { // function untuk menghapus data
        $this->Mcrudpaket->delete_data($Kode_Paket);
        redirect('admin/datapaket/index');
    }

}