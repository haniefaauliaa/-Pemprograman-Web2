<?php
class Kategori_model extends CI_Model{
    private $table = "kategori_peserta";

    public function getAll(){
        $query = $this->db->get($this->table);
        return $query->result();
    }
   

    
}