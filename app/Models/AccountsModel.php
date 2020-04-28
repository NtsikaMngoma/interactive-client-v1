<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsModel extends Model
{
    public $accountNumber = 'account_number';
    public $outstandingBalance = 'outstanding_balance';
    /**
     * @return mixed
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * @param mixed $accountNumber
     */
    public function setAccountNumber($accountNumber): void
    {
        $this->accountNumber = $accountNumber;
    }

    /**
     * @return mixed
     */
    public function getOutstandingBalance()
    {
        return $this->outstandingBalance;
    }

    /**
     * @param mixed $outstandingBalance
     */
    public function setOutstandingBalance($outstandingBalance): void
    {
        $this->outstandingBalance = $outstandingBalance;
    }

}
