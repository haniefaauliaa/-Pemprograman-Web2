<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Praktikum 2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div style="border: 1px solid; margin: 10px;">
      <div class="container-fluid">
        <div class="row justify-content-between">
          <div class="col-md-9 pt-2">
            <h4>Form Nilai Siswa</h4>
            <hr>
              <form method="POST" action="form_nilai.php">
                <div class="form-group row">
                  <label for="nama" class="col-4  col-form-label">Nama Lengkap</label> 
                  <div class="col-8">
                    <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" required="required" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                  <div class="col-8">
                    <select id="matkul" name="matkul" required="required" class="custom-select">
                      <option value="DDP">Dasar - dasar Pemrograman</option>
                      <option value="Basis Data">Basis Data I</option>
                      <option value="Pem Web">Pemrograman Web</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                  <div class="col-8">
                    <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" required="required" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                  <div class="col-8">
                    <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" required="required" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nilai_tp" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                  <div class="col-8">
                    <input id="nilai_tp" name="nilai_tp" placeholder="Nilai Tugas/Praktikum" type="text" required="required" class="form-control">
                  </div>
                </div> 
                <div class="form-group row">
                  <div class="offset-4 col-8">
                    <button neme="submit" type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </body>

  <?php
  $proses = $_POST ['proses'];
  $nama = $_POST ['nama'];
  $matkul = $_POST ['matkul'];
  $nilai_uts = $_POST ['nilai_uts'];
  $nilai_uas = $_POST ['nilai_uas'];
  $nilai_tp = $_POST ['nilai_tp'];

    echo 'proses : '.$proses;
    echo '<br/>Nama Lengkap : '.$nama;
    echo '<br/>Mata Kuliah : '.$matkul;
    echo '<br/>Nilai UTS : '.$nilai_uts;
    echo '<br/>Nilai UAS : '.$nilai_uas;
    echo '<br/>Nilai Tugas/Praktikum : '.$nilai_tp;
  ?>
</html>