<?php
class Mahasiswa{
    public $nim;
    public $nama;
    public $prodi;
    var $ipk;
    
    function __construct($nim, $nama, $prodi, $ipk){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->ipk = $ipk;
    }
    function nama(){
        return $this->nama;
    }
    function nim(){
        return $this->nim; 
    }
    function prodi(){
        return $this->prodi; 
    }
    

    function predikatipk(){
            if ($this->ipk < 2.0){
            return "cukup";
        }elseif ($this->ipk >= 2.0 && $this->ipk < 3.0){
            return "baik";
        }elseif ($this->ipk >= 3.0 && $this->ipk < 3.75){
            return "memuaskan";
        }elseif ($this->ipk >= 3.75 && $this->ipk <= 4){
            return "cum laude";
        }
    }
}

?>