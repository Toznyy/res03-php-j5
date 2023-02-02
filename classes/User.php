<?php

class User{
    
    private int $id;
    private string $firstName;
    private string $lastName;
    private string $email;

    public function __construct(string $firstName, string $lastName, string $email) {
        $this->id = -1;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    public function getId() : id {
        return $this->name = $id;
    }

    public function setId(int $id) : void {
        $this->id = $id;
    }

    public function getFirstName() : string {
        return $this->firstName;
    }

    public function setFirstName(string $firstName) : void {
        $this->firstName = $firstName;
    }

    public function getLastName() : string {
        return $this->lastName;
    }

    public function setLastName(string $lastName) : void {
        $this->lastName = $lastName;
    }

    public function getEmail() : string {
        return $this->email;
    }

    public function setEmail(string $email) : void {
        $this->email = $email;
    }
    
    public function getFullName() : string {
        return $this->firstName . ' ' . $this->lastName;
    }
}

?>