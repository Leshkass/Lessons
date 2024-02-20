<?php
declare(strict_types = 1);

require 'classes/BankAccount.php';

$bankAccount = new BankAccount(111,9999);

$secondBankAccount = new BankAccount(222,0);


$secondBankAccount->replenishment($bankAccount->getBalance());

$bankAccount->withdraw($bankAccount->getBalance());



echo $bankAccount->getAccountNumber() . '  ' . $bankAccount->getBalance() . PHP_EOL;

echo $secondBankAccount->getAccountNumber() . '  ' . $secondBankAccount->getBalance() . PHP_EOL;


