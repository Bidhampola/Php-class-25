<?php
require_once '../conn.php';

$uname = $_POST["username"];
$pass = $_POST['password'];

//encrypting password such that its not readable from the tables
//using md5 method

$passHash = md5($pass);
// echo "Your password hash for $pass is $passHash";
if(!empty($uname) && !empty($pass)){
    $insert = "UPDATE users set username ='$uname'"; //update query
    $query = mysqli_query($con,$insert); //update process
    if($query){
        //redirect to view page
        header('location:bootstrap_index.php?updateMsg=Record updated successfully');
    }else{
        echo "Failed to insert data to the database";
    }
}
else{
    echo "Please you didn't supply the username and password";
}

//crud  create read  update delete

?>
