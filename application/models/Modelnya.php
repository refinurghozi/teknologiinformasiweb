<?php
    class Modelnya extends CI_Model {
        function getData() {
            $query = $this->db->get('users');
            return $query->result_array();
            // referensi query result:
            // https://www.codeigniter.com/userguide3/database/results.html
        }
        function addData($data) {
            $this->db->insert('users', $data);
            // insert $data ke tabel ‘barang’
        }
        function delete_item($item){
        
        $this->db->where_in('name', $item);
        $this->db->delete('users');
        }
    }
    
?>