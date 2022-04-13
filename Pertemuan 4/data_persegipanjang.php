<?php
require_once "class_persegipanjang.php";
$persegi1 = new PersegiPanjang(10, 100);
echo "Luas dari persegi panjang yang memiliki panjang = ". $persegi1->getpanjang(). "<br>" . " lebar = ". $persegi1->getlebar(). "<br>". "adalah ". $persegi1->getluas();


?>