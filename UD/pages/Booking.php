<?php
session_start();  // Start the session

include("../../AD/pages/connection.php");

if (isset($_POST['book'])) {
    $_SESSION['fname'] = $_POST['fname'];
    $_SESSION['email'] = $_POST['email'];

    $NAME = $_POST['fname'];
    $EMAIL = $_POST['email'];
    $PHONE = $_POST['phone'];
    $EVE_TYPE = $_POST['evtype'];
    $EVE_LOCATION = $_POST['evloc'];
    $EVE_DATE = $_POST['evdate'];
    $NO_OF_ATT = $_POST['noofguests'];
    $START_TIME = $_POST['starttime'];
    $END_TIME = $_POST['endtime'];
    $DESCRIBE = $_POST['describe'];
    $THEME = $_POST['theme'];
    $DECORATION = $_POST['decor'];
    $MENU = $_POST['menu'];
    $BEVERAGE = $_POST['beverage'];
    $VEHICLE = $_POST['vehicle'];
    $CLOTH_THEME = $_POST['cloththeme'];
    $COLOR = $_POST['color'];
    $ADDRESS = $_POST['address'];
    $NO_OF_SUITS = $_POST['noofsuits'];

    // Insert queries
    $query1 = "INSERT INTO basic (Name, Email, Phone, Event_Type, Event_Location)
               VALUES ('$NAME', '$EMAIL', '$PHONE', '$EVE_TYPE', '$EVE_LOCATION')";

    $query2 = "INSERT INTO brief (Email, Date, `No_of_Attendance`, Starttime, Endtime, Description)
               VALUES ('$EMAIL', '$EVE_DATE', '$NO_OF_ATT', '$START_TIME', '$END_TIME', '$DESCRIBE')";

    $query3 = "INSERT INTO decor (Email, Theme, Decoration, Menu, Beverages)
               VALUES ('$EMAIL', '$THEME', '$DECORATION', '$MENU', '$BEVERAGE')";

    $query4 = "INSERT INTO clothing (Email, Theme, Color, No_of_Suits, Address)
               VALUES ('$EMAIL', '$CLOTH_THEME', '$COLOR', '$NO_OF_SUITS', '$ADDRESS')";

    // Execute queries
    $data1 = mysqli_query($connection, $query1);
    $data2 = mysqli_query($connection, $query2);
    $data3 = mysqli_query($connection, $query3);
    $data4 = mysqli_query($connection, $query4);

    // Check success
    if ($data1 && $data2 && $data3 && $data4) {
        echo "<script>alert('Data submitted successfully');</script>";
    } else {
        echo "<script>alert('Data submission failed: " . mysqli_error($connection) . "');</script>";
    }

    // Exit after handling
    exit();
}
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Booking | Dream Events</title>
    <link rel="shortcut icon" href="../assets/img/wlogo.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/small.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-ksm0sVg6r0XcT6Ywx8ZpF+qB+I4yp2H2Hvn2V6xZl9R+6X5zJ1u3I0ikFlJk3ciV" crossorigin="anonymous">
 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
    .booking>a{
      color:#AA68FF !important;
    }
    .menu-image,.beverage-image,.location-image,.decoration-image{
      width:100px !important;
      height:100px !important;
    }
    .btn-fd:hover{
      
      background-color:#AA68FF !important;
    }
  </style>
  <body>
    
  <?php
    include('navbar.php');
    ?>
    <div class="background-container container-fluid">
        <div class="overlay"></div>
        <div class="content">
            <h1>Hey! What are you Planning For?</h1>
        </div>
    </div>
    <div class="bk-fd pb-5">
        <div class="row mt-4 bk-head">
          <h1>Event Details</h1>
        </div>
        <form class="form row formd" method="POST" action="Pay.php">
        <div class="row inp-row w-100">
          <div class="col-md-5 m-4 w-100">
            <div class="form-group w-100">
              <label>Full Name:</label>
              <input type="text"
                class="form-control inpd" name="fname" required>
            </div>
          </div>
          <div class="col-md-5 m-4">
            <div class="form-group w-100">
              <label>Email:</label>
              <input type="email"
                class="form-control inpd" name="email" required>
            </div>
          </div>
        </div>

        <div class="row inp-row w-100">
          <div class="col-md-5 m-4 w-100">
            <div class="form-group w-100">
              <div class="form-group w-100">
                <label>Phone:</label>
                <input type="phone"
                  class="form-control inpd" name="phone" required>
              </div>
            </div>
          </div>
          <div class="col-md-5 m-4">
          <?php
// Include the database connection
include("../../AD/pages/connection.php");

// Query to fetch name from the theme table (assuming the table stores event types)
$query = "SELECT Name FROM event_type"; 
$data = mysqli_query($connection, $query);
?>

<div class="form-group w-100">
    <label>Event Type:</label>
    <select class="form-control inpd" name="evtype" required>
        <option>Click to Choose the Event</option>
        <?php
        // Check if any data is returned from the database
        if (mysqli_num_rows($data) > 0) {
            // Loop through the fetched results and populate the dropdown
            while ($result = mysqli_fetch_assoc($data)) {
                echo '<option>' . $result['Name'] . '</option>';
            }
        } else {
            echo '<option>No events available</option>';
        }
        ?>
    </select>
</div>

<?php
// Close the database connection
mysqli_close($connection);
?>
</div>
        </div>

        <div class="row inp-row w-100">
          <div class="col-md-5 m-4 w-100">
            <div class="form-group w-100">
              <label>Event Location:</label>
              <input type="text"
                class="form-control inpd" name="evloc" id="locationInput" placeholder="Click to choose location" readonly data-toggle="modal" data-target="#locationModal" required>
            </div>
          </div>
          <div class="col-md-5 m-4">
            <div class="form-group w-100">
              <label>Event Date:</label>
              <input type="date"
                class="form-control inpd" name="evdate" required>
            </div>
          </div>
        </div>

        <div class="row inp-row w-100">
          <div class="col-md-3 m-4 w-100">
            <div class="form-group w-100">
              <label>No. of Attendance:</label>

              <input type="number"
                class="form-control inpd" name="noofguests" id="numberOfGuests" value="1" required />
            </div>
          </div>
          <div class="col-md-3 m-4">
            <div class="form-group w-100">
              <label>Event Start Timing:</label>
              <input type="time"
                class="form-control inpd" name="starttime" required>
            </div>
          </div>
          <div class="col-md-3 m-4">
            <div class="form-group w-100">
              <label>Event End Timing:</label>
              <input type="time"
                class="form-control inpd" name="endtime" required>
            </div>
          </div>
        </div>

        <div class="row inp-row w-100">
          <div class="col-md-11 m-4 w-100">
              <div class="form-group w-100">
                <label>Please Describe Event:</label>
                <textarea class="form-control inpd" name="describe" rows="8"></textarea>
              </div>
          </div>
        </div>

        <div class="row inp-row w-100">
          <div class="col-md-5 m-4">
          <?php
// Include the database connection
include("../../AD/pages/connection.php");

// Query to fetch name and price from the theme table
$query = "SELECT Name, Price FROM theme"; 
$data = mysqli_query($connection, $query);
?>

<div class="form-group w-100">
    <label>Theme:</label>
    <select class="form-control inpd" name="theme" required>
        <option>Click to Choose the Theme</option>
        <?php
        // Check if any data is returned from the database
        if (mysqli_num_rows($data) > 0) {
            // Loop through the fetched results and populate the dropdown
            while ($result = mysqli_fetch_assoc($data)) {
                echo '<option data-price="' . $result['Price'] . '">' . $result['Name'] . '</option>';
            }
        } else {
            echo '<option>No themes available</option>';
        }
        ?>
    </select>
</div>

<?php
// Close the database connection
mysqli_close($connection);
?>
</div>
          <div class="col-md-5 m-4 w-100">
            <div class="form-group w-100">
              <label>Decoration:</label>
              <input type="text"
                class="form-control inpd" name="decor" id="decorationInput" placeholder="Click to choose decoration" readonly data-toggle="modal" data-target="#decorationModal" required>
            </div>
          </div>
        </div>

        <div class="row inp-row w-100">
          <div class="col-md-5 m-4 w-100 menu-form input-container">
            <label>Menu:</label>
            <div class="form-group w-100 input-group" placeholder="Click to select..." id="menuInputGroup">
            <input type="text" class="form-control inpd input-box" name="menu" id="menuInput" placeholder="Click to choose menu" data-toggle="modal" data-target="#menuModal" required>
            
         </div>
  </div>
          <div class="col-md-5 m-4 w-100 menu-form input-container">
            <label>Beverages:</label>
            <div class="form-group w-100 input-group" placeholder="Click to select..." id="beverageInputGroup">
            <input type="text" class="form-control inpd input-box" name="beverage" id="beverageInput" placeholder="Click to choose beverage" data-toggle="modal" data-target="#beverageModal" required>
            
         </div>

          </div>
        </div>

        <div class="row inp-row w-100">
          <div class="col-md-11 m-4 w-100">
              <div class="form-group w-100">
                <label>Additional Notes and Needs:</label>
                <textarea class="form-control inpd" rows="8"></textarea>
              </div>
          </div>
        </div>


        <div class="row inp-row w-100">
          <div class="col-md-5 m-4 w-100">
          <div class="form-check w-100">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" style="border: 3px solid #311c3d !important;border-radius: 50%;" value="checkedValue" checked>
               Transportation
            </label>
          </div>
          </div>
        </div>

        <div class="row inp-row w-100">
          <div class="col-md-5 m-4">
          <?php
// Include the database connection
include("../../AD/pages/connection.php");

// Query to fetch vehicle name and price from the vehicles table
$query = "SELECT Name, Price FROM vehicles"; 
$data = mysqli_query($connection, $query);
?>

<div class="form-group w-100">
    <label>Vehicles:</label>
    <select class="form-control inpd" name="vehicle">
        <option>Click to Choose the Vehicles</option>
        <?php
        // Check if any data is returned from the database
        if (mysqli_num_rows($data) > 0) {
            // Loop through the fetched results and populate the dropdown
            while ($result = mysqli_fetch_assoc($data)) {
                echo '<option data-price="' . $result['Price'] . '">' . $result['Name'] . '</option>';
            }
        } else {
            // Show this option if no vehicles are available
            echo '<option>No vehicles available</option>';
        }
        ?>
    </select>
</div>

<?php
// Close the database connection
mysqli_close($connection);
?>
</div>
        </div>

        <div class="row inp-row w-100">
          <div class="col-md-5 m-4 w-100">
          <div class="form-check w-100">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" style="border: 3px solid #311c3d !important;border-radius: 50%;" value="checkedValue" checked>
               Themed Clothing
            </label>
          </div>
          </div>
        </div>

        <div class="row bk-head w-100 mb-5">
          <h1>Clothing Details</h1>
        </div>
    

        <div class="row inp-row w-100">
          <div class="col-md-5 m-4 w-100">
            <div class="form-group w-100">
              <label>Theme:</label>
              <input type="text"
                class="form-control inpd" name="cloththeme">
            </div>
          </div>
          <div class="col-md-5 m-4">
            <div class="form-group w-100">
              <label>Color:</label>
              <input type="text"
                class="form-control inpd" name="color">
            </div>
          </div>
        </div>

        <div class="row inp-row w-100">
          <div class="col-md-5 m-4 w-100">
            <div class="form-group w-100">
              <label>Address:</label>
              <input type="text"
                class="form-control inpd" name="address">
            </div>
          </div>
          <div class="col-md-5 m-4">
            <div class="form-group w-100">
              <label>No. of Suits:</label>
              <input type="number"
                class="form-control inpd" name="noofsuits">
            </div>
          </div>
        </div>
        <div class="row pb-4 w-100 btn-ab">
         <button type="submit" id="book" name="book" class="btn-fd">BOOK NOW</button>
        </div>
      </form>
    </div>
    


    <?php
    include('footer.php');
    ?>



    
    <!-- Modal -->



    <div class="modal fade" id="locationModal" tabindex="-1" role="dialog" aria-labelledby="locationModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="locationModalLabel">Choose the Location</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" id="locationItems">
        <?php
include("../../AD/pages/connection.php");

$query = "SELECT * FROM location";
$data = mysqli_query($connection, $query);

if (mysqli_num_rows($data) > 0) {
    while ($result = mysqli_fetch_assoc($data)) {
        // Displaying the dynamic content inside the modal
        echo '
        <div class="col-md-4 text-center">
            <img src="' . $result['Image'] . '" class="img-fluid location-image" data-name="' . $result['Name'] . '" data-price="' . $result['Price'] . '" alt="' . $result['Name'] . '" style="cursor:pointer;">
            <p>' . $result['Name'] . '</p>
        </div>';
    }
} else {
    echo '<p>No locations available.</p>';
}
?>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="confirmLocationSelection">Confirm Selection</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>




    <div class="modal fade" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="menuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="menuModalLabel">Choose the Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" id="menuItems">
          <!-- Dynamic content from PHP will be injected here --><?php
include("../../AD/pages/connection.php");
$query = "SELECT * FROM menu";
$data = mysqli_query($connection, $query);

if (mysqli_num_rows($data) > 0) {
    while ($result = mysqli_fetch_assoc($data)) {
        // Displaying the dynamic content inside the modal
        echo '
        <div class="col-md-4 text-center">
            <img src="' . $result['Image'] . '" class="img-fluid menu-image" data-name="' . $result['Name'] . '" data-price="' . $result['Price'] . '" alt="' . $result['Name'] . '" style="cursor:pointer;">
            <p>' . $result['Name'] . '</p>
        </div>';
    }
} else {
    echo '<p>No menu items available.</p>';
}
?>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="confirmSelection">Confirm Selection</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Beverage Modal -->
<div class="modal fade" id="beverageModal" tabindex="-1" role="dialog" aria-labelledby="beverageModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="beverageModalLabel">Choose the Beverages</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" id="beverageItems">
        <?php
include("../../AD/pages/connection.php");

$query = "SELECT * FROM beverage";
$data = mysqli_query($connection, $query);

if (mysqli_num_rows($data) > 0) {
    while ($result = mysqli_fetch_assoc($data)) {
        // Displaying the dynamic content inside the modal
        echo '
        <div class="col-md-4 text-center">
            <img src="' . $result['Image'] . '" class="img-fluid beverage-image" data-name="' . $result['Name'] . '" data-price="' . $result['Price'] . '" alt="' . $result['Name'] . '" style="cursor:pointer;">
            <p>' . $result['Name'] . '</p>
        </div>';
    }
} else {
    echo '<p>No beverages available.</p>';
}
?>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="confirmBeverageSelection">Confirm Selection</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="decorationModal" tabindex="-1" role="dialog" aria-labelledby="decorationModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="decorationModalLabel">Choose the Decoration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" id="decorationItems"><?php
include("../../AD/pages/connection.php");

$query = "SELECT * FROM decoration";
$data = mysqli_query($connection, $query);

if (mysqli_num_rows($data) > 0) {
    while ($result = mysqli_fetch_assoc($data)) {
        // Displaying the dynamic content inside the modal
        echo '
        <div class="col-md-4 text-center">
            <img src="' . $result['Image'] . '" class="img-fluid decoration-image" data-name="' . $result['Name'] . '" data-price="' . $result['Price'] . '" alt="' . $result['Name'] . '" style="cursor:pointer;">
            <p>' . $result['Name'] . '</p>
        </div>';
    }
} else {
    echo '<p>No decorations available.</p>';
}
?>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="confirmDecorationSelection">Confirm Selection</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
document.addEventListener("DOMContentLoaded", function () {
    // Global variables to store selected prices
    let selectedMenuPrice = 0;
    let selectedBeveragePrice = 0;
    let selectedLocationPrice = 0;
    let selectedDecorationPrice = 0;
    let selectedVehiclePrice = 0;
    let selectedThemePrice = 0;

    const numberOfGuestsInput = document.getElementById('numberOfGuests');
    const totalPriceDisplay = document.getElementById('totalPriceDisplay');

    // Event Listeners for Menu
    document.querySelectorAll('.menu-image').forEach(img => {
        img.addEventListener('click', function () {
            selectedMenuPrice = parseFloat(this.getAttribute('data-price'));
            document.getElementById('menuInput').value = this.getAttribute('data-name');
        });
    });

    document.getElementById('confirmSelection').addEventListener('click', function () {
        calculateTotal();
        $('#menuModal').modal('hide');
    });

    // Event Listeners for Beverages
    document.querySelectorAll('.beverage-image').forEach(img => {
        img.addEventListener('click', function () {
            selectedBeveragePrice = parseFloat(this.getAttribute('data-price'));
            document.getElementById('beverageInput').value = this.getAttribute('data-name');
        });
    });

    document.getElementById('confirmBeverageSelection').addEventListener('click', function () {
        calculateTotal();
        $('#beverageModal').modal('hide');
    });

    // Event Listeners for Location
    document.querySelectorAll('.location-image').forEach(img => {
        img.addEventListener('click', function () {
            selectedLocationPrice = parseFloat(this.getAttribute('data-price'));
            document.getElementById('locationInput').value = this.getAttribute('data-name');
        });
    });

    document.getElementById('confirmLocationSelection').addEventListener('click', function () {
        calculateTotal();
        $('#locationModal').modal('hide');
    });

    // Event Listeners for Decoration
    document.querySelectorAll('.decoration-image').forEach(img => {
        img.addEventListener('click', function () {
            selectedDecorationPrice = parseFloat(this.getAttribute('data-price'));
            document.getElementById('decorationInput').value = this.getAttribute('data-name');
        });
    });

    document.getElementById('confirmDecorationSelection').addEventListener('click', function () {
        calculateTotal();
        $('#decorationModal').modal('hide');
    });

    // Event Listeners for Vehicles
    document.querySelector('select[name="vehicle"]').addEventListener('change', function () {
        selectedVehiclePrice = parseFloat(this.selectedOptions[0].getAttribute('data-price'));
        calculateTotal();
    });

    // Event Listeners for Themes
    document.querySelector('select[name="theme"]').addEventListener('change', function () {
        selectedThemePrice = parseFloat(this.selectedOptions[0].getAttribute('data-price'));
        calculateTotal();
    });

    // Event Listener for No. of Guests
    numberOfGuestsInput.addEventListener('input', function () {
        calculateTotal();
    });

    // Function to calculate total cost
    function calculateTotal() {
        const numberOfGuests = parseInt(numberOfGuestsInput.value) || 1;

        // Multiply menu and beverage prices by the number of guests
        const totalMenuPrice = selectedMenuPrice * numberOfGuests;
        const totalBeveragePrice = selectedBeveragePrice * numberOfGuests;

        // Sum everything
        const total = totalMenuPrice + totalBeveragePrice + selectedLocationPrice + selectedDecorationPrice + selectedVehiclePrice + selectedThemePrice;

        // Display total
        totalPriceDisplay.textContent = `Total Price: PKR{total.toFixed(2)}`;
        console.log("Number of Guests:", numberOfGuests);
    console.log("Selected Menu Price:", selectedMenuPrice);
    console.log("Selected Beverage Price:", selectedBeveragePrice);
    console.log("Selected Location Price:", selectedLocationPrice);
    console.log("Selected Decoration Price:", selectedDecorationPrice);
    console.log("Selected Vehicle Price:", selectedVehiclePrice);
    console.log("Selected Theme Price:", selectedThemePrice);
    console.log("Total Price:", total.toFixed(2));
    }
});
</script>
<p id="totalPriceDisplay"></p>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    <script src="../assets/js/script.js"></script>
  
  
  </body>
</html>

