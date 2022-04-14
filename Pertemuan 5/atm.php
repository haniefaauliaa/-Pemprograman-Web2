<?php
require_once "Account_Bank.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table, th, td {
  border:1px solid black;
}
</style>
</head>
<body>
<?php
$ac1 = new BankAccount("002", 12000, "Neyara");
$ac1->deposit(1000);
$ac2 = new BankAccount("021", 50000, "Aulia");
$ac2->deposit(2000);
?>
<h1>Sebelum TF</h1>
    <table>
        <tr>
            <th>
                No
            </th>
            <th>
                No.Account
            </th>
            <th>
                Pemilik
            </th>
            <th>
                Saldo
            </th>
        </tr>
    <tbody>
        <?php
        $no = 1;
        $all_acc = [$ac1, $ac2];
        foreach ($all_acc as $acc){
            ?>

           <tr>
            <td> 
            <?=$no?>
            </td>
            <td>
                <?= $acc->nomor?>
            </td>
            <td>
                <?= $acc->customer?>
            </td>
            <td>
                <?= $acc->show_saldo()?>
            </td>

            <?php
            $no++;
            }
            ?>
    </tbody>


    </table>

<?php
$ac2->transfer($ac1, 2000);
?>
<hr>
<h1>setelah TF</h1>
    <table>
        <tr>
            <th>
                No
            </th>
            <th>
                No.Account
            </th>
            <th>
                Pemilik
            </th>
            <th>
                Saldo
            </th>
        </tr>
    <tbody>
        <?php
        $no = 1;
        $all_acc = [$ac1, $ac2];
        foreach ($all_acc as $acc){
            ?>

           <tr>
            <td> 
            <?=$no?>
            </td>
            <td>
                <?= $acc->nomor?>
            </td>
            <td>
                <?= $acc->customer?>
            </td>
            <td>
                <?= $acc->show_saldo()?>
            </td>

            <?php
            $no++;
            }
            ?>
    </tbody>


    </table>
</body>
</html>