<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class daftar extends CI_Controller {
    public function index(){
        $this->load->model("daftar_model", "daftar");
        $list_daftar = $this->daftar->getAll();
        $data["list_daftar"] = $list_daftar;
        $this->load->view("daftar/index",$data);
        
    }

    

    public function form()
    {
        $this->load->model("daftar_model", "daftar");
        $list_kategori= $this->daftar->getKategori();
        $data["list_kategori"] = $list_kategori;

        $list_kegiatan= $this->daftar->getKegiatan();
        $data["list_kegiatan"] = $list_kegiatan;

        $list_users= $this->daftar->getUsers();
        $data["list_users"] = $list_users;
        $this->load->view('daftar/form', $data);
    }

    public function save(){
        $this->load->model('daftar_model', 'daftar');
        $alasan = $this->input->post('alasan');
        $users_id = $this->input->post('users_id');
        $kegiatan_id = $this->input->post('kegiatan_id');
        $kategori_peserta_id = $this->input->post('kategori_peserta_id');
        $nosertifikat = $this->input->post('nosertifikat');

        $data = array('alasan'=> $alasan, 'users_id' => $users_id, 'kegiatan_id' => $kegiatan_id, 'kategori_peserta_id'=>$kategori_peserta_id, 'nosertifikat'=>$nosertifikat);
        $this->daftar->save($data);

        redirect('daftar', 'refresh');
    }

    public function update($id){
        $this->load->model('daftar_model', 'daftar');
        $alasan = $this->input->post('alasan');
        $users_id = $this->input->post('users_id');
        $kegiatan_id = $this->input->post('kegiatan_id');
        $kategori_peserta_id = $this->input->post('kategori_peserta_id');
        $nosertifikat = $this->input->post('nosertifikat');
        $data = array('alasan' => $alasan, 'users_id'=> $users_id, 'kegiatan_id' => $kegiatan_id, 'kategori_peserta_id' => $kategori_peserta_id, 'nosertifikat'=>$nosertifikat, 'id'=>$id);
        $this->daftar->update($data);
        redirect('daftar', 'refresh');
    }

    public function edit($id){
        $this->load->model('daftar_model', 'daftar');
        $data['daftar'] = $this->daftar->findById($id);
        $list_kategori= $this->daftar->getKategori();
        $data["list_kategori"] = $list_kategori;

        $list_kegiatan= $this->daftar->getKegiatan();
        $data["list_kegiatan"] = $list_kegiatan;

        $list_users= $this->daftar->getUsers();
        $data["list_users"] = $list_users;
        $this->load->view('daftar/edit', $data);
    }
    public function delete($id){
        $this->load->model('daftar_model', 'daftar');
        $data['id'] = $id; 
        $this->daftar->delete($data);
        redirect('daftar', 'refresh');
    }
}