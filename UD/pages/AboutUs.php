<!doctype html>
<html lang="en">
<head>
    <title>About Us</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../../FirstPage/images/Logo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inder&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
  /* body, html {
    width: 100%;
    height: 100vh;
    font-family: sans-serif;
    overflow-x: hidden; 
  
  } */

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

.Text-Container .content{
    width: 80%; text-align:left; 
    width: 50rem;
}
.Text-Container .content p {
    font-size: 25px;
    padding: 5rem;
    margin: 5rem;
    position: relative;
    font-family: 'Times', serif;
    font-weight: bold;
}
.About-Main-Container {
    height: 400px;
    width: 100%;
    background-image: url(../assets/img/Abbg.jpg);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}

.heading h1 {
    color: aliceblue;
    font-weight: bold;
    font-size: 3rem;
}

.Text-Container .content p::before {
    content: '\201c';
    top: -50px;
    left: -5px;
    color: rgb(173, 46, 215);
}

.Text-Container .content p::after {
    content: '\201d';
    bottom: -60px;
    color: rgb(173, 46, 215);
}

.Text-Container .content p::before, 
.Text-Container .content p::after {
    font-size: 4rem;
    position: absolute;
}

.About-Container {
    background-color: rgb(195, 191, 196);
    padding: 10rem;
    font-family: 'Times', serif;
    overflow: hidden;
    display: flex;
    flex-direction: column;
}

.About-Container .img-container {
    position: absolute;
    right: 15rem;
    margin-top: -80px;
}

.About-Container .img-container img {
    width: 400px;
    height: 400px;
}

.shading {
    color: rgb(173, 46, 215);
    font-weight: bold;
    font-size: 2.3rem;
    font-family: 'Times', serif;
}
.shading2 {
    color: #7B19FB;
    font-weight: bold;
    font-size: 2.3rem;
    font-family: 'Times', serif;
}

.txt3 {
    font-weight: bold;
    font-size: 1.5rem;
    width: 22rem;
}


.samp {
    color: rgb(173, 46, 215);
    font-size: 1.9rem;
    font-weight: bold;
    font-family: 'Times', serif;
}
/* .About-Us-section{
    margin-top: 90px;
} */
.About-Us-section h4 {
    font-family: 'Times', serif;
    font-weight: bold;
    font-size: 22px;
    list-style: square;
    font-family: 'Inder', sans-serif;

}

.img6 {
    height: 40rem;
    margin-top: -80px;
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
    margin-top: -30px;
  }
  
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


/* Responsive Styles */
@media (max-width: 767px) {
    .About-Main-Container {
        height: 300px;
    }

    .heading h1 {
        font-size: 2rem;
    }

    .Text-Container .content{
        width: 100%; text-align:left; 
    }
    
    .Text-Container .content p {
        font-size: 20px;
        padding: 2rem;
        margin: 2rem;
    }

    .About-Container {
        padding: 5rem 1rem;
    }

    .img-container {
        position: static;
        margin: 2rem auto;
        text-align: center;
    }

    .img-container img {
        width: 100%;
        height: auto;
        display: none;
    }

    .txt3 {
        width: 100%;
        font-size: 1.2rem;
    }

    .img6 {
        height: auto;
        text-align: center;
    }

    .img6 img {
        height: auto;
        width: 100%;
        margin-top: 1rem;
    }
}

@media (min-width: 768px) and (max-width: 991px) {
    .About-Container {
        padding: 7rem 2rem;
    }

    .Text-Container .content{
        width: 100%; text-align:left; 
    }

    .txt3 {
        width: 100%;
    }

    
    .img6 img {
        width: 100%;
        height: auto;
    }

    .img-container img {
        width: 100%;
        height: auto;
        display: none;
    }
}

@media (max-width:1024px) {
    .About-Container .img-container {
        position: absolute;
        right: 0.5rem;
        margin-top: -20px;
    }

}
@media (min-width: 992px) {
    .About-Container {
        padding: 10rem;
    }

    .txt3 {
        width: 35rem;
    }

    .img-container {
        right: 13rem;
        margin-top: -80px;
    }

    .img-container img {
        width: 400px;
        height: 400px;
    }

    .img6 img {
        height: 38rem;
        width: 29rem;
        margin-top: 90px;
    }

    
}

    </style>
<body>


<?php
include("navbar.php");
?>
  
    <div class="container-fluid About-Main-Container">
        <div class="heading">
            <h1 class="text-white">ABOUT US</h1>
        </div>
    </div><br><br>


    <div class="container Text-Container">
        <div class="content mx-auto w-100" >
            <p>
              Welcome to Dream Events, where we turn your special monments into unforgattable experience. Our expert team specializes in  creating. <br><br>
              Exceptional events tailored to your vision. From wedding and anniversaries to birthday parites and corporate gatherings, we manages  every detail to perfection. With a passion for creativity and a commitment to excellence, Dream Events ensures that your celebrations  are not just events, but cherished memories. 
              Let us bring your dream event to life !
            </p>
        </div>
    </div>

    <div class="container-fluid">
        <div class="About-Container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="spcl">
                        <h2 class="shading">What's Special About Us</h2><br>
                        <h3 class="txt3" >
                          At Dream Event we belive that <br> every event should be a seamless <br> and unforgattable experience. 
                          Here what make us Stand out:
                        </h3><br>
                        <div class="features">
                            <h4><samp class="samp">1. Comprehensive Event Management:</samp> We handle every detail of your event, from venue selection to decoration, color themes, invitation cards, and more. You can relax and enjoy your special day without worrying about a thing.</h4><br>
                            <h4><samp class="samp">2. Personalized Services:</samp> Whether it's a wedding, birthday, anniversary, picnic, or festival, we tailor our services to meet your specific needs and preferences. We respect and celebrate all religions and cultures, ensuring your event reflects your traditions and values.</h4><br>
                            <h4><samp class="samp">3. Expert Team:</samp> Our team of experienced professionals is dedicated to making your vision a reality. With meticulous planning and flawless execution, we bring your dream to life.</h4><br>
                            <h4><samp class="samp">4. A-Z Booking Options:</samp> From catering and lighting to stage setup and flowers, we offer comprehensive booking options for all aspects of your event. You get a one-stop solution for all your event needs.</h4><br>
                            <h4><samp class="samp">5. User Reviews:</samp> Our review form allows you to read and share experiences with other clients, giving you confidence in our ability to deliver exceptional events.</h4><br>
                            <h4><samp class="samp">6. Stress-Free Experience:</samp> We take care of everything, so you only need to attend your event and enjoy every moment. Our goal is to create stress-free, memorable events that you and your guests will cherish.</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="../assets/img/ab4.png" alt="Event Image" class="img-fluid w-100 h-50">
                </div>
            </div>
        </div>
    </div>

    <br><br><br><br><br>
    <div class="container About-Us-section">
        <div class="row">
            <div class="col-lg-8">
                <div class="queries">
                    <div class="text4">
                        <h2 class="shading2">For Further Queries</h2><br>
                        <h4>We are here to ensure that your event is perfect in every way. If you have any questions, need additional information, or wish to add details to your booking, please don't hesitate to reach out to us.</h4><br>
                        <h2 class="shading2">Contact Us:</h2><br>
                        <h4 class="About-text">
                            <li><samp style="color:  rgb(120, 25, 151);">Email:</samp> Any inquiries, feel free to email us at info@dreamevents.com. We aim to respond to all emails within 24 hours.</li><br>
                            <li><samp style="color:  rgb(120, 25, 151);">Phone:</samp> Call us at +923467543467 to speak directly with our customer service team. Our lines are open from 9 am to 5 pm.</li><br>
                            <li><samp style="color:  rgb(120, 25, 151);">Office Visit:</samp> Visit us at our office for a face-to-face consultation. We are located at North Nazimabad, Karachi. Our office hours are 9 am to 5 pm.</li><br><br>
                            We look forward to assisting you and making your event a memorable success!
                        </h4>
                        <br><br><br><br>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 img6">
                <img src="../assets/img/ab2.jpg" alt="Contact Image" class="img-fluid">
            </div>
        </div>
    </div>
  

    
<?php
include("footer.php");
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
