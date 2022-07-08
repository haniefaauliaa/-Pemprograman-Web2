<?php
class Jeniskegiatan_model extends CI_Model{
    private $table = "jenis_kegiatan";

    public function getAll(){
        $query = $this->db->get($this->table);
        return $query->result();

        
    }
    public function delete($data){
        $query = "Delete from jenis_kegiatan where id=?";
        $this->db->query($query, $data);
    }
    public function save($data){
        $query = 'insert into jenis_kegiatan values (default, ?)';
        $this->db->query($query, $data);
    }

    
}