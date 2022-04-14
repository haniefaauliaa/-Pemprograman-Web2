<?php
class Mahasiswa{
    public $nama;
    protected $jurusan;
    public function __construct($nama, $jurusan){
        $this->nama = $nama;
        $this->jurusan = $jurusan;
    }
    public function status(){
        echo "Nama :". $this->nama. " Jurusan ". $this->jurusan. " STTNF ";
    }
}
class Maba extends Mahasiswa{
    public function pesan(){
        echo "Saya mahasiswa baru ". $this->jurusan;
    }

}
$mahasiswa1 = new Maba(" Aulia", "Informatika");
$mahasiswa1->status();
echo "<br>";
$mahasiswa1->pesan();


?>