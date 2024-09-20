<!doctype html>
<html lang="en">
  <head>
    <title>Dream Event | Packages</title>
    <!-- Required meta tags -->
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- font awesome cdn link  -->
    <link rel="shortcut icon" href="../assets/img/wlogo.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/small.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custome Css  -->
</head>
<style>
    .Packages>a{
      color: #AA68FF !important;
    }
    .subscribe-btn{
        background-color: #AA68FF !important;
    }
  </style>
  
  <body>
      
   <?php
   include("navbar.php")
   ?>
<main>
  <div class="container-fluid Home-Main-Container">
    <div class="heading">
        <h1 class="text-white">PACKAGES</h1>
    </div>
</div>


<!-- Pckages  -->

  <!-- Budget Section -->
  <div class="container-fluid budget-container">
    <div class="budget-filter-box d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
            <span class="filter-icon"><i class="fas fa-filter"></i></span>
            <span class="filter-text">Filter</span>
        </div>
        <div class="budget-box dropdown">
            <span style="margin-right: 5Spx;">Budget</span>
            <span class="dropdown-toggle" id="budgetDropdown" data-toggle="dropdown">
            </span>
            <div class="dropdown-menu" aria-labelledby="budgetDropdown">
                <a class="dropdown-item" href="#">$500</a>
                <a class="dropdown-item" href="#">$200</a>
                <a class="dropdown-item" href="#">100$</a>
            </div>
        </div>
        <div class="dropdown event-type">
            <button class="dropdown-toggle text-dark" type="button" id="eventTypeDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Event Type  
            </button>
            <div class="dropdown-menu" aria-labelledby="eventTypeDropdown">
                <a class="dropdown-item" href="#">Wedding</a>
                <a class="dropdown-item" href="#">Birthday</a>
                <a class="dropdown-item" href="#">Picnic</a>
                <a class="dropdown-item" href="#">Anniversary</a>
                <a class="dropdown-item" href="#">Festival</a>

            </div>
        </div>
    </div>
</div>


<!-- Packages Section -->
<div class="container-fluid main-container">
    <div class="row row-container">
    <?php
include("../../AD/pages/connection.php");

// Query to fetch data from the table 'add_pack'
$query = "SELECT * FROM addpack";
$data = mysqli_query($connection, $query);

if (mysqli_num_rows($data) > 0) {
    while ($row = mysqli_fetch_assoc($data)) {
?>

<div class="col-md-6 mt-4 mb-4 w-100">
<div class="package-box ml-5">
        <h3 class="card-title">PACK<?php echo $row['Pack_Code']; ?></h3>
        <p class="card-subtitle"><?php echo $row['Event_Type']; ?></p>
        <h4 class="card-price"><?php echo $row['Price']; ?></h4>
        <ul class="card-details">
            <li>At <?php echo $row['Location']; ?></li>
            <li>For <?php echo $row['Duration']; ?></li>
            <li>With <?php echo $row['Decoration']; ?></li>
            <li><?php echo $row['Theme']; ?> Theme</li>
            <li>For <?php echo $row['Guests']; ?> guests</li>
            <li><?php echo $row['Menu']; ?> in menu</li>
            <li><?php echo $row['Beverage']; ?> in Drinks</li>
        </ul>
        <div class="d-flex justify-content-center btn-box">
            <!-- Button with data attributes to store the card's details -->
           <a> <button class="details-btn" 
                data-packcode="PACK<?php echo $row['Pack_Code']; ?>" 
                data-eventtype="<?php echo $row['Event_Type']; ?>" 
                data-price="<?php echo $row['Price']; ?>"
                data-location="<?php echo $row['Location']; ?>"
                data-duration="<?php echo $row['Duration']; ?>"
                data-decoration="<?php echo $row['Decoration']; ?>"
                data-theme="<?php echo $row['Theme']; ?>"
                data-guests="<?php echo $row['Guests']; ?>"
                data-menu="<?php echo $row['Menu']; ?>"
                data-beverage="<?php echo $row['Beverage']; ?>"
                onclick="showDetails(this)" data-toggle="modal" data-target="#packageDetailModal">
                Details
            </button></a>
                
        </div>
    </div>

</div>

<?php
    }
} else {
    echo "<p>No packages available at the moment.</p>";
}
?>

    </div>

</div>

<!-- modal 1 -->

<div class="modal fade modal-package" id="packageDetailModal" tabindex="-1" aria-labelledby="packageDetailModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered ">
  <div class="modal-content package-modal">
    
    <!-- Modal Header -->
    <div class="modal-header package-modal-header">
      <h5 class="modal-title" id="packageDetailModalLabel">Package Details</h5> <!-- Made the title bold -->
   
    </div>

    <!-- Modal Body -->
   <!-- Modal HTML Structure -->
<div class="modal-body">
    <div class="detail-container">
        <div class="row">
            <!-- Column 1 -->
            <div class="col-md-4">
                <p>Pack Code</p>
                <p>Event Type</p>
                <p>Location</p>
                <p>Theme</p>
                <p>Decoration</p>
                <p>Menu</p>
                <p>Beverages</p>
                <p>Time Duration</p>
                <p>No. of Guests</p>
                <p>Price</p>
                <p>Details</p>
            </div>

            <!-- Column 2 -->
            <div class="col-sm-12 col-md-1">
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
            </div>

            <div class="col-sm-12 col-md-7">
            <p id="Packcodeput"></p>
        <p id="evtypeput"></p>
        <p id="plocput"></p>
        <p id="pthput"></p>
        <p id="pdecput"></p>
        <p id="pmput"></p>
        <p id="pdrput"></p>
        <p id="pdurput"></p>
        <p id="pguput"></p>
        <p  id="pprput"></p>
        <p>The Package has the facilities mentioned above. If you want to access the Package, you just need to fill the subscription form.</p>

            </div>
        </div>
    </div>
</div>
   <!-- Subscribe Button Box -->
      <div class="subscribe-btn-box d-flex justify-content-center">
        <a href="#" class="btn subscribe-btn"  data-toggle="modal" data-target="#subscribeModal" data-dismiss="modal" aria-label="Close">Subscribe</a> <!-- Made the button text bold -->
      </div>
    </div>
  </div>
</div>
</div>

<!-- modal  -->

<!-- Subscribe Modal -->
<div class="modal fade subscribe-modal" id="subscribeModal" tabindex="-1" aria-labelledby="subscribeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content subscribe-modal">
        
        <!-- Modal Header -->
        <div class="modal-header subscribe-modal-header">
            <h5 class="modal-title" id="subscribeModalLabel">Package Subscription</h5>

        </div>

        <!-- Modal Body -->
        <div class="modal-body" style="margin-left:0px !important;">
<form action="Payment.php" method="POST" style="margin-left:0px !important;">
            <!-- Form Container -->
            <div class="form-container">
                
            <div class="row">
            <div class="col-md-6">
            <input type="hidden" name="pack_code" class="form-control" id="packCode" required style="border-radius: 5px; padding: 10px; border: 2px solid #4B0E9A;">
        </div>

                    <div class="col-md-6">
            <input type="hidden" name="price" class="form-control" id="price" readonly style="border-radius: 5px; padding: 10px; border: 2px solid #4B0E9A;">
        </div>

                </div>
                <div class="row">
                    <!-- Column 1 -->
                    <div class="col-md-6">
                        <label for="fullName" style="font-family: 'Inika', serif;">Full Name:</label>
                        <input type="text" name="fname" class="form-control" id="fullName" style="border-radius: 5px; padding: 10px; border: 2px solid #4B0E9A;">
                    </div>
                    
                    <!-- Column 2 -->
                    <div class="col-md-6">
                        <label for="email" style="font-family: 'Inika', serif;">Email:</label>
                        <input type="email" name="email" class="form-control" id="email" style="border-radius: 5px; padding: 10px; border: 2px solid #4B0E9A;">
                    </div>
                </div>

                <!-- Second Row -->
                <div class="row" style="margin-top: 20px;">
                    <!-- Column 1 -->
                    <div class="col-md-6">
                        <label for="eventDate" style="font-family: 'Inika', serif;">Event Date:</label>
                        <input type="date" name="date" class="form-control" id="eventDate" style="border-radius: 5px; padding: 10px; border: 2px solid #4B0E9A;">
                    </div>
                    
                    <!-- Column 2 -->
                    <div class="col-md-6">
                        <label for="eventTime" style="font-family: 'Inika', serif;">Event Timing:</label>
                        <input type="time" name="time" class="form-control" id="eventTime" style="border-radius: 5px; padding: 10px; border: 2px solid #4B0E9A;">
                    </div>
                </div>

                <!-- Button Container -->
                <div class="button-container" >
                    <button type="submit" name="registration" class="book-now-btn" data-toggle="modal" data-target="#PaymentModal"
  aria-label="Close" >BOOKNOW</button>
                </div>
            </div>
            </form>
    
        </div>
    </div>
</div>
</div>

<!-- modal  -->


<?php
include("footer.php");
?>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function () {
          $('.dropdown').click(function (e) {
              e.stopPropagation();
              $(this).find('.dropdown-menu').toggle();
          });
          $(document).click(function () {
              $('.dropdown-menu').hide();
          });
      });


      function showDetails(button) {
        // Fetching the data from the clicked button's data attributes
        document.getElementById("Packcodeput").textContent = button.getAttribute("data-packcode");
        document.getElementById("evtypeput").textContent = button.getAttribute("data-eventtype");
        document.getElementById("plocput").textContent = button.getAttribute("data-location");
        document.getElementById("pthput").textContent = button.getAttribute("data-theme");
        document.getElementById("pdecput").textContent = button.getAttribute("data-decoration");
        document.getElementById("pmput").textContent = button.getAttribute("data-menu");
        document.getElementById("pdrput").textContent = button.getAttribute("data-beverage");
        document.getElementById("pdurput").textContent = button.getAttribute("data-duration");
        document.getElementById("pguput").textContent = button.getAttribute("data-guests");
        document.getElementById("pprput").textContent = button.getAttribute("data-price");
            document.getElementById("price").value = button.getAttribute("data-price");
            document.getElementById("packCode").value = button.getAttribute("data-packcode");
    }


  </script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  </body>
</html>

<?php

include("../../AD/pages/connection.php");
if(isset($_POST['registration'])){

    $_SESSION['fname'] = $_POST['fname'];
    $_SESSION['email'] = $_POST['email'];
    


    $PACK_CODE = $_POST['pack_code'];
$NAME = $_POST['fname'];
$EMAIL = $_POST['email'];
$DATE = $_POST['date'];
$TIME = $_POST['time'];


$query = "insert into subpack(Pack_Code,Full_Name,Email,Event_Date ,Event_Time)values('$PACK_CODE','$NAME','$EMAIL','$DATE','$TIME')";

$data = mysqli_query($connection,$query);
if($data){

   
  
}else{

    echo "<script>alert('Data submitted failed')</script>";
  

}
exit();


}