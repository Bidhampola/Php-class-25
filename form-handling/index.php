<?php
//
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align:center">
    <h4>Login Form</h4>
    <form action="process.php" method="post">
        <label for="">Username</label>
        <input type="text" name="username" placeholder="Enter username" required>
        <br>
        <br>
        <label for="">Password</label>
        <input type="password" name="password"  placeholder="Enter password" required>
        <br>
        <br>
        <button name="submit">Submit</button>
    </form>

    <!-- <a href="process.php">Go to process</a> -->
</body>
</html>
