<?php
echo "Welcome to Process file";
echo "<br>";
//getting inputs from the form

//super globals  $_GET, $_POST, etc
//using get
// $uname = $_GET['username'];
// $pass = $_GET['password'];

//using post
$uname = $_POST["username"];
$pass = $_POST['password'];

echo strlen($uname);
echo "<br>";
echo "Your username is $uname and your password is $pass";

//assignment
//1 . create login form(login_form.php) and login action (login)
//2 . create registration form(register_form.php) and registration action (register)

?>
