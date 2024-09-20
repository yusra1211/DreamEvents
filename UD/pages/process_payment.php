<?php

include("../../AD/pages/connection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $price = $_POST['price'];
$PAY_METHOD = $_POST['pay_method'];
$PHONE = $_POST['phone'];
$CONFIRM = $_POST['check'];
$TRS_ID = $_POST['trs_id'];


$query = "insert into pay(FullName,Email,Pay_Method,Phone ,Pay_Amount,Confirmation,Transaction_Id)
values('$fname','$email','$PAY_METHOD','$PHONE','$price','$CONFIRM','$TRS_ID')";

$data = mysqli_query($connection,$query);
if($data){


    echo"
    <script>
    alert('Done! You will soon recieve the email from Dream Events');
      </script>"


    ?>

 <meta http-equiv="refresh" content="0;url=http://localhost/Vision/UD/pages/Packages.php">
      
      
      <?php

  
}else{

    echo "<script>alert('Data submitted failed')</script>";
  

}




}
?>
<!-- Swal.fire({
        title: 'DONE!',
        text: 'You will son recieve an email from Dream Events!',
        icon: 'success'
      }); -->
