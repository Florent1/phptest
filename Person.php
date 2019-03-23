<?php

class Person
{

    public $lastName;
    public $firstName;
    public $adress;
    public $birthday;


    public function information($lastName, $firstName, $adress, $birthday)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->adress = $adress;
        $this->birthday = $birthday;
        $informations =  $lastName . ' ' . $firstName . ' ' . $adress . ' ' . $birthday;
        return $informations;

    }

    public function changeAdress($adress)
    {
        $this->adress = $adress;
    }

    public function age($birthday)
    {
        $am = explode('/', $this->birthday);
        $an = explode('/', date('d/m/Y'));
        if (($am[1] < $an[1]) || (($am[1] == $an[1]) && ($am[0] <= $an[0]))) {
            return $an[2] - $am[2];
        }else {
            return $an[2] - $am[2] - 1;
        }
    }
}


$Bob = new Person();
$Bob->lastName = 'Magic';
$Bob->firstName = 'Bob';
$Bob->adress = 'avenue des champignons';
$Bob->birthday = '19/11/1984';
echo $Bob->information('Magic', 'Bob', 'avenue des champignons', '19/11/1984');

$Bob->changeAdress('avenue des Wilders');
var_dump($Bob);

echo $Bob->age('19/11/1984');


