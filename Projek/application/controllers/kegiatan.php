<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class kegiatan extends CI_Controller {
    public function index(){
        $this->load->model("kegiatan_model", "kegiatan");
        $list_kegiatan = $this->kegiatan->getAll();
        $data["list_kegiatan"] = $list_kegiatan;
        $this->load->view("kegiatan/index",$data);
    }
// --------------------------------------



    public function upload(){
        $config['upload_path']          = './uploads/kegiatan/';
        $config['allowed_types']        = 'gif|jpg|png|JPG|GIF|PNG|jpeg|JPEG|jfif|JFIF';
        $config['max_size'] = 2894;
        $config['max_width'] = 2894;
        $config['max_height'] = 2894;
        $config['overwrite'] = true;

        $id = $this->input->post('id');
        
        $array = explode('.', $_FILES['foto_flyer']['name']);
        $extension = end($array);

        $new_name = $id.'.'.$extension;
        // die($new_name);
        $config['file_name'] = $new_name;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('foto_flyer'))
        {
                $error = array('error' => $this->upload->display_errors());
                die(print_r($error));
                $this->load->view('upload_form', $error);
        }
        else
        {
                $this->load->model('kegiatan_model','kegiatan');
                $array_data[] = $new_name;
                $array_data[] = $id;

                $this->kegiatan->update_foto($array_data);
                
                $data = array('upload_data' => $this->upload->data());

                // $this->load->view('upload_success', $data);
        }
        redirect(base_url().'index.php/kegiatan');

    }

    


// ------------------------------------




    public function update($id){
        $this->load->model('kegiatan_model', 'kegiatan');
        $judul = $this->input->post('judul');
        $kapasitas = $this->input->post('kapasitas');
        $harga_tiket = $this->input->post('harga_tiket');
        $tanggal = $this->input->post('tanggal');
        $narasumber = $this->input->post('narasumber');
        $tempat = $this->input->post('tempat');
        $pic = $this->input->post('pic');
        $foto_flyer = $this->input->post('foto_flyer');
        $jenis_id = $this->input->post('jenis_id');
        $data = array('judul'=>$judul, 'kapasitas'=>$kapasitas,'harga_tiket'=>$harga_tiket,'tanggal'=>$tanggal, 'narasumber'=>$narasumber, 'tempat'=>$tempat, 'pic'=>$pic,'foto_flyer'=>$foto_flyer, 'jenis_id'=>$jenis_id, 'id'=>$id);
        $this->kegiatan->update($data);
        redirect('kegiatan', 'refresh');
    }

    public function edit($id){
        $this->load->model('kegiatan_model', 'kegiatan');
        $data['kegiatan'] = $this->kegiatan->findById($id);
        $this->load->view('kegiatan/edit', $data);
    }

// -----------------------------------------------


public function save(){
    $this->load->model('kegiatan_model', 'kegiatan');
    $judul = $this->input->post('judul');
    $kapasitas = $this->input->post('kapasitas');
    $harga_tiket = $this->input->post('harga_tiket');
    $tanggal = $this->input->post('tanggal');
    $narasumber = $this->input->post('narasumber');
    $tempat = $this->input->post('tempat');
    $pic = $this->input->post('pic');
    $foto_flyer = $this->input->post('foto_flyer');
    $jenis_id = $this->input->post('jenis_id');
    $data = array('judul'=>$judul, 'kapasitas'=>$kapasitas,'harga_tiket'=>$harga_tiket,'tanggal'=>$tanggal, 'narasumber'=>$narasumber, 'tempat'=>$tempat, 'pic'=>$pic,'foto_flyer'=>$foto_flyer, 'jenis_id'=>$jenis_id);
    $this->kegiatan->save($data);
    redirect('kegiatan', 'refresh');
}

public function form(){
    
    $this->load->view('kegiatan/form');
}
// ----------------------

    public function delete($id){
        $this->load->model('kegiatan_model', 'kegiatan');
        $data['id'] = $id; 
        $this->kegiatan->delete($data);
        redirect('kegiatan', 'refresh');
    }
}