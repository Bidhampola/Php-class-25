<?php
 require_once "../conn.php";
//getting user information
$id = $_GET['id'];
$query = "SELECT * FROM users where id ='$id'";
$result = mysqli_query($con,$query);
$data = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align:center">
    <h4>Update User inforamtion </h4>
    <form action="updateController.php" method="post">
        <label for="">Username</label>
        <input type="text" name="username" placeholder="Enter username" value="<?=$data['username']?>">
        <br>
        <br>
        <label for="">Password</label>
        <input type="password" name="password"  placeholder="Enter password" required ?>
        <br>
        <br>
        <button name="update">Update</button>
    </form>

    <!-- <a href="process.php">Go to process</a> -->
</body>
</html>