<?php

class User {

    private string $firstname;
    private string $lastname;
    private int $age;


public function getFullName(): string
{
    return $this->firstname . " " .$this->lastname;
}

public function getIntroduction(): string
{
    return "Bonjour, je suis " . $this->getFullName();
}

    public function getFirstname(): string  
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): void  
    {
        $this->firstname = $firstname;
    }
    public function getLastname(): string  
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): void  
    {
        if ($lastname === "") {
        echo 'Veuillez entrer un nom de famille';
    } else {
        $this->lastname = $lastname;
        
    }
    }

    public function getAge(): int   
    {
        return $this->age;
    }

    public function setAge(int $age): void  
    {
        $this->age = $age;
    }
}