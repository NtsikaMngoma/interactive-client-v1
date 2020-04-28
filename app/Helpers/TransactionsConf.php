<?php


namespace App\Helpers;


class TransactionsConf
{
    public $endpoint = 'transactions/';
    public $idKey = 'id_key';
    public $nameKey = 'name';
    public $surnameKey = 's_name';
    public $accKey = 'acc_key';
    public $search = '?';

    /**
     * @return string
     */
    public function getEndpoint(): string
    {
        return $this->endpoint;
    }

    /**
     * @return string
     */
    public function getIdKey(): string
    {
        return $this->idKey;
    }

    /**
     * @return string
     */
    public function getNameKey(): string
    {
        return $this->nameKey;
    }

    /**
     * @return string
     */
    public function getSurnameKey(): string
    {
        return $this->surnameKey;
    }

    /**
     * @return string
     */
    public function getAccKey(): string
    {
        return $this->accKey;
    }

    /**
     * @return string
     */
    public function getSearch(): string
    {
        return $this->search;
    }
}
