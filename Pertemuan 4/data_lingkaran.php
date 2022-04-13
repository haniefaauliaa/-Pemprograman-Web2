<?php
require_once "class_lingkaran.php";
$lingkar1 = new Lingkaran(10);
$lingkar2 = new Lingkaran(7);
echo "Luas dari jari-jari ". $lingkar1->jarijari(). " adalah ". $lingkar1->getluas();
echo "<br>";
echo "keliling dari jari-jari ". $lingkar1->jarijari(). " adalah ". $lingkar1->getkeliling();
echo "<hr>";
echo "Luas dari jari-jari ". $lingkar2->jarijari(). " adalah ". $lingkar2->getluas();
echo "<br>";
echo "keliling dari jari-jari ". $lingkar2->jarijari(). " adalah ". $lingkar2->getkeliling();
?>