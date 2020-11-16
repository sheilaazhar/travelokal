<?php

    class Mpesan extends CI_Model {
                       
        function read_data() { // membaca data
            $this->db->select('*');
            $this->db->from('pesan');
                                       
            return $this->db->get();
        }

        function read_data_user($id_user){
            $this->db->select('*');
            $this->db->from('pesan');
            $this->db->where('id_user',$id_user);
                                       
            return $this->db->get();
        }

        function get_kodepaket(){
            $query = $this->db->query('SELECT Kode_paket FROM paket');
            return $query->result();    
        }

        function get_hargapaket($Kode_paket) {
            //$query = $this->db->query('SELECT Harga_Paket FROM paket WHERE Kode_paket = " '.$Kode_paket.' " ');
            $this->db->select('Harga_Paket')->from('paket')->where('Kode_paket',$Kode_paket);
            $query = $this->db->get();

            if ($query->num_rows() > 0) {
                return $query->row()->Harga_Paket;
            }
            return false;
        }
                       
        function insert_data($pesan) { // insert data
            $this->db->insert('pesan', $pesan);
        }
                       
        function read_data_by_id($kode_pesan) { // memilih data berdasarkan id
            $this->db->select('*');
            $this->db->from('pesan');
            $this->db->where('kode_pesan', $kode_pesan);
                                       
            return $this->db->get();
        }

        function delete_data($kode_pesan) { // menghapus data
            $this->db->where('kode_pesan', $kode_pesan);
            $this->db->delete('pesan');           
        }
                       
    }

?>