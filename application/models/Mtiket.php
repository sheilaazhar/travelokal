<?php

    class Mtiket extends CI_Model {
                       
        function read_data() { // membaca data
            $this->db->select('*');
            $this->db->from('pesan');
                                       
            return $this->db->get();
        }
                       
        function read_data_by_id($kode_pesan) { // memilih data berdasarkan id
            $this->db->select('*');
            $this->db->from('pesan');
            $this->db->where('kode_pesan', $kode_pesan);
                                       
            return $this->db->get();
        }
    }