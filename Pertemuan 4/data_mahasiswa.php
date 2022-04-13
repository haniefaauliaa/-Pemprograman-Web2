<?php
require_once "class_mahasiswa.php";

$aul = new Mahasiswa("0001", "Haniefa Aulia", "TI", 4);
$ney = new Mahasiswa("0002", "Neyara Rahma", "Hukum", 2.8);
$han = new Mahasiswa("0003", "Hanna Andhitta", "Akuntansi", 3.6);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <table class="table table-stripped">
        <thead>
            <th>
                NIM
            </th>
            <th>
                Nama
            </th>
            <th>
                Prodi
            </th>
            <th>
                IPK
            </th>
            <th>
                Predikat
            </th>
        </thead>
        <tbody>
            <tr>
                <td>    
                    <?= $aul->nim(); ?>
                </td>
                <td>    
                    <?= $aul->nama(); ?>
                </td>
                <td>    
                <?= $aul->prodi(); ?>
                </td>
                <td>    
                <?= $aul->ipk; ?>
                </td>
                <td>    
                <?= $aul->predikatipk(); ?>
                </td>
            </tr>
            <tr>
                <td>    
                    <?= $ney->nim(); ?>
                </td>
                <td>    
                    <?= $ney->nama(); ?>
                </td>
                <td>    
                <?= $ney->prodi(); ?>
                </td>
                <td>    
                <?= $ney->ipk; ?>
                </td>
                <td>    
                <?= $ney->predikatipk(); ?>
                </td>
            </tr>
            <tr>
                <td>    
                    <?= $han->nim(); ?>
                </td>
                <td>    
                    <?= $han->nama(); ?>
                </td>
                <td>    
                <?= $han->prodi(); ?>
                </td>
                <td>    
                <?= $han->ipk; ?>
                </td>
                <td>    
                <?= $han->predikatipk(); ?>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>