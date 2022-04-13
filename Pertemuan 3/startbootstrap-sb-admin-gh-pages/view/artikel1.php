<?php
include "../layout/header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<form method="post" action="artikel1.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"></div>
        </div> 
        <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="DDP">Dasar Dasar Pemrogaman</option>
        <option value="BDI">Basis Data</option>
        <option value="WEB1">Pemrogaman Web</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="number" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="number" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
    <div class="col-8">
      <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="number" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input name="proses" type="submit" value="simpan" class="btn btn-primary">
    </div>
  </div>
</form>
<h2 style="color:red;">
SISWA DINYATAKAN LULUS JIKA NILAI TOTAL dengan presentase 30% UTS, 35% UAS dan
TUGAS 35% melebihi 55
</h2>

<?php
$proses = $_POST['proses'];
$nama_siswa = $_POST['nama'];
$matkul = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];
$operasi = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);



echo 'proses :'.$proses;
echo '<br> Nama :'.$nama_siswa;
echo '<br> Matkul:'.$matkul;
echo '<br> Nilai Uts :'.$nilai_uts;
echo '<br> Nilai Uas :'.$nilai_uas;
echo '<br> Nilai Tugas :'.$nilai_tugas;
if ($operasi >= 0 && $operasi <= 35) {
  echo '<br> grade = E';
} elseif ($operasi >= 36 && $operasi <= 55){
  echo '<br> grade = D';
} elseif ($operasi >= 56 && $operasi <= 69){
  echo '<br> grade = C';
} elseif ($operasi >= 70 && $operasi <= 84){
  echo '<br> grade = B';
} elseif ($operasi >= 85 && $operasi <= 100){
  echo '<br> grade = A';
} else {
  echo '<br> grade = I';
}

switch ($operasi){
  case $operasi >= 0 && $operasi <= 35:
    echo '<br> Predikat = Sangat Kurang';
    break;    
  case $operasi >= 36 && $operasi <= 55:
    echo '<br> Predikat = Kurang';
    break;    
  case $operasi >= 56 && $operasi <= 69:
    echo '<br> Predikat = Cukup';
    break;    
  case $operasi >= 70 && $operasi <= 84:
    echo '<br> Predikat = Memuaskan';
    break;    
  case $operasi >= 85 && $operasi <= 100:
    echo '<br> Predikat = Sangat Memuaskan';
    break;
  default:
    echo  '<br> Predikat =  Tidak ada';
}
?>
</body>
</html>
<?php
include "../layout/footer.php";
?>