<?php
class Daftar_model extends CI_Model{
    private $table = "daftar";
    public function getAll(){
        $query = $this->db->query("select a.id, a.tanggal_daftar as tanggal, a.alasan, b.username as user, c.judul as kegiatan, d.nama as kategori,  a.nosertifikat from daftar a inner join users b inner join kegiatan c inner join kategori_peserta d where a.users_id = b.id and a.kegiatan_id = c.id and a.kategori_peserta_id = d.id;");
        return $query->result();
    }
    public function findById($id){
        $query = $this->db->get_where('daftar', ['id' => $id]);
        // $this->db->where("id", $id);
        // $query = $this->db->get($this->table);
        return $query->row();
    }

    public function save($data){
        $query = 'insert into daftar values (default, now(), ?, ?, ?, ?, ?)';
        $this->db->query($query, $data);
    }
    
    public function getUsers(){
        $query = $this->db->query("select id, username from users where not role = 'administrator';");
        return $query->result();
    }
    public function getKegiatan(){
        $query = $this->db->query("select id, judul from kegiatan;");
        return $query->result();
    }
    public function getKategori(){
        $query = $this->db->query("select * from kategori_peserta;");
        return $query->result();
    }

    public function update($data){
        $query = "update daftar set alasan=?, users_id=?, kegiatan_id=?,  kategori_peserta_id=? ,nosertifikat=?  where id=?";
        $this->db->query($query, $data);
    }
    public function delete($data){
        $query = "Delete from daftar where id=?";
        $this->db->query($query, $data);
    }
}