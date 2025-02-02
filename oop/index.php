<?php
include 'student/Student.php';//from student folder
include 'staff/Student.php';

//creating objects
// $sfstud = new oop\student\Student();
// $sfstaff = new oop\staff\Student();

$sfstud = new Student();
// $sfstaff = new Student();

var_dump($sfstud->getNam());
echo "<br/>";
var_dump($sfstaff->getNam());