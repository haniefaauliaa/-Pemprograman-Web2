<?php
class Users_model extends CI_Model{
    private $table = "users";
    public function getAll(){
        $query = $this->db->get("users");
        return $query->result();
    }
    public function findById($id){
        $query = $this->db->get_where('users', ['id' => $id]);
        // $this->db->where("id", $id);
        // $query = $this->db->get($this->table);
        return $query->row();
    }

    public function findRole($id,$role){
        return $this->db->get_where('users', ['id'=> $id, 'role' => $role])->result();
    }

    public function save($data){
        $query = 'insert into users values (default, ?, md5(?), ?, now(), now(), 1, "public")';
        $this->db->query($query, $data);
    }

    public function delete($data){
        $query = "Delete from users where id=?";
        $this->db->query($query, $data);
    }

    public function update($data){
        $query = "update users set username=?, password=?, email=? where id=?";
        $this->db->query($query, $data);
    }
}