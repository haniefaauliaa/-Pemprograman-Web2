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

  <table class="table table-striped table-dark table-bordered">
  <thead>
            <tr>
                
                <th>Nomor</th>
                <th>Judul</th>
                <th>Kapasitas</th>
                <th>Harga Tiket</th>
                <th>Tanggal</th>
                <th>Narasumber</th>
                <th>Tempat</th>
                <th>PIC</th>
                <th>Foto</th>
                <th>Jenis Kegiatan</th>
                <th>Action</th>
            </tr>
</thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($list_kegiatan as $kegiatan) {
            ?>
                <tr>
                    <td><?= $nomor ?></td>
                    
                    <td><?= $kegiatan->judul ?></td>
                    <td><?= $kegiatan->kapasitas ?></td>
                    <td><?= $kegiatan->harga_tiket ?></td>
                    <td><?= $kegiatan->tanggal ?></td>
                    <td><?= $kegiatan->narasumber ?></td>
                    <td><?= $kegiatan->tempat ?></td>
                    <td><?= $kegiatan->pic ?></td>
                    <td>
                    <br>
                    <?php
                    $filegambar = base_url('/uploads/kegiatan/'.$kegiatan->foto_flyer);
                    $array = get_headers($filegambar);
                    $string = $array[0];
                    if(strpos($string,"200")){
                    echo '<img src="'.$filegambar.'" alt="foto" style="width:400px;height:400px;"/>';
                    }else{
                    echo '<img src="'.base_url('/uploads/kegiatan/tidakada.png').'"alt="foto tidak ada"/>';
                    }
                    ?>
                    <?= $kegiatan->foto_flyer ?>
                    </td>
                    <td><?= $kegiatan->jenis_kegiatan ?></td>
                    <td>
                    <a class="btn btn-warning" href="<?php echo base_url("index.php/kegiatan/edit/$kegiatan->id") ?>">Edit</a>
                    <a class="btn btn-danger" href="<?php echo base_url("index.php/kegiatan/delete/$kegiatan->id") ?>")>Delete</a>
                    
            </td>
                </tr>
            <?php
                $nomor++;
            }
            ?>
        </tbody> 
    </table>

    <a class="btn btn-primary" href="<?php echo base_url("index.php/kegiatan/form")?>">Add Kegiatan</a>
    
  </body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</html>

