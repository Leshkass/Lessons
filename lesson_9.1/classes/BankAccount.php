<?php

declare(strict_types=1);

class BankAccount
{
    private int $accountNumber;

    private float $balance;

    public function __construct(int $accountNumber, float $balance)
    {
        $this->setAccountNumber($accountNumber);
        $this->setBalance($balance);
    }

    public function getAccountNumber(): int
    {
        return $this->accountNumber;
    }


    private function setAccountNumber(int $accountNumber): void
    {
        $this->accountNumber = $accountNumber;
    }

    private function setBalance(float $balance): void
    {
        if($balance <= 0){
            throw new Exception('Balance can not be < 0');
        }
        $this->balance = $balance;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function replenishment(float $amount): void
    {
        if ($amount <= 0) {
            throw new Exception('Amount value can not be < 0');
        }
        $this->balance += $amount;
    }

    public function withdraw(float $amount): float
    {
        if ($this->balance < $amount) {
            throw new Exception('Not enough money');
        }

        return $this->balance -=  $amount;
    }
}