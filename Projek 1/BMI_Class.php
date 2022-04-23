<?php
Class Pasien{
    public $id;
    public $kode;
    public $nama;
    public $tmp_lahir;
    public $tgl_lahir;
    public $email;
    public $gender;

    public function __construct($id,$nama,$tmp_lahir,$tgl_lahir,$email,$gender){
        $this->id = $id;
        $this->kode = "projek1" . sprintf('%03d' , $this->id);
        $this->nama = $nama;
        $this->tmp_lahir = $tmp_lahir;
        $this->tgl_lahir = $tgl_lahir;
        $this->email = $email;
        $this->gender = $gender;
    }

}

trait BMI {
    public $bb;
    public $tb;
    public function nilaibmi(){
        return number_format((float)$this->bb / ($this->tb / 100)** 2,1,'.','');
    }
    public function statusbmi($nilai){
        if ($nilai <= 18.4){
            return "Kekurangan berat badan";
        }elseif($nilai >= 18.5 && $nilai <= 23.9){
            return "Normal (ideal)";
        }elseif ($nilai >= 24 && $nilai <= 26.9){
            return "Kelebihan berat badan";
        }elseif ($nilai >= 27.0 && $nilai <= 29.9){
            return "Obesitas 1";
        }elseif ($nilai >= 30.0){
            return "Obesitas 2";
        }
    }
}

Class BMIpasien extends Pasien{
    use BMI;
    public $bmi;
    public $tanggal;

    public function __construct($id,$nama,$tmp_lahir,$tgl_lahir,$email,$gender,$tb,$bb){
        parent::__construct($id,$nama,$tmp_lahir,$tgl_lahir,$email,$gender,$tb,$bb);
        $this->tb = $tb;
        $this->bb = $bb;
        $this->tanggal = date("Y-m-d");

    }

}

?>