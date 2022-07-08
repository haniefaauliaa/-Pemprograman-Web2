<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div id="body" class="col-md-12">
        <h3>Form User</h3>
        
        <?php echo form_open("daftar/update/$daftar->id")?>
          <div class="form-group row">
            <label for="alasan" class="col-4 col-form-label">Alasan</label> 
            <div class="col-8">
                <input id="alasan" name="alasan" placeholder="Masukkan Alasan Pendaftar" type="text" class="form-control" value="<?= $daftar->alasan?>">
            </div>
          </div>
<br>
          <div class="form-group row">
    <label for="users_id" class="col-4 col-form-label">Pendaftar</label> 
    <div class="col-8">
      <select id="users_id" name="users_id" class="custom-select">
      <?php
        foreach ($list_users as $users) {
        ?>
        <option value="<?= $users-> id?> "><?= $users->username ?></option>
        <?php
                
            }
            ?>
      </select>
    </div>
  </div> 

  <div class="form-group row">
    <label for="kegiatan_id" class="col-4 col-form-label">kegiatan</label> 
    <div class="col-8">
      <select id="kegiatan_id" name="kegiatan_id" class="custom-select">
      <?php
            foreach ($list_kegiatan as $kegiatan) {
            ?>
        <option value="<?= $kegiatan->id ?>"><?= $kegiatan->judul ?></option>
        <?php
            }
            ?>
      </select>
    </div>
  </div> 
         
  <div class="form-group row">
    <label for="kategori_peserta_id" class="col-4 col-form-label">Kategori Peserta</label> 
    <div class="col-8">
      <select id="kategori_peserta_id" name="kategori_peserta_id" class="custom-select">
      <?php
            foreach ($list_kategori as $kategori) {
            ?>  
      <option value="<?= $kategori->id ?>"><?= $kategori->nama ?></option>
      <?php
            }
            ?>
      </select>
    </div>

          <div class="form-group row">
            <label for="nosertifikat" class="col-4 col-form-label">Nomor Sertifikat</label> 
            <div class="col-8">
              <input id="nosertifikat" name="nosertifikat" placeholder="Masukkan Nomor Sertifikat Peserta" type="text" class="form-control"value="<?= $daftar->nosertifikat?>">
            </div>
          </div>
         
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        <?php echo form_close() ?>
    </div>

    </body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</html>