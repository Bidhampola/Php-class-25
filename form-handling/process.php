<?php
require_once '../conn.php';

$uname = $_POST["username"];
$pass = $_POST['password'];

if(!empty($uname) && !empty($pass)){
    $insert = "INSERT into users(username,password) VALUES ('$uname','$pass')"; //insertation query
    $query = mysqli_query($con,$insert); //insertion process
    if($query){
        echo "Data inserted successfully";
    }else{
        echo "Failed to insert data to the database";
    }
}
else{
    echo "Please you didn't supply the username and password";
}

//crud  create read  update delete

?>
