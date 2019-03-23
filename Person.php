<?php

class Person
{

    public $lastName;
    public $firstName;
    public $adress;
    public $birthday;

    public function __construct($lastName, $firstName, $adress, $birthday)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->adress = $adress;
        $this->birthday = $birthday;
    }


    public function information()
    {

        $informations =  $this->lastName . ' ' . $this->firstName . ' ' . $this->adress . ' ' . $this->birthday;
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


$Bob = new Person('Magic', 'Bob', 'avenue des champignons', '19/11/1984');

echo $Bob->information();

$Bob->changeAdress('avenue des Wilders');

echo "<br>";

echo $Bob->information();

echo "<br>";

echo $Bob->age('19/11/1984');


