<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hasilpesan extends CI_Controller {

                       
    public function index() // function untuk menampilkan data
    {
        $this->load->view('user/hasilpesan');
    }

}