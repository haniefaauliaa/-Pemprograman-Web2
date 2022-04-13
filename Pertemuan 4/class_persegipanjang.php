<?php
class PersegiPanjang {
    public $panjang;
    public $lebar;
    function __construct($p, $l){
        $this->panjang = $p;
        $this->lebar = $l;
    }

    function getluas(){
        return $this->panjang * $this->lebar;
    }

    function getpanjang(){
        return $this->panjang;
    }
    function getlebar(){
        return $this->lebar;
    }
}

?>