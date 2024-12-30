<?php

class BankAccount {

    private $accountname ;
    private $accountbalance ;

    private function getBalance() {
        return "This Account belongs to " . $this->accountname . 
               " and the Account Balance is Rs " . $this->accountbalance ;
    }

    public function showBalance($name , $balance) {
        $this->accountname = $name;
        $this->accountbalance = $balance;

        echo $this->getBalance();
    }
}


$account1 = new BankAccount();
$account1->showBalance("Naimat Ali" , 2000);

echo "<hr/>";

$account2 = new BankAccount();
$account2->showBalance("Waqas Sheikh" , 500);

echo "<hr/>";

$account3 = new BankAccount();
$account3->showBalance("Asad Anwer" , 5000);

echo "<hr/>";


?>
