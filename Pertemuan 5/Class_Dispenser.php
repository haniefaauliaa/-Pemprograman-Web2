<?php
class Dispenser{
    protected $volume;
    protected $hargasegelas;
    private $volumegelas;
    public $namaminuman;

    function __construct($harga, $volgelas, $nama){
        $this->hargasegelas = $harga;
        $this->volumegelas = $volgelas;
        $this->namaminuman = $nama;
    }
    public function isi($vol){
    $this->volume = $vol;
    return $vol;
    }
    public function cetak(){
        echo "Aul Membeli segelas ". $this->namaminuman. " dengan harga ". $this->hargasegelas. " Ribu Rupiah";
    }
    public function pesan(){
        return $this->volume = $this->volume - $this->volumegelas;
    }
}
$pesanan1 = new Dispenser(2000, 250, "Coca-Cola");
echo "Dispenser Coca - Cola adalah ". $pesanan1->isi(10000). " Ml";
echo "<br>";
$pesanan1->cetak();
echo "<br>";
echo "Sisa dari dipenser Coca - cola sebanyak ". $pesanan1->pesan()."Ml";

?>