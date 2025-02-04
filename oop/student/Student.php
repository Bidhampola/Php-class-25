<?php
declare(strict_types = 1);
namespace oop\student;

class Student
{
    //
    public string $name;
    public int $age;
    public function __construct(string $name, int $age){
        $this->name = $name;
        $this->age = $age;
    }

    //constructor promotion php8>
    // public function __construct(public string $address, public string $university){
    //     $this->address = $address;
    //     $this->university = $university;
    // }
    
    public function getNam(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
}