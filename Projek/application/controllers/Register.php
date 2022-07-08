<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller {
    public function index(){
        $data = [];
        $this->load->view('register',$data);
    }
   
    public function otentikasi(){
        $this->load->model("user_model","users");
        $_username = $this->input->post('username'); 
        $_password = $this->input->post('password');

        $row = $this->users->login($_username,$_password);
        if(isset($row)){// jika user terdaftar di database
            $this->session->set_userdata('USERNAME',$row->username);
            $this->session->set_userdata('ROLE',$row->role);
            $this->session->set_userdata('USERS',$row);
            
            redirect(base_url().'index.php/kegiatan');
        }else{// jika user tidak (username password salah)
            redirect(base_url().'index.php/login?status=f'); 
        }

    }

    public function logout(){
        $this->session->unset_userdata('USERNAME');
        $this->session->unset_userdata('ROLE');
        $this->session->unset_userdata('USERS');
        redirect(base_url().'index.php/home'); 
    }
}