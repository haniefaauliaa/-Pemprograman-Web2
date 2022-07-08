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
                <th>Username</th>
                <th>email</th>
                <th>role</th>
                <th>Action</th>
            </tr>
</thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($list_users as $users) {
            ?>
                <tr>
                    <td><?= $nomor ?></td>
                    
                    <td><?= $users->username ?></td>
                    <td><?= $users->email ?></td>
                    <td><?= $users->role ?></td>
                    <td>
                    <a class="btn btn-primary" href="<?php echo base_url("index.php/users/detail/$users->id") ?>">Detail</a>
                    <?php
                        $role = $this->users->findRole($users->id, 'administrator');
                        if (!$role) {
                    ?>
                    <a class="btn btn-warning" href="<?php echo base_url("index.php/users/edit/$users->id") ?>">Edit</a>
                    <a class="btn btn-danger" href="<?php echo base_url("index.php/users/delete/$users->id") ?>" onclick="return deleteKegiatan('Anda yakin ingin menghapus user <?php echo $users->username ?>?')">Delete</a>
                    <?php
                        }
                    ?>
            </td>
                </tr>
            <?php
                $nomor++;
            }
            ?>
        </tbody> 
    </table>

    <a class="btn btn-primary" href="<?php echo base_url("index.php/users/form")?>">Add Users</a>
    
  </body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</html>

