<?php
declare(strict_types=1);

namespace App;

use Carbon\Carbon;

class Person
{
    private PersonName $name;
    private string $gender;
    private Carbon $dateOfBirth;
    private PersonAddress $address;

    public function __construct(
        PersonName $name,
        string $gender,
        Carbon $dateOfBirth,
        PersonAddress $address)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->dateOfBirth = $dateOfBirth;
        $this->address = $address;
    }

    public function getName(): PersonName
    {
        return $this->name;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function getDateOfBirth(): Carbon
    {
        return $this->dateOfBirth;
    }

    public function getAddress(): PersonAddress
    {
        return $this->address;
    }


}