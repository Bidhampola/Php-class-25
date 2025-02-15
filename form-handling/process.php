<?php
require_once '../conn.php';

$uname = $_POST["username"];
$pass = $_POST['password'];

//encrypting password such that its not readable from the tables
//using md5 method

$passHash = md5($pass);
// echo "Your password hash for $pass is $passHash";
if(!empty($uname) && !empty($pass)){
    $insert = "INSERT into users(username,password) VALUES ('$uname','$passHash')"; //insertation query
    $query = mysqli_query($con,$insert); //insertion process
    if($query){
        //redirect to view page
        header('location:bootstrap_index.php?insertMsg=Record added successfully');
    }else{
        echo "Failed to insert data to the database";
    }
}
else{
    echo "Please you didn't supply the username and password";
}

//crud  create read  update delete

?>
