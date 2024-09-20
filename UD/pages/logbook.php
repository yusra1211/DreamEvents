<!doctype html>
<html lang="en">
  <head>
    <title>LogIn | Dream Events</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" href="../assets/img/wlogo.png" type="image/x-icon">
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
            <div class="row pt-4">
                <h3 class="sign-head">Log In</h3>
            </div>
            <form class="pt-4 pl-4 pr-4" method="POST" action="Booking.php">
                <div class="form-group row pt-4">
                    <label for="inputEmail" class="col-sm-3 f-label col-form-label text-white">Email:</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control sign-finp" id="inputEmail" name="email" required>
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label for="inputPassword" class="f-label col-sm-3 col-form-label text-white">Password:</label>
                    <div class="col-sm-8">
                        <input type="password" name="pass" class="form-control sign-finp" id="inputPassword" required>
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <button type="submit" name="login" class="btn btn-light btn-lg btn-block w-50 sign-bd">LogIn</button>
                </div>
                <p class="sign-switch">Already Have an Account? <span class="sign-sd" href="">SignUp</span></p>
            </form>
        </div>
    </div>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
</html>

<?php
include('../../AD/pages/connection.php');
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $query = "SELECT * FROM signup WHERE Email='$email' AND Password='$password'";
    $data = mysqli_query($conn, $query);

    $total = mysqli_num_rows($data);

    if ($total > 0) {
      echo "<script>alert('Data submitted successfully')</script>";
    } else {
    
      echo "<script>alert('Data submitted failed')</script>";
    }
}
?>

