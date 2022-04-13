<?php
// Cara Membuat Fungsi
// function namafungsi(parameter){
//      code disini
// }

function luaspersegi($sisi){
    $rumus = $sisi * $sisi;
    return $rumus;
}

echo "Hasilnya adalah : " . luaspersegi(10); 
echo "<br>";  

//Buat Fungsi Nama

function nama(){
    echo "Nama saya adalah Haniefa Aulia";
}

nama();
echo "<br>";

//Fungsi Menggunakan Parameter
//Parameter Default

function perkenalan($nama = "Aulia"){
    echo "Perkenalkan nama saya : " . $nama;
}

perkenalan();

//function hitungumur($thn_lhr, $thn_skrng){
//      $umur = $thn_skrng - $thn_lhr;
//      return $umur;    
// }

// echo "Umur si saya adalah ". hitungumur(2003, 2022);
//
echo "<br>";

function luaslingkaran($jari){
    $phi = 3.14;
    $rumus = $phi * $jari * $jari;
    return $rumus;
}

echo "Luas lingkaran dengan jari jari 2 adalah ". luaslingkaran(2);


?>