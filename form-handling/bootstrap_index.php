<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>users</title>
  </head>
  <body>
    <h1>View Users</h1>
    <hr>

<?php
    require "../conn.php";
  $data = "SELECT * FROM users";
  $result = mysqli_query($con,$data);

  if(mysqli_num_rows($result) > 0){?>

  <table class="table table-striped">
      <thead>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Password</th>
            <th>Created On</th>
        </tr>
      </thead>

      <tbody>
  <?php
     while($row = mysqli_fetch_assoc($result)){?>
      <tr>
         <td><?php echo $row['id'] ?></td>
         <td><?php echo $row['username'] ?></td>
         <td><?php echo $row['password'] ?></td>
         <td><?php echo $row['created_on'] ?></td>
      </tr>
      <?php } ?>
    </tbody>
     
     </table>
 <?php }
  else{
      echo "No data found";
  }
?>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
