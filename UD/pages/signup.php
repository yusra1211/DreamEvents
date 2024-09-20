<!doctype html>
<html lang="en">
  <head>
    <title>SignUp | Dream Events</title>
    
    <link rel="shortcut icon" href="../assets/img/wlogo.png" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/small.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="parent-div">
        <div class="main-div">
            <!-- Content for the main div -->
        </div>
        <div class="half-overlay-div">
            <div class="row">
                <h3 class="sign-head">Sign Up</h3>
            </div>
            <form class="pt-4 pl-4 pr-4" action="#" method="POST">
                <div class="form-group row">
                  <label for="inputPassword" class="col-xs-3 col-md-3 col-xl-3 col-xxl-3 col-sm-3 col-form-label f-label text-white">Full Name:</label>
                  <div class="col-xs col-sm-8 col-md-8 col-xl-8">
                    <input type="text" name="fname" class="form-control sign-finp" id="inputPassword" required>
                  </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 f-label col-form-label text-white">User Name:</label>
                    <div class="col-sm-8">
                      <input type="text" name="uname" class="form-control sign-finp" id="inputPassword" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 f-label col-form-label text-white">Email:</label>
                    <div class="col-sm-8">
                      <input type="email" name="email" class="form-control sign-finp" id="inputPassword" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 f-label col-form-label text-white">Phone:</label>
                    <div class="col-sm-8">
                      <input type="tel" name="phone" class="form-control sign-finp" id="inputPassword" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword" class=" f-label col-sm-3 col-form-label text-white">Password:</label>
                    <div class="col-sm-8">
                      <input type="password" name="password" class="form-control sign-finp" id="inputPassword" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <button type="submit" value="submit" name="registration" class="btn btn-light btn-lg btn-block w-50 sign-bd">Sign Up</button>
                  </div>
                  <p class="sign-switch">Already Have an Account? <a class="sign-sd" href="signin.php" style="color:#AA68FF;">LogIn</a></p>
              </form>
        </div>
    </div>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php
include("../../AD/pages/connection.php");
if(isset($_POST['registration'])){

$FULLNAME = $_POST['fname'];
$USERNAME = $_POST['uname'];
$EMAIL = $_POST['email'];
$PHONE = $_POST['phone'];
$PASSWORD = $_POST['password'];


$query = "insert into signup(FullName,Username,Email,Phone ,Password)values('$FULLNAME','$USERNAME','$EMAIL','$PHONE','$PASSWORD')";

$data = mysqli_query($connection,$query);
if($data){


    echo "<script>alert('Data submitted successfuuly')</script>";
  
}else{

    echo "<script>alert('Data submitted failed')</script>";
  

}

}