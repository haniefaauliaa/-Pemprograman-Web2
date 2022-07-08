<?php
class Kegiatan_model extends CI_Model{
    private $table = "kegiatan";
    public function getAll(){
        $query = $this->db->query("select a.id, a.judul, a.kapasitas, a.harga_tiket, a.tanggal, a.narasumber, a.tempat,a.pic, a.foto_flyer, b.nama as jenis_kegiatan from kegiatan a inner join jenis_kegiatan b where a.jenis_id = b.id;");
        return $query->result();
    }
    public function findById($id){
        $query = $this->db->get_where('kegiatan', ['id' => $id]);
        // $this->db->where("id", $id);
        // $query = $this->db->get($this->table);
        return $query->row();
    }
    public function save($data){
        $query = 'insert into kegiatan values (default, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $this->db->query($query, $data);
    }
    
    // public function upload($data){
    //     $query = "update kegiatan set foto_flyer=? where id=?";
    //     $this->db->query($query, $data);
    // }
    public function update($data){
        $query = "update kegiatan set judul=?, kapasitas=?, harga_tiket=?, tanggal=?, narasumber=?, tempat=?, pic=?,foto_flyer=?, jenis_id=? where id=?";
        $this->db->query($query, $data);
    }
    public function delete($data){
        $query = "Delete from kegiatan where id=?";
        $this->db->query($query, $data);
    }
    public function update_foto($array){
        $query = "update kegiatan set foto_flyer=? where id=?";
        $this->db->query($query, $array);
    }

}