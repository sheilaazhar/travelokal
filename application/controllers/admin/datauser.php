<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class datauser extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->database('travelokal'); // untuk meload database
        $this->load->helper('url'); // meload helper url
        $this->load->model('Mcruduser');
    }
                   
    public function index() // function untuk menampilkan data
    {
        $data['users'] = $this->Mcruduser->read_data()->result(); // mengexecute query
        $this->load->view('admin/datauser', $data);
    }
                   
    public function delete($id_user) { // function untuk menghapus data
        $this->Mcruduser->delete_data($id_user);
        redirect('admin/datauser/index');
    }

}