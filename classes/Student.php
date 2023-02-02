<?php

class Student {
    
    private int $id;
    private string $firstName;
    private string $lastName;
    private string $email;
    private array $grades;
    
    public function __construct(string $firstName, string $lastName, string $email) {
        
        $this->id = -1;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->grades = [];
    }

    public function getId() : id {
        return $this->id;
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
    
    public function getGrades() : array {
        return $this->email;
    }

    public function setGrades(array $grades) : void {
        $this->grades = $grades;
    }
    
    public function getFullName() : string {
        return $this->firstName . ' ' . $this->lastName;
    }
    
    public function addGrade(int $grade) : array {
        $this->grades[] = $grade;
        return $this->grades;
    }
    
    public function removeGrade(int $grade1) : array {
        foreach($this->grades as $grade2) {
            if ($grade1 === $grade2) {
                unset ($grade2);
            }
        }
        return $this->grades;
    }
    
    public function getAverage() : ? float {
        if (count($this->grades) == 0) {
            return 0;
        }
        else {
            $sum = 0;
            foreach($this->grades as $grade) {
                $sum+=$grade;
            }
            return $sum / count($this->grades);
        }
    }
}

?>