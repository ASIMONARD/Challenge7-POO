<?php

class Person
{
    public DateTime $birthDate;

    public function __construct(public string $lastName, public string $firstName, public string $address, $birthDate)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->address = $address;
        $this->birthDate = new DateTime($birthDate);
    }
    
    public function afficher()
    {
        echo 'Nom : ' . $this->firstName . '<br>';
        echo 'Prénom : ' . $this->lastName . '<br>';
        echo 'Adress : ' . $this->address . '<br>';
        echo 'Date de naissance : ' . $this->birthDate->format('d/m/y') . '<br>';
        echo 'Age : ' . $this->calculAge() . ' ans' . '<br><br>';
    }

    public function modifyAddress(string $address)
    {
        $this->address = $address;
    }

    public function calculAge()
    {
        $today = new DateTime();
        $age = date_diff($this->birthDate, $today);
        return $age->y;
    }

}

?>