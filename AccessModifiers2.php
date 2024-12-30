<?php

class BankAccount {

    private $accountname ;
    private $accountbalance ;
    private $bank ;

    private function getBalance() {
        return "This Account belongs to " . $this->accountname . 
               " and the Account Balance is Rs " . $this->accountbalance . 
               " Bank Account is " . $this->bank ;
    }

    public function showBalance($name , $balance , $bank_Name) {
        $this->accountname = $name;
        $this->accountbalance = $balance;
        $this->bank = $bank_Name;

        echo $this->getBalance();
    }
}


$account1 = new BankAccount();
$account1->showBalance("Naimat Ali" , 2000 , "EasyPaisa");

echo "<hr/>";

$account2 = new BankAccount();
$account2->showBalance("Waqas Sheikh" , 500 , "Faysal Bank");

echo "<hr/>";

$account3 = new BankAccount();
$account3->showBalance("Asad Anwer" , 5000 , "JazzCash");

echo "<hr/>";

$account4 = new BankAccount();
$account4->showBalance("Hafiz Sweet" , 50000 , "Meezan Bank");




?>
