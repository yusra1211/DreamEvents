<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="shortcut icon" href="../assets/img/wlogo.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/small.css">
</head>

<style>
    :root {
--color-primary: #b62feb;
--color-light-gray: #e0d7d7;
--color-black: black;
--color-black-1: #212b38;
}

* {
margin: 0;
padding: 0;
box-sizing: border-box;
}

::selection{
background-color: #7228bd;
color: white;
}

body, html {
    height: 100%;
    width: 100%;
    font-family: 'Inika', serif;
    background-color: rgb(255, 255, 255);
    overflow-x: hidden;
}


/* ==================================== 
     Navigation Start: 
 ==================================== */

 .Header {
    background-color: rgb(92, 72, 102);
    height: 120px;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 5%;
    position: relative;
    text-transform:capitalize;
    font-weight: bold;
    font-family: 'Times New Roman';
    }
    /* 
    .navbar{
    background-color: white;
    height: 100%;
    border-radius: 17px;
    } */
    
    #nav-Links {
    color: rgb(255, 255, 255);
    }
    
    #nav-Links:hover {
    color: var(--color-primary);
    }
    
    .Header ul {
    list-style: none;
    display: flex;
    }
    
    .Header ul li {
    padding: 5px 20px;
    position: relative;
    }
    
    .Header ul li a {
    font-size: 21px;
    color: var(--color-light-gray);
    text-decoration: none;
    transition: all 0.3s;
    }
    
    .Header ul li a:hover {
    color: var(--color-primary);
    }
    
    
    
    .fas {
    float: right;
    margin-left: 10px;
    padding-top: 3px;
    }
    
    
    .btn-nav {
    padding: 15px;
    width: 130px;
    border-radius: 7%;
    background: linear-gradient(#da22ff, #9733ee);
    color: white;
    font-size: 17px;
    outline: none;
    border: none;
    }
    
    .btn-nav a {
    color: white;
    }
    
    .btn-nav:hover {
    background: linear-gradient(#cc10f1, #9733ee);
    }
    
    /* Side Bar */
    #checkbtn {
    float: right;
    margin-right: 10px;
    font-size: 2rem;
    color: white;
    line-height: 120px;
    display: none;
    }
    
    #check {
    display: none;
    }
    
    
    .sidebar {
    height: 100%;
    width: 250px;
    position: fixed;
    top: 0;
    left: -250px;
    background-color: white;
    overflow-x: hidden;
    transition: 0.3s;
    padding-top: 60px;
    z-index: 1000;
    }
    
    .sidebar .closebtn {
    position: absolute;
    top: 10px;
    right: 20px;
    font-size: 36px;
    width: 60px;
    border-radius: 5%;
    background: var(--color-primary);
    color: white;
    border: none;
    cursor: pointer;
    }
    
    .sidebar-links {
    list-style-type: none;
    padding: 0;
    }
    
    .sidebar-links li a {
    padding: 10px 15px;
    text-decoration: none;
    font-size: 16px;
    color: gray;
    display: block;
    transition: 0.3s;
    font-weight: 700;
    margin-bottom: 20px;
    }
    
    .sidebar-links li a:hover {
    background-color: #f1f1f1;
    color: var(--color-primary);
    }
    
    #social-icon{
    display: flex;
    flex-direction: row;
    }
    
    #social-icon li a i{
    font-size: 20px;
    }
    
    
    
    /* end:  */

/* Home Section */
.home-section {
    height: 60vh;
    background: url('../assets/img/Abbg.jpg') no-repeat center center/cover;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
}

.home-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
}

.home-section h1 {
    color: white;
    z-index: 1;
    font-size: 3rem;
    text-transform: uppercase;
}

/* Services Section */
.services-section {
    margin-top: -70px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    z-index: 1;
}

.service-card {
    border-radius: 15px;
    box-shadow: 10px 40px 80px rgba(0, 0, 0, 0.2);
    background-color: #fff;
    color: #000;
    text-align: left;
    padding: 20px;
    width: 280px;
    height: 460px;
    position: relative;
    margin-top: -80px !important;
}

.service-card .circle {
    position: absolute;
    top: -45px;
    left: 50%;
    transform: translateX(-50%);
    background: url('images/Services-img-1.jpg') no-repeat center center/cover;
    border: 6px solid #fff;
    border-radius: 50%;
    height:130px;
    width:130px;
}
.service-card .circle img{
    border-radius:50%;
}


.services-title {
    margin-top: 80px;
    text-align: center;
    height: auto;
}

.service-card .services-title h3 {
    font-size: 2rem;
    font-weight: bold;
}

.service-card p {
    margin: 10px 0;
    width: 90%;
    font-size: 1rem;
    margin-bottom: 30px;
}

/* Button */
.book-now-btn {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    width: 50%;
    background-color: #6E1ADD;
    color: white;
    border: none;
    outline: none;
    border-radius: none;
    text-align: center;
    padding: 8px 0;
    cursor: pointer;
    text-transform: uppercase;
    font-weight: bold;
}

.book-now-btn:hover {
    background-color: #460F8E;
    color: white;
}

/* ==================================== 
Footer Section Start: 
==================================== */
footer{
background-image: url(images/footer-1.png);
width: 100%;   
margin-top: 100px;
background-position: center;
background-size: cover;
background-repeat: no-repeat;
}

.custom-icon {
width: 36px;
height: 36px;
margin-top: -12px;
}

#Get-in-touch{
margin-top: 30px;
}
/* 
#News-later{
margin-left: -35px;
} */
footer ul li a{
color: white;
}

footer ul li a:hover{
color: blueviolet;
}

footer h5{
color: #b62feb;
}
#btn-send{
padding: 7px 20px;
position: absolute;
right: 15px;
top: 40px;
color: #f1f1f1;
border: none;
border-radius: 5px;
background-color: #9733ee;
}
#btn-send:hover{
background-color: #870ef1;
}

.social{
margin-top: -20px;  
}
.social a i{
font-size: 30px;
margin-right: 10px;
color: white;
}

/* .social a i:hover{
transform: scale(1.2);
color: #b62feb;

} */


/* ==================================== 
End: 
==================================== */

/* Media Query */

@media (max-width: 1200px) {
#checkbtn {
  display: block;
}

.Header ul {
  display: none;
}

.btn-nav {
  display: none;
}
}

@media (max-width: 540px) {
.sidebar {
  width: 350px;
  left: -350px;
}   
}


@media (max-width: 500px) {
.sidebar {
  width: 350px;
  left: -350px;
}

}



@media (max-width: 370px) {
.sidebar {
  width: 350px;
  left: -350px;
}
}


@media (min-width: 700px) {
.sidebar {
  width: 350px;
  left: -350px;
}
.sidebar-links li a {
  padding: 10px 15px;
  text-decoration: none;
  font-size: 20px;
  color: gray;
  display: block;
  transition: 0.3s;
  font-weight: 700;
  margin-bottom: 2cqh;
}
}

@media (min-width: 1024px) {
.sidebar {
  width: 350px;
  left: -350px;
}
.sidebar-links {
  list-style-type: none;
  padding: 0;
}
  
.sidebar-links li a {
  padding: 10px 15px;
  text-decoration: none;
  font-size: 20px;
  color: gray;
  display: block;
  transition: 0.3s;
  font-weight: 700;
  margin-bottom: 2cqh;
}
}

@media (max-width: 768px) {
    .home-section h1 {
        font-size: 2.5rem;
    }

    .service-card .services-title h3 {
        font-size: 1.2rem;
    }

    .services-section {
        margin-top: -35%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .service-card {
        margin: 20px auto;
    }

}

@media (max-width: 576px) {
    .service-card .services-title h3 {
        font-size: 1rem;
    }

    .services-section {
        padding: 50px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-top: -30%;
    }

    .service-card {
        margin: 30px auto;

    }

    
}

/* Medium devices (iPad, iPad Air, iPad Pro) */
@media (min-width: 768px) and (max-width: 992px) {
    .services-section .row {
        display: flex;
        flex-wrap: wrap;
        /* border: 2px solid black; */
        justify-content: space-between;
        width: 120%;
    }

  .services-section{
    width: 100%;
    margin-top: -20%;
  }
    .service-card {
        width: 250px;
        height: 500px;
        margin-bottom: 40%;
        margin-right: 200px;
    }

    
}
.Service>a{
      color:#AA68FF !important;
    }

</style>

<body>

<?php
include("navbar.php");
?>

<section class="home-section">
        <h1>Services</h1>
    </section>
    <!-- Services Section -->
    </section>

    <div class="row w-100">
    <div class="row w-100 ml-4">
  <?php
  include("../../AD/pages/connection.php");

  $query = "SELECT * FROM service";
  $result = mysqli_query($connection, $query);

  if(mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
  ?>
  <div class="col-md-4">
    <div class="service-card ml-5">
      <div class="circle">
        <img src="<?php echo $row['Image']; ?>" class="img-fluid w-100 h-100" alt="">
      </div>
      <div class="services-title">
        <h3><?php echo $row['Event_Name']; ?></h3>
      </div>
      <p><?php echo $row['Description']; ?></p>
      <a href="logbook.php">
        <button class="book-now-btn">Book Now</button>
      </a>
    </div>
  </div>
  <?php
      }
  } else {
      echo "<p>No services available.</p>";
  }
  ?>
</div>
</div>

    <?php
include("footer.php");
?>
      

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('checkbtn').addEventListener('click', function () {
          document.getElementById('sidebar').style.left = '0';
      });

      document.getElementById('closebtn').addEventListener('click', function () {
          document.getElementById('sidebar').style.left = '-100%';
      });

      // Dropdown functionality for the sidebar
      document.querySelectorAll('.sidebar-links li a').forEach(link => {
          link.addEventListener('click', function (e) {
              let nextElement = e.target.nextElementSibling;
              if (nextElement && nextElement.classList.contains('dropdown-menu')) {
                  e.preventDefault();
                  nextElement.style.display = nextElement.style.display === 'block' ? 'none' : 'block';
              }
          });
      });     

    </script>
</body>

</html>
