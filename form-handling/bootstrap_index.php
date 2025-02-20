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
    <div class="container">
    <h1>View Users</h1>
    <hr>

<?php
    require "../conn.php";
  $data = "SELECT * FROM users";
  $result = mysqli_query($con,$data);

  if(mysqli_num_rows($result) > 0){?>

<!-- adding message  -->

<?php if(isset($_GET['updateMsg'])){?>
  <div class="alert alert-success">
    <h4><?php echo $_GET['updateMsg'] ?></h4>
  </div>
  <?php } ?>

 <?php if(isset($_GET['insertMsg'])){?>
  <div class="alert alert-success">
    <h4><?php echo $_GET['insertMsg'] ?></h4>
  </div>
  <?php } ?>

  <?php if(isset($_GET['deletetMsg'])){?>
  <div class="alert alert-success">
    <h4><?php echo $_GET['deleteMsg'] ?></h4>
  </div>
  <?php } ?>

  <hr>
  <table class="table table-striped">
      <thead>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Password</th>
            <th>Created On</th>
            <th>Action</th>
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
         <td>
          <a href="" style="color:green">view</a>
          <a href="update.php?id=<?= $row['id']?>">Edit</a>
          <a href="delete.php?id=<?=$row['id']?>" style="color:red" id="delete" onclick="return confirm('Are you sure you want to delete?')">Deleting</a>

         </td>
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
    </div>
  </body>
</html>

<!-- <script>
  console.log('heree')
  document.querySelector('#delete').addEventListener('click',function(e){
    console.log('delete')
    e.preventDefault
    alert('clicked delete')
  })
</script> -->
