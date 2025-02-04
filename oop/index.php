<?php
include 'student/Student.php';//from student folder
include 'staff/Student.php';

use oop\student\Student as studentInStudent;
use oop\staff\Student as studentInStaff;

//creating objects
// $sfstud = new oop\student\Student();
// $sfstaff = new oop\staff\Student();

// $sfstud = new Student();
// $sfstaff = new Student();

$stud1 = new studentInStudent('Bidha',40);
$stud2 = new studentInStaff();

var_dump($stud1->getNam());
echo "<br/>";
var_dump($stud2);

// var_dump($sfstud->getNam());
// echo "<br/>";
// var_dump($sfstaff->getNam());