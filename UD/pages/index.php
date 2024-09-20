<!doctype html>
<html lang="en">
  <head>
    <title>Home | Dream Event</title>
    <link rel="shortcut icon" href="../assets/img/wlogo.png" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="Assests/First Page/images/Logo.png">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inder&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- Costume CSS -->
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
  width: 100%;
  height: 100%;
  font-family: sans-serif;
  overflow-x: hidden; 

}

h1, h2, ul, p {
  margin: 0;
}

ul {
  padding: 0;
  list-style: none;
}

a:hover {
  text-decoration: none;
}

img {
  max-width: 100%;
  height: auto;
}

span {
  color: var(--color-primary);
}


.btn:hover {
  background: linear-gradient(#cc10f1, #9733ee);
}

/* ==================================== 
       Navigation Start: 
   ==================================== */

   .Header {
    background-color:#382A40;
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
  
  
  /* end:  */

/* ==================================== 
       hero Section Start: 
   ==================================== */

  .hero {
    width: 100%;
    position: relative;
    height: 600px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    background-image: url(images/Bg-3.png);
    background-position:center;
    background-repeat: no-repeat;
    background-size: cover;
    margin-bottom: 80px;
    z-index: 1;
    animation: animateBackground 30s linear infinite;
    }


  .hero h1 span {
    color: #b62feb; 
  }

  @keyframes animateBackground {
    0%, 100% {
      background-image: url('../assets/img/Bg-3.png');
    }
  
    25%, 75% {
      background-image: url('../assets/img/Bg-1.png'); 
    }
    50% {
      background-image: url('../assets/img/Bg-2.png');
    }
  }

   .hero h1{
     font-family: Times New Roman;
     font-weight:bold;
     font-size: 4rem;
     color: white;
   }
   .hero p{
    /* font-family: 'Arial Black'; */
  
    color: white;
  }

  .hero .btn-home{
    background-color: #850eee;
    color: white;
    width:100%;
    border: none;
    border-radius:3px;
    font-size:23px;
    font-family:Times New Roman;
    font-weight:bold;
    outline: none;
    padding: 0.9rem;
  }

  .hero .btn-home:hover{
    background-color: #7c1ecf;

  }


      
/* ==================================== 
       End: 
   ==================================== */
/* ==================================== 
       Our Category Start: 
   ==================================== */

.circle-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: absolute;
      top: 500px;
      
    }

    .arrow-right{
       font-size: 40px;
       color: #b62feb;
       margin-top: 20px;
    }
    
    .arrow-right:hover{
      color: #a109dd;
      transition: .5s;
   }

    .circle {
      width: 300px;
      height: 300px;
      border-radius: 50%;
      background-size: cover;
      background-position: center;
      display: flex;
      align-items: center;
      justify-content:center ;
      z-index: 1;
      color: white;
      font-weight: bold;
      text-align: center;
      margin-right: 100px;
      padding: 80px 80px;
      font-weight:bold;
      font-family:Times New Roman;
      font-size: 40px;
      box-shadow: 2px 15px 10px #D9D9D9;
    }

    .circle1 {
      background-image: url('../assets/img/Category-1.png'); /* Update with the correct path */
      border: 10px solid white;

      
    }

    .circle2 {
      background-image: url('../assets/img/Category-2.png'); /* Update with the correct path */
      border: 10px solid white;
    }

    .circle3 {
      background-image: url('../assets/img/Category-3.png'); /* Update with the correct path */
      border: 10px solid white;
    }

/* ==================================== 
       End: 
   ==================================== */

   /* ==================================== 
       About Us Section Start: 
   =================================== */
    #about-us{
      margin-top: 270px !important;
    }


    .Content small{
      font-size: 30px;
      color: #a245ff;
      font-family:Times New Roman;
      font-weight:bolder;
    }

  
    .btn-about{
      background-color: #850eee;
      color: white;
      border: none;
      font-size:23px;
      font-family:Times New Roman;
      font-weight:bold;
      border-radius:2px;
      outline: none;
      padding: 0.9rem 2rem;
      border-radius: 5px;
      margin-top: 20px;
    }

    .btn-about:hover{
      background-color: #7c1ecf;
      border: none;
      outline: none;
    }
    
    .btn-about:focus{
      background-color: #7c1ecf;
      border: none;
      outline: none;
    }

/* ==================================== 
      Contact Us Section Start: 
  ==================================== */
  .contact-section {
    background: url('../assets/img/eve.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    color: white;
    padding: 60px 0;
    /* animation: animateBackground 15s linear infinite; */
    margin-top: 70px;
  }
  .contact-form {
    width: 120%;
  }
  .contact-form h2 {
    margin-bottom: 20px;
    font-size: 50px;
    font-family: 'Inika';
  }
  .contact-form .form-control, .contact-form .btn {
    margin-bottom: 15px;
  }

  .contact-form .btn-contact{
    background-color: #850eee;
    color: white;
    border: none;
    outline: none;
    padding: 0.9rem;
  }

  form input{
    background: transparent;
  } 

  .contact-form .btn-contact:hover{
    background-color: #7c1ecf;

  }
  .contact-form .form-group .form-control::placeholder{
    color: white;
    font-size: 20px;
  }
  .contact-form .form-group .form-control{
    background: transparent;
    padding: 20px;
    border: 2px solid white;
    font-family: 'Inder';
    color: white;
    outline: none;
    box-shadow: none;
    width: 90%;
    margin-right: 10%;
  }

  .contact-form .form-group #message{
    background: transparent;
    width: 62%;
    height: 200px;
    padding: 20px;
    border: 2px solid white;
    font-family: 'Inder';
    color: white;
    outline: none;
    box-shadow: none;
    width: 90%;
    margin-right: 10%;
  }

  .contact-input{
    color:white ;
    background-color: transparent;
    box-shadow: none;
    border: 2px solid white;
  
  }

  .contact-section::before{
    content: '';
    background-image:url(../assets/img/eve.jpg);
    width: 100%;
    height: 100%0;
    filter: brightness(30%);
  }

  .contact-input:focus{
    color:white ;
    background-color: transparent;
    box-shadow: none;
  }
  .contact-input::placeholder{
    color:white ;
    background-color: transparent;
    box-shadow: none;
  }

  .Contact-btn{
    width: 100%;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
  }
.Contact-btn button{
  width: 20%;
  border: none;
  border-radius: 15px;
  background-color: white;
  padding: 10px;
  color: black;
  font-size: 22px;
  font-weight: bolder;
  font-family: 'Inika';
}

.Contact-btn .btn-submit:hover{
  background-color: #6E1ADD;
  color: white;
  transition: .5s;
}
  /* ==================================== 
      Gallery Section Start: 
  ==================================== */

  /* Rectangle 17 */


  #gallery-section {
    padding: 50px 0;
    background-color: #ffffff;
  }
  .gallery-header {
    text-align: center;
    margin-bottom: 30px;
  }
  .gallery-header h2 {
    font-size: 2.5rem;
    color: #333;
  }

  #Gallery{
    margin-bottom: 20px;
  }
  .gallery-item {
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    height: 200px; /* Fixed height for uniformity */
    background-color: #eaeaea;

  }
  .gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: opacity 0.3s ease-in-out;
  }
  .gallery-item:hover img {
    opacity: 0.6;
  }
  .gallery-item:hover .overlay {
    opacity: 1;
  }
  .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    font-size: 1.2rem;
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
    text-align: center;
    padding: 10px;
    box-sizing: border-box;
  }
  @media (min-width: 576px) {
    .gallery-item {
      margin-bottom: 50px;
    }
  }
  @media (min-width: 768px) {
    .gallery-item {
      margin-bottom: 20px;
    }
  }
  @media (min-width: 992px) {
    .gallery-item {
      margin-bottom: 30px;
    }
  }

/* ==================================== 
       Footer Section Start: 
   ==================================== */
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

  .social a i{
    font-size: 30px;
    margin-right: 10px;
    color: white;
  }

  .social a i:hover{
    transform: scale(1.2);
    color: #b62feb;

  }

    
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

  .hero {
    height: 1000px;
  }

 .hero h1{
  font-size: 3.8rem;
  margin-top: -50px;
}

.arrow-right{
  font-size: 40px;
  color: #b62feb;
  display: none;
}

.circle-container {
  padding: 0 30px;
  flex-direction:row;
  top: 900px;
}

.circle {
  width: 150px;
  height: 150px;
  margin-bottom: 30px;
  margin-right: 15px;
}
  
}


@media (max-width: 500px) {
  .sidebar {
    width: 350px;
    left: -350px;
  }

  .hero {
    height: 1000px;
  }

 .hero h1{
  font-size: 3.8rem;
  margin-top: -50px;
}


.arrow-right{
  font-size: 40px;
  color: #b62feb;
  display: block;
}

.circle-container {
  padding: 0 30px;
  flex-direction: column;
  top: 900px;
  left: 60px;
}

.circle {
  width: 150px;
  height: 150px;
  margin-bottom: 30px;
 
}
  

.contact-form h2{
  margin-left: -70px;
}
.contact-form .form-group .form-control::placeholder{
  color: white;
  font-size: 20px;
}
.contact-form .form-group .form-control{
  background: transparent;
  padding: 20px;
  border: 2px solid white;
  font-family: 'Inder';
  color: white;
  outline: none;
  box-shadow: none;
  width:80%;
  margin-right: 10%;
}

.contact-form .form-group #message{
  background: transparent;
  width: 80%;
  height: 200px;
  padding: 20px;
  border: 2px solid white;
  font-family: 'Inder';
  color: white;
  outline: none;
  box-shadow: none;
  margin-right: 10%;
}

.contact-input{
  color:white ;
  background-color: transparent;
  box-shadow: none;
  border: 2px solid white;

}

.contact-section::before{
  content: '';
  background-image:url(../assets/img/eve.jpg);
  width: 100%;
  height: 100%;
  filter: brightness(30%);
}

.contact-input:focus{
  color:white ;
  background-color: transparent;
  box-shadow: none;
}
.contact-input::placeholder{
  color:white ;
  background-color: transparent;
  box-shadow: none;
}

.Contact-btn{
  width: 100%;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
}
.Contact-btn button{
width: 40%;
margin-left: -20%;
border: none;
border-radius: 15px;
background-color: white;
padding: 10px;
color: black;
font-size: 22px;
font-weight: bolder;
font-family: 'Inika';
}

#about-us{
  margin-top: 540px;
}
}



@media (max-width: 370px) {

  .hero {
    height: 1500px;
  }

 .hero h1{
  font-size: 3.8rem;
  margin-top: -50px;
}



.circle-container {
  padding: 0 30px;
  flex-direction: column;
  top: 900px;
  left: 50px;
}

.circle {
  width: 150px;
  height: 150px;
  margin-bottom: 30px;
 
}


.contact-form h2{
  margin-left: -70px;
  font-size: 40px;
}
.contact-form .form-group .form-control::placeholder{
  color: white;
  font-size: 20px;
}
.contact-form .form-group .form-control{
  background: transparent;
  padding: 20px;
  border: 2px solid white;
  font-family: 'Inder';
  color: white;
  outline: none;
  box-shadow: none;
  width:80%;
  margin-right: 10%;
}

.contact-form .form-group #message{
  background: transparent;
  width: 80%;
  height: 200px;
  padding: 20px;
  border: 2px solid white;
  font-family: 'Inder';
  color: white;
  outline: none;
  box-shadow: none;
  margin-right: 10%;
}

.contact-input{
  color:white ;
  background-color: transparent;
  box-shadow: none;
  border: 2px solid white;

}

.contact-section::before{
  content: '';
  background-image:url(../assets/img/eve.jpg);
  width: 100%;
  height: 100%;
  filter: brightness(30%);
}

.contact-input:focus{
  color:white ;
  background-color: transparent;
  box-shadow: none;
}
.contact-input::placeholder{
  color:white ;
  background-color: transparent;
  box-shadow: none;
}

.Contact-btn{
  width: 100%;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
}
.Contact-btn button{
width: 40%;
margin-left: -20%;
border: none;
border-radius: 15px;
background-color: white;
padding: 10px;
color: black;
font-size: 22px;
font-weight: bolder;
font-family: 'Inika';
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

    #about-us{
      margin-top: 70px;
    }

    #about-us img{
      margin-top: 70px;
      width: 400px;
      height: 400px;
    }
}

@media (min-width: 1024px) {
  .sidebar {
    width: 350px;
    left: -350px;}
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

  @media (min-width:540px) and (max-width:765px) {
    
.contact-form h2{
  margin-left: -70px;
}
.contact-form .form-group .form-control::placeholder{
  color: white;
  font-size: 20px;
}
.contact-form .form-group .form-control{
  background: transparent;
  padding: 20px;
  border: 2px solid white;
  font-family: 'Inder';
  color: white;
  outline: none;
  box-shadow: none;
  width:80%;
  margin-right: 10%;
}

.contact-form .form-group #message{
  background: transparent;
  width: 80%;
  height: 200px;
  padding: 20px;
  border: 2px solid white;
  font-family: 'Inder';
  color: white;
  outline: none;
  box-shadow: none;
  margin-right: 10%;
}

.contact-input{
  color:white ;
  background-color: transparent;
  box-shadow: none;
  border: 2px solid white;

}

.contact-section::before{
  content: '';
  background-image:url(../assets/img/eve.jpg);
  width: 100%;
  height: 100%;
  filter: brightness(30%);
}

.contact-input:focus{
  color:white ;
  background-color: transparent;
  box-shadow: none;
}
.contact-input::placeholder{
  color:white ;
  background-color: transparent;
  box-shadow: none;
}

.Contact-btn{
  width: 100%;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
}
.Contact-btn button{
width: 40%;
margin-left: -20%;
border: none;
border-radius: 15px;
background-color: white;
padding: 10px;
color: black;
font-size: 22px;
font-weight: bolder;
font-family: 'Inika';
}


  }


  #animation-container {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    width: 100%;
    opacity: 0;
    visibility: hidden;
    transition: opacity 1s ease-out;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 9999;
}

#logo {
    width: 200px;
    height: auto;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    opacity: 0;
    animation: logo-appear 1.5s ease forwards, logo-slide 1.5s 1.5s ease forwards;
}
@keyframes logo-appear {
    0% {
        opacity: 0;
        transform: translate(-50%, 0) scale(0);
    }

    100%{
      opacity: 1;
      transform: translate(-50%, 0) scale(2);
    }
}
.lead{
  font-family:Times New Roman;
  font-size:29px;
}
.mainabh{
  font-family:Times New Roman;
  font-weight:bold;
  font-size:45px;
}

.gallery {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }
    .gallery-item {
      margin: 10px;
      flex: 1 0 21%; /* Flex items to take up about 21% of the width */
      box-sizing: border-box;
    }
    .gallery-item img {
      width: 100%;
      height: auto;
      object-fit: cover;
      display: block;
    }
    @media (max-width: 768px) {
      .gallery-item {
        flex: 1 0 46%; /* Two items per row on tablets */
      }
    }
    @media (max-width: 576px) {
      .gallery-item {
        flex: 1 0 100%; /* One item per row on mobile devices */
      }
    }
    .Home>a{
      color:#AA68FF !important;
    }
    .gh{
      font-family:Times New Roman;
      font-weight:bold;
      font-size:45px;
    }
    </style>
  <body>

  <?php
  include("navbar.php");
  ?>
    
    <div id="animation-container">
      <img id="logo" src="Assests/FirstPage/images/Logo.png" alt="Logo">
  </div>
  
 <!-- Main -->
<main id="content" class="fade-in">
<div class="hero px-4 py-5">
    <h1 class="display-5 fw-bold">WELCOME TO <span>DREAM EVENT</span></h1>
    <div class="col-lg-8 mx-auto">
      <p class="lead mb-4 mt-4">Your one-stop solution for unforgettable celebration! From weddings and parties to corporate events and picnics, we handle it all. Let's make your dream event a reality.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a href="signup.php"><button type="button" class="btn-home btn-lg px-4 gap-3">Get Started</button></a>
      </div>
    </div>
    <div class="circle-container ml-3 sm-ml-4 ">
      <div class="circle circle1">Festivals </div>
      <div class="circle circle2">Weddings </div>
      <div class="circle circle3">Birthday </div>
      <a href="services.php"><i class="fa fa-arrow-right arrow-right" ></i></a>
    </div>
  </div>

<!-- About Us Section -->
<section id="about-us" class="py-5">
  <div class="container">
    <div class="row align-items-center ">
      <!-- Left Side Image -->
      <div class="col-lg-5 col-md-5 col-sm-12">
        <img src="../assets/img/abh.png" alt="About Us Image" class="img-fluid w-100 h-100" >
      </div>
      <!-- Right Side Content -->
      <div class="Content col-lg-7 col-md-7 col-sm-12">
        <small class="text-uppercase">About Dream-Events</small>
        <br><br>
        <h2 class="display-4 mainabh">Creating Memories, Crafting Dreams</h2><br>
        <p class="lead">Welcome to Dream Events, where we turn your special moments into unforgettable experiences. Our expert team specializes in creating exceptional events tailored to your vision. From weddings and anniversaries to birthday parties and corporate gatherings, we manage every detail to perfection. With a passion for creativity and a commitment to excellence, Dream Events ensures that your celebrations are not just events, but cherished memories. Let us bring your dream event to life!.</p>
        <br>
        <a href="AboutUs.php"><button class="btn-about">About Us</button></a>
      </div>
    </div>
  </div>
</section>
  
<!-- Contact Section -->
<section class="contact-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8">
        <div class="contact-form">
          <h2 class="text-center">CONTACT US</h2>
         <form action="#" method="POST">

            <div class="form-row row" >
              <div class="form-group col-md-6">
                <input type="text" class="form-control" id="firstName" placeholder="First Name" name="fname">
              </div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" id="lastName" placeholder="Last Name"   name="lname">
              </div>
            </div>

            <div class="form-row row" >
            <div class="form-group col-md-6">
              <input type="email" class="form-control" id="email" placeholder="Email" name="email">
            </div>

            <div class="form-group col-md-6">
              <input type="number" class="form-control" id="phone" placeholder="Phone" name="Phone">
            </div>
            </div>

            <div class="form-group row">
            <div class="form-group col-md-6">
              <textarea class="form-control" id="message" placeholder="Message" name="Message"></textarea>
              </div>
            </div>
            
            <div class="Contact-btn"> 
            <button type="submit" class="btn-submit" name="send-message">Submit</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Gallery Section -->
<div class="container">
  <h1 class="text-center mt-4 gh p-5">OUR EVENT GALLERY</h1>
  <div class="gallery">
    <?php
      include("../../AD/pages/connection.php");

      $query = "SELECT Image FROM gallery";
      $result = mysqli_query($connection, $query);

      if(mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
    ?>
    <div class="gallery-item">
      <img class="img-fluid w-100 h-100" src="<?php echo $row['Image']; ?>" width="100%" height="100%">
    </div>
    <?php
          }
      } else {
          echo "<p>No images available in the gallery.</p>";
      }
    ?>
  </div>
</div>






</main>
<!-- Main  -->



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
if(isset($_POST['send-message'])){
    $NAME = $_POST["fname"];
    $LASTNAME = $_POST["lname"];
    $EMAIL = $_POST["email"];
    $Phone = $_POST["Phone"];
    $Message = $_POST["Message"];

    $query = "insert into contact(First_Name,Last_Name,Email,Phone,Message)values('$NAME','$LASTNAME','$EMAIL','$Phone','$Message')";

    
    $data = mysqli_query($connection,$query);
if($data){


    echo "<script>alert('Data submitted successfuuly')</script>";
  
}
else{

    echo "<script>alert('Data submitted failed')</script>";
  

}



}

?> 