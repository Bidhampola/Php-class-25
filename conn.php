<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//connecting to the database {hostname, username, password and database}
$hostname = '127.0.0.1';
$username = 'root';
$lock = "brian";
$database = "php_crud";

//creating connection
$con = mysqli_connect($hostname,$username,$lock,$database);

//check connection
if($con->connect_error){
    echo "Failed to connect to the database";
}




