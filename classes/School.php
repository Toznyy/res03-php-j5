<?php

class Student {
    
    private int $id;
    private User $teacher;
    private array $students;
    
    public function __construct(string $teacher) {
        
        $this->id = -1;
        $this->teacher = $teacher;
        $this->students = [];
    }

    public function getId() : id {
        return $this->id;
    }

    public function setId(int $id) : void {
        $this->id = $id;
    }

    public function teacher() : string {
        return $this->teacher;
    }

    public function teacher(string $teacher) : void {
        $this->teacher = $teacher;
    }

    public function students() : string {
        return $this->students;
    }

    public function setLastName(string $students) : void {
        $this->students = $students;
    }
    
    public function addStudent(int $student) : array {
        this->students[]=$student;
        return $this->students;
    }
    
    public function removeStudent(Student $student) : array {
        foreach($this->students as $key=>$stud) {
            if($stud->getId() === $student->getId()){
                unset($this->students[$key]);
            }
        }
        return $this->students;
    }
}