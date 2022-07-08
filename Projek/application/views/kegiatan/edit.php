<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>

  <?php echo form_open("kegiatan/update/$kegiatan->id")?>
  <div class="form-group row">
    <label for="judul" class="col-4 col-form-label">Judul</label> 
    <div class="col-8">
      <input id="judul" name="judul" placeholder="Masukkan Judul" type="text" class="form-control" value="<?php echo $kegiatan->judul ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="kapasitas" class="col-4 col-form-label">kapasitas</label> 
    <div class="col-8">
      <input id="kapasitas" name="kapasitas" placeholder="Masukkan Kapasitas" type="number" class="form-control" value="<?php echo $kegiatan->kapasitas ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="harga_tiket" class="col-4 col-form-label">Harga Tiket</label> 
    <div class="col-8">
      <input id="harga_tiket" name="harga_tiket" placeholder="Masukkan Harga Tiket" type="text" class="form-control" value="<?php echo $kegiatan->harga_tiket ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <input id="tanggal" name="tanggal" placeholder="Masukkan Tanggal" type="date" class="form-control"  value="<?php echo $kegiatan->tanggal ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="narasumber" class="col-4 col-form-label">Narasumber</label> 
    <div class="col-8">
      <input id="narasumber" name="narasumber" placeholder="Masukkan Narasumber" type="text" class="form-control"  value="<?php echo $kegiatan->narasumber ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="tempat" class="col-4 col-form-label">Tempat</label> 
    <div class="col-8">
      <input id="tempat" name="tempat" placeholder="Masukkan Tempat" type="text" class="form-control"  value="<?php echo $kegiatan->tempat ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="pic" class="col-4 col-form-label">PIC</label> 
    <div class="col-8">
      <input id="pic" name="pic" placeholder="Masukkan Nama PIC" type="text" class="form-control"  value="<?php echo $kegiatan->pic ?>">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="jenis_id" class="col-4 col-form-label">Jenis Kegiatan</label> 
    <div class="col-8">
      <select id="jenis_id" name="jenis_id" class="custom-select">
        <option value="1" <?php if ($kegiatan->jenis_id == "1") { echo 'selected'; } ?>>Seminar</option>
        <option value="2" <?php if ($kegiatan->jenis_id == "2") { echo 'selected'; } ?>>Workshop</option>
        <option value="3" <?php if ($kegiatan->jenis_id == "3") { echo 'selected'; } ?>>Event Olah Raga</option>
        <option value="4" <?php if ($kegiatan->jenis_id == "4") { echo 'selected'; } ?>>Bazaar</option>
        <option value="5" <?php if ($kegiatan->jenis_id == "5") { echo 'selected'; } ?>>Pelatihan</option>
      </select>
    </div>
  </div> 
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  <?php echo form_close() ?>

<hr>

<?php
  echo form_open_multipart('kegiatan/upload');
?>

                    
                    
<div class="form-group row">
    <label for="foto_flyer" class="col-4 col-form-label">Foto Flyer</label> 
    <div class="col-8">
    <?php
    echo"JPG/PNG";
    $filegambar = base_url('/uploads/kegiatan/'.$kegiatan->foto_flyer);
    $array = get_headers($filegambar);
    $string = $array[0];
    if(strpos($string,"200")){
    echo '<img src="'.$filegambar.'" alt="foto" style="width:400px;height:400px;" />';
    }else{
    echo '<img src="'.base_url('/uploads/kegiatan/tidakada.png').'"alt="foto tidak ada"/>';
    }
    ?>
    <input type="hidden" name="id" value="<?= $kegiatan->id?>"/>

    <input id="foto_flyer" name="foto_flyer" placeholder="Masukkan Foto Flyer" type="file" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-success">Upload Gambar</button>
    </div>
  </div>
