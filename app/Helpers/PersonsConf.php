<?php


namespace App\Helpers;


class PersonsConf
{
    public $endpoint = 'persons/';
    public $idKey = 'id_number/';
    public $nameKey = 'name/';
    public $surnameKey = 'surname/';

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
}
