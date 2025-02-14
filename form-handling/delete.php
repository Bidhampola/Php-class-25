<?php
require_once '../conn.php';

//deleting logic here

$id = $_GET['id'];

$del = "DELETE FROM users WHERE id = '$id'";
$result = mysqli_query($con,$del);

if($result){
    echo "Record deleted successfully!";
    //redirect the view page
    
}
else{
    echo "Failed to delete record";
}


?>
