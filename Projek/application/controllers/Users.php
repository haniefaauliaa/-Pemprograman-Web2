<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller {
    public function index(){
        $this->load->model("users_model", "users");
        $list_users = $this->users->getAll();
        $data["list_users"] = $list_users;
        $this->load->view("users/index",$data);
    }
    public function detail($id){
        $this->load->model('users_model', 'users');
        $data['users'] = $this->users->findById($id);
        $this->load->view("users/detail", $data);
    }
    public function form()
    {
        // render view
        $this->load->view('users/form');
    }

    public function save(){
        $this->load->model('users_model', 'users');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');

        $data = array('username'=> $username, 'password' => $password, 'email' => $email);
        $this->users->save($data);

        redirect('users', 'refresh');
    }
    public function delete($id){
        $this->load->model('users_model', 'users');
        $role = $this->users->findRole($id, 'administrator');
        $data['id'] = $id; 
        if (!$role) {
            $this->users->delete($data);
        } else {
            echo 'Tidak Bisa Dihapus';
        }
        redirect('users', 'refresh');
    }

    public function update($id){
        $this->load->model('users_model', 'users');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');   
        $data = array('username'=>$username, 'password'=>$password,'email'=>$email, 'id'=>$id);
        $this->users->update($data);
        redirect('users', 'refresh');
    }

    public function edit($id){
        $this->load->model('users_model', 'users');
        $role = $this->users->findRole($id, 'administrator');
        $users = $this->users->findById($id);
        $data = array('users'=>$users);
        if (!$role) {
            $this->load->view('users/edit', $data);
        } else {
            redirect('users', 'refresh');
        }

        
    }
}