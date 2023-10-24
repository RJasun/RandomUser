<?php
declare(strict_types=1);

namespace App;
class PersonName
{
    private string $title;
    private string $firstName;
    private string $lastName;

    public function __construct(
        string $title,
        string $firstName,
        string $lastName)
    {
        $this->title = $title;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getName(): string
    {
        return "$this->title $this->firstName $this->lastName";
    }

}