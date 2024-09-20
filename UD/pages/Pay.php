<?php

include("../../AD/pages/connection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Payment | Dream Events</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="shortcut icon" href="../assets/img/wlogo.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/small.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
.ptitle{
    text-align:center;
    font-size:3vw;
    color:#fff;
    background-color:#4B0E9A;
}
.pmain{
    box-shadow:5px 12px 10px #D9D9D9;
    padding:0px;
}
.ph{
    font-family:Times New Roman;
    font-size:1.6vw;
    font-weight:bold;
}
.pd{
    font-family:Times New Roman;
    font-size:1.25vw;
}
.total-amount{
    font-weight:100;
    font-family:monospace;
    font-size:2.2vw;
}
  </style>

  <body>
      



  <div class="container w-75 border mt-5 pmain">

  <h5 class="ptitle w-100 p-5" id="PaymentModalLabel">PAYMENT METHOD</h5>
  <form action="processpayment.php" method="POST" class="Payment-Content p-5">

  <!-- Hidden fields to pass data -->

                  <!-- Payment Method Label -->
                  <label style="margin-left: 10px;" class="ph">Payment method:</label>
                  <br><br>
                  <!-- Radio Buttons -->
                  <div class="form-group">

                  <div class="form-check">
                    <label class="form-check-label pd">
                      <input type="radio" class="form-check-input" name="pay_method" id="" value="EasyPaisa" checked>
                      EasyPaisa
                    </label>
                    <label class="form-check-label pd">
                      <input type="radio" class="form-check-input" name="pay_method" id="" value="JazzCash" checked>
                      JazzCash
                    </label>
                  </div>

                  </div>

                  <!-- Mobile Number Input -->
                  <label style="margin-left: 7px; margin-top: 10px;" class="ph">Enter Mobile No (In case paying with EasyPaisa or JazzCash):</label><br>
                  <input type="text" name="phone" class="payment-input" required>

                  <!-- Total Amount -->
                  <div class="d-flex justify-content-between mt-5 p-3 w-100">
                      <label class="ph w-75">Total Amount:</label>
                      <label class="total-amount w-25">PKR. 70,000</label>
                  </div>

      <input type="hidden" name="fname" value="<?php echo $fname; ?>">
      <input type="hidden" name="email" value="<?php echo $email; ?>">
                  <!-- Easypaisa and JazzCash Details -->
                  <div class=" justify-content-between mt-3 p-4 pd">
                    <ul>
                      <li class="w-100">Our Easypaisa: +923452346133</li>
                      <li class="w-100">Our JazzCash: +9230315545421</li>
</ul>
                  </div>

                  <!-- Checkbox -->

                  <div class="form-check mt-4">
                    <label class="form-check-label pd">
                      <input type="checkbox" class="form-check-input" name="check" checked  required>
                      I have made the Payment
                    </label>
                  </div>


                  <!-- Transaction ID Input -->
                  <label style="margin-top: 20px;" class="ph">Transaction Id:</label>
                  <br>
                  <input type="text" name="trs_id" class="payment-input" required>

                  <div class="Payment-button-container" >
                      <button type="submit" class="payment-confirm-btn" id="pay_confirm" data-toggle="modal" data-target="#PaymentModal" >CONFIRM</button>
                  </div>
              </form>
  </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- <script>
  document.getElementById("pay_confirm").addEventListener("click", function(event) {
    // Prevent the default button action if needed (e.g., form submission)
    event.preventDefault();
    
    // Show alert message
    alert("Done! You will soon receive an email from Dream Events.");
    
    // Optionally, you can perform additional actions here
    // For example, submitting a form or showing a modal
});
  </script> -->
  </body>
</html>

