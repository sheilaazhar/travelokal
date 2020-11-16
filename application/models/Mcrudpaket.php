<?php

    class Mcrudpaket extends CI_Model {
                       
        function read_data() { // membaca data
            $this->db->select('*');
            $this->db->from('paket');
                                       
            return $this->db->get();
        }
                       
        function insert_data($paket) { // insert data
            $this->db->insert('paket', $paket);
        }
                       
        function read_data_by_id($Kode_Paket) { // memilih data berdasarkan id
            $this->db->select('*');
            $this->db->from('paket');
            $this->db->where('Kode_Paket', $Kode_Paket);
                                       
            return $this->db->get();
        }
                       
        function update_data($Kode_Paket, $paket) { // mengupdate data
            $this->db->where('Kode_Paket', $Kode_Paket);
            $this->db->update('paket', $paket);            
        }
                       
        function delete_data($Kode_Paket) { // menghapus data
            $this->db->where('Kode_Paket', $Kode_Paket);
            $this->db->delete('paket');           
        }
                       
    }

?>