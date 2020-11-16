<?php

    class Mpaket extends CI_Model {
                       
        function read_data() { // membaca data
            $this->db->select('*');
            $this->db->from('paket');
                                       
            return $this->db->get();
        }
                       
        function read_data_by_id($Kode_Paket) { // memilih data berdasarkan id
            $this->db->select('*');
            $this->db->from('paket');
            $this->db->where('Kode_Paket', $Kode_Paket);
                                       
            return $this->db->get();
        }
    }