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
                <th>Tanggal</th>
                <th>Alasan</th>
                <th>Nama Pendaftar</th>
                <th>Kegiatan</th>
                <th>Kategori Peserta</th>
                <th>Nomor Sertifikat</th>
                <th>Action</th>
                
            </tr>
</thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($list_daftar as $daftar) {
            ?>
                <tr>
                    <td><?= $nomor ?></td>
                    
                    <td><?= $daftar->tanggal ?></td>
                    <td><?= $daftar->alasan ?></td>
                    <td><?= $daftar->user?></td>
                    <td><?= $daftar->kegiatan ?></td>
                    <td><?= $daftar->kategori ?></td>
                    <td><?= $daftar->nosertifikat ?></td>
                    <td>
                    <a class="btn btn-warning" href="<?php echo base_url("index.php/daftar/edit/$daftar->id") ?>">Edit</a>
                    <a class="btn btn-danger" href="<?php echo base_url("index.php/daftar/delete/$daftar->id") ?>")>Delete</a>
                    
            </td>
                </tr>
            <?php
                $nomor++;
            }
            ?>
        </tbody> 
    </table>

    <a class="btn btn-primary" href="<?php echo base_url("index.php/daftar/form")?>">Add Pendaftar</a>
    
  </body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</html>

