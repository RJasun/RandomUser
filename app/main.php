<?php
declare(strict_types=1);
require_once 'vendor/autoload.php';

use App\Person;
use App\PersonName;
use Carbon\Carbon;
use App\PersonAddress;

/** $person = new Person(
 * new PersonName("Mr", "George", "Bush"),
 * "Male",
 * new Carbon("2000-07-09T05:51:59.390Z"),
 * new PersonAddress("Georgia", "Tela", "Telaviva", "103")
 * ); */

$client = new \GuzzleHttp\Client(['verify' => false]);
$response = $client->get('https://randomuser.me/api/');
$response = json_decode($response->getBody()->getContents());

$personData = $response->results[0];

$person = new Person(
    new PersonName(
        $personData->name->title,
        $personData->name->first,
        $personData->name->last
    ),
    $personData->gender,
    new Carbon($personData->dob->date),
    new PersonAddress(
        $personData->location->country,
        $personData->location->city,
        $personData->location->street->name,
        (string)$personData->location->street->number
    )
);
var_dump($person);