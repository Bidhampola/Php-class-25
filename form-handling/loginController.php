<?php
require "../conn.php";




$username = $_POST['username'];
$password = $_POST['password'];

$hash = md5($password);

//check if username and password exist in the db

echo "<br>";
$query = "SELECT * FROM users where username ='$username' and password = '$hash'";
$result = mysqli_query($con,$query);

if(mysqli_num_rows($result) > 0){
    echo "Login successfully";
}
else{
    echo "Wrong passsword and username";
}
