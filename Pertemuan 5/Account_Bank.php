<?php
require_once "Class_Account.php";
class BankAccount extends Account{
    public $customer;
    function __construct($no, $saldo, $cust){
        parent::__construct($no, $saldo);
        $this->customer = $cust;
    }
    function cetak(){
        parent::cetak();
        echo ", Customer :". $this->customer;
    }
    function transfer($dest_acc, $uang){
        $dest_acc->deposit($uang);
        $this->withdraw($uang);
    }
}

?>