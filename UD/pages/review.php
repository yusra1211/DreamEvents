<!doctype html>
<html lang="en">
  <head>
    <title>Dream Event | Review</title>
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
    
</head>
<style>
  .Review>a{
      color:#AA68FF !important;
    }

  </style>
  <body>
      
<?php
include("navbar.php");
?>
  <main>
    <!-- home section  -->
    <div class="container-fluid About-Main-Container">
        <div class="heading">
            <h1 class="text-white">REVIEW</h1>
        </div>
    </div>
    <!-- home section end: -->
    <?php
include("../../AD/pages/connection.php");

// Fetch data from the database
$query1 = "SELECT * FROM re1"; // Assuming re1 contains names and profile images
$query2 = "SELECT * FROM re2"; // Assuming re2 contains comments

$data1 = mysqli_query($connection, $query1);
$data2 = mysqli_query($connection, $query2);

$reviews = [];
while ($row1 = mysqli_fetch_assoc($data1)) {
    $review = [];
    $review['name'] = $row1['Name'];
    $review['Image'] = $row1['Image']; // Assuming there's a column for picture path
    $review['comment'] = '';

    // Reset pointer to the beginning of $data2 for each $row1
    mysqli_data_seek($data2, 0);

    // Find corresponding review in re2 based on email
    while ($row2 = mysqli_fetch_assoc($data2)) {
        if ($row1['Email'] == $row2['Email']) {
            $review['comment'] = $row2['Comment'];
            break;
        }
    }
    $reviews[] = $review;
}
?>

<!-- Review Section -->
<div class="container-fluid review-container">
  <?php if (!empty($reviews)): ?>
    <?php foreach ($reviews as $review): ?>
      <div class="review-box shadow-lg p-5 mb-4">
        <div class="row">
          <div class="col-lg-3 d-flex justify-content-center align-items-center position-relative">
            <div class="profile-bg position-absolute"></div>

            <div class="profile-square shadow">
              <div class="profile-inner text-center">
                <img src="<?php echo htmlspecialchars($review['Image']); ?>" alt="Client Image" class="img-fluid">
                <h5><?php echo htmlspecialchars($review['name']); ?></h5>
              </div>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="review-heading-box">
              <h3 class="text-purple">Client Reviews</h3>
            </div>
            <img src="../assets/img/Quote.png" alt="Quote Left" class="quote-left">
            <div class="review-text ms-4">
              <p>"<?php echo htmlspecialchars($review['comment']); ?>"</p>
            </div>
            <img src="../assets/img/Quote-end.png" alt="Quote Right" class="quote-right">
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  <?php else: ?>
    <div class="review-box shadow-lg p-5 mb-4">
      <div class="row">
        <div class="col-12 text-center">
          <p>No reviews available.</p>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <div class="pen-circle" data-toggle="modal" data-target="#modal-review">
    <img src="../assets/img/Pen-img.png" alt="Pen Icon">
  </div>
</div>

<!-- Review Section  -->

<!-- modal - box  -->

<div class="modal fade modal-review" id="modal-review" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
        
      <form method="POST" action="#" enctype="multipart/form-data">
          <div class="heading-box-1">
              <h1>Share Your Experience With Us</h1>
          </div>
          <div class="heading-box-2">
              <h2>Basic Information</h2>
          </div>
          <div class="form-container">
                  <div class="row" id="form-1">
                      <div class="col-md-6">
                          <label for="name">Name:</label>
                          <input type="text" id="name" name="name">
                      </div>
                      <div class="col-md-6">
                          <label for="email">Email:</label>
                          <input type="email" id="email" name="email">
                      </div>
                  </div>
                  <div class="row" id="form-1">
                      <div class="col-md-6">
                          <label for="eventType"class="w-50">Event Type:</label>
                          <input type="text" id="eventType" name="eventType">
                      </div>
                      <div class="col-md-6">
                          <label for="eventDate">Event Date:</label><br>
                          <input type="date" class="w-50" id="eventDate" style="border: 3px solid black;" name="eventDate">
                      </div>
                  </div>
                  <div class="row" id="form-1">
                      <div class="col-md-6">
                          <label for="images">Images:</label>
                          <input type="file" id="images" name="uploadfile" accept="image/*">
                      </div>
                  </div>
            
          </div>
          <div class="heading-box-2">
              <h2>Comments and Reviews</h2>
          </div>
          <div class="form-container">
                  <div class="row">
                      <div class="col-md-6">
                          <li for="like">What Do You Like Most about our Services?</li>
                      </div>
                      <div class="col-md-6">
                          <textarea id="like" name="like" style="border: 3px solid black;"></textarea>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                          <li>What Could We Improve?</li>
                      </div>
                      <div class="col-md-6">
                          <textarea id="improve" name="improve" style="border: 3px solid black;"></textarea>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                          <label for="recommend" class="checkbox-label">Would you recommend our services to others?</label>
                          <div class="radio-data">
                              <li><input type="radio" name="recommend" value="yes"> YES</li>
                              <li><input type="radio" name="recommend" value="no"> NO</li>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                          <label for="agree" class="checkbox-label">
                              <input type="checkbox" id="agree" name="agree">
                              I agree to allow Dream Events to use my review and any uploaded media on their website and promotional materials.
                          </label>
                      </div>
                  </div>
                  <div class="row btn-box">
                      <div class="col-md-12 box-btn">
                          <button type="submit" class="btn-custom" name="submit">Submit Review</button>
                      </div>
                  </div>
            
          </div>

</form>
          

        </div>
  </div>
</div>
<!-- modal - box  -->
  </main>
    
  <?php
include("footer.php");
?>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>



<?php
include("../../AD/pages/connection.php");

if(isset($_POST['submit'])){

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../assets/img/".$filename;

    // Moving the uploaded file to the desired directory
    if (move_uploaded_file($tempname, $folder)) {
        echo "<script>alert('File uploaded successfully')</script>";
    } else {
        echo "<script>alert('Failed to upload file')</script>";
    }

    $NAME = $_POST['name'];
    $EMAIL = $_POST['email'];
    $EVETYPE = $_POST['eventType'];
    $EVEDATE = $_POST['eventDate'];
    $COMMENT = $_POST['like'];
    $REVIEW = $_POST['improve'];
    $ACCESS = $_POST['agree'];

    // Make sure to use the correct column names (e.g., avoid spaces in column names)
    $query1 = "INSERT INTO re1(Name, Email, Event_Type, Event_Date, Image) 
               VALUES ('$NAME','$EMAIL','$EVETYPE','$EVEDATE','$folder')";
    $query2 = "INSERT INTO re2(Email, Comment, Review, Access) 
               VALUES ('$EMAIL','$COMMENT','$REVIEW','$ACCESS')";

    // Execute the queries
    $data1 = mysqli_query($connection, $query1);
    $data2 = mysqli_query($connection, $query2);

    if($data1 && $data2){
        echo "<script>alert('Data submitted successfully')</script>";
    } else {
        echo "<script>alert('Data submission failed')</script>";
    }

}
?>
