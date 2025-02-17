<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="row mt-5">
          <div class="col-sm-3"></div>
          <div class="col-sm-6">
            <?php if(isset($_GET['loginFailed'])){?>
              <div class="alert alert-danger">
                <h6>
                  <?php echo $_GET['loginFailed'] ?>
                </h6>
              </div>
            <?php } ?>
          </div>
          <div class="col-sm-3"></div>

        </div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
            <h3>Login Here</h3>

                <!-- start of form  -->
            <form  method="post" action="loginController.php">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" class="form-control" id="" aria-describedby="emailHelp" name="username">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
            
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <!-- end of form  -->

            </div>
            <div class="col-sm-3"></div>

        </div>
      
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
  
  </body>
</html>
