<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonsModel extends Model
{
    public $firstName;
    public $surname;
    public $idNumber;
    public $fullName;

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getIdNumber()
    {
        return $this->idNumber;
    }

    /**
     * @param mixed $idNumber
     */
    public function setIdNumber($idNumber): void
    {
        $this->idNumber = $idNumber;
    }

    /**
     * @return mixed
     */
    public function getFullName()
    {
        return $this->fullName = $this->firstName . $this->surname;
    }

}
