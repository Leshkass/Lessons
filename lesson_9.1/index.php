<?php
declare(strict_types = 1);

require 'classes/BankAccount.php';

try {
    $bankAccount = new BankAccount(111,9999);
} catch (Exception $error){

    echo $error->getMessage();
}

try {
    $secondBankAccount = new BankAccount(222,0);

}catch (Exception $error){

    echo $error->getMessage();
}

$secondBankAccount->replenishment($bankAccount->getBalance());

$bankAccount->withdraw($bankAccount->getBalance());



echo $bankAccount->getAccountNumber() . '  ' . $bankAccount->getBalance() . PHP_EOL;

echo $secondBankAccount->getAccountNumber() . '  ' . $secondBankAccount->getBalance() . PHP_EOL;


