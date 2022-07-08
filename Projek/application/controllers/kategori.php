<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kategori extends CI_Controller {
    public function index(){
       

        $this->load->model('kategori_model', 'jenkeg');

        $data['list_kategori']=$this->jenkeg->getAll();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kategori/index',$data);
        $this->load->view('layout/footer');
    }
   
}