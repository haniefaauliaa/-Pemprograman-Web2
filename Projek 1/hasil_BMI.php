<?php
require_once 'BMI_Class.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.2.2/css/fixedHeader.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="container d-flex justify-content-center py-5">
            <div class="col-md-12 col-12 p-3 rounded-3 bg-white shadow">
                <?php
                $listpasien = array(
                    1 =>
                    array(1, '2022-01-30', 'P001', 'Ahmad', 'L', 69.8, 169, 24.7, 'Kelebihan Berat Badan'),
                    array(2, '2022-01-10', 'P002', 'Rina', 'P', 55.3, 165, 20.3, 'Normal (Ideal)'),
                    array(3, '2022-01-11', 'P003', 'Lutfi', 'L', 45.2, 171, 15.4, 'Kekurangan Berat Badan')
                );
                $submit = $_POST['submit']; 
                $gender = $_POST['gender'];
                $nama = $_POST['nama'];
                $tb = $_POST['tb'];
                $bb = $_POST['bb'];
                $tmp_lahir = $_POST['tmp_lahir'];
                $tgl_lahir = $_POST['tgl_lahir'];
                $email = $_POST['email'];
                
                $pasienbaru = new BMIpasien(count($listpasien)+1, $nama, $tmp_lahir,$tgl_lahir,$email,$gender,$tb,$bb);
                $pasienbaru->bmi = $pasienbaru->nilaibmi();
                array_push($listpasien, array($pasienbaru->id,$pasienbaru->tanggal,$pasienbaru->kode,$pasienbaru->nama,$pasienbaru->gender,$pasienbaru->bb,$pasienbaru->tb,$pasienbaru->bmi,$pasienbaru->statusbmi($pasienbaru->bmi)));
                echo "<h1 class='fw-bold text-center'>BMI Anda adalah <span class='text-primary'>{$pasienbaru->bmi}</span></h1>"; 
                if($pasienbaru->bmi <= 18.4){
                    echo "<h1 class='fw-bold text-center'><img src='assets/underweight-male.png'></h1>";
                }
                elseif($pasienbaru->bmi >= 18.5 && $pasienbaru->bmi <= 23.9 ){
                    echo "<h1 class='fw-bold text-center'><img src='assets/normal-male.png'></h1>";
                }
                elseif ($pasienbaru->bmi  >= 24 && $pasienbaru->bmi  <= 26.9){
                    echo "<h1 class='fw-bold text-center'><img src='assets/overweight-male.png'></h1>";
                }
                elseif ($pasienbaru->bmi >= 27.0 && $pasienbaru->bmi <= 29.9){
                    echo "<h1 class='fw-bold text-center'><img src='assets/risk-overweight-male.png'></h1>";
                }
                elseif ($pasienbaru->bmi >= 30.0){
                    echo "<h1 class='fw-bold text-center'><img src='assets/obese-male.png'></h1>";
                }
                echo "<h2 class='fw-bold text-center'> <span class='text-primary'>{$pasienbaru->statusbmi($pasienbaru->bmi)}</span></h2>";
                ?>
                <table class="example display nowrap table-striped table-bordered table" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Periksa</th>
                            <th>Kode Pasien</th>
                            <th>Nama Pasien</th>
                            <th>Gender</th>
                            <th>Berat (kg)</th>
                            <th>Tinggi (cm)</th>
                            <th>Nilai BMI</th>
                            <th>Status BMI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listpasien as $pasien) {
                            echo "<tr>";
                            echo "<td>" . $pasien[0] . "</td>";
                            echo "<td>" . $pasien[1] . "</td>";
                            echo "<td>" . $pasien[2] . "</td>";
                            echo "<td>" . $pasien[3] . "</td>";
                            echo "<td>" . $pasien[4] . "</td>";
                            echo "<td>" . $pasien[5] . "</td>";
                            echo "<td>" . $pasien[6] . "</td>";
                            echo "<td>" . $pasien[7] . "</td>";
                            echo "<td>" . $pasien[8] . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>