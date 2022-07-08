<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class jeniskegiatan extends CI_Controller {
    public function index(){
       
        $this->load->model('jeniskegiatan_model', 'jenkeg');

        $data['list_jenkeg']=$this->jenkeg->getAll();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jeniskegiatan/index',$data);
        $this->load->view('layout/footer');
    }
    public function delete($id){
        $this->load->model('jeniskegiatan_model', 'jenkeg');
        $data['id'] = $id; 
        $this->jenkeg->delete($data);
        redirect('jeniskegiatan', 'refresh');
    }
    public function form()
    {
        // render view
        $this->load->view('jeniskegiatan/form');
    }
    
    public function save(){
        $this->load->model('Jeniskegiatan_model', 'jenkeg');
        $nama = $this->input->post('nama');

        $data = array('nama'=> $nama);
        $this->jenkeg->save($data);
        redirect('jeniskegiatan', 'refresh');
    }
}