<?php

    class Mcruduser extends CI_Model {

        function read_data() { // membaca data
            $this->db->select('*');
            $this->db->from('users');
            return $this->db->get();
        }

        function read_data_by_id($id_user) { // memilih data berdasarkan id
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('id_user', $id_user);
           
            return $this->db->get();
        }
                       
        function delete_data($id_user) { // menghapus data
            $this->db->where('id_user', $id_user);
            $this->db->delete('users');           
        }
                       
    }

?>