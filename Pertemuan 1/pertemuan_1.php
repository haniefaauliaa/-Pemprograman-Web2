<?php 
# Membuat Variable
$nama = "Hani";
$umur = 19;
$berat = 42;


# Mengakses data Variable
echo 'Nama saya '.$nama;' umur saya '.$umur;' tahun, berat saya '.$berat;' kg';
echo "<br />";
  echo "<h1 style='color: red'>Nama saya $nama, umur saya $umur tahun, berat saya $berat kg</h1>";
  echo "<br />";

  // Variable sistem
  // variable built in php
  echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
  echo "<br />";

  // Variable konstan
  // adalah variable yang tidak bisa diubah nilainya
  define('makanan', 'sushi');
  // define('makanan', 'jambu');
  echo '<h1 style="color: blue">'.makanan.'</h1>';
  echo makanan;
?>