<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/small.css">
    <!-- You can include FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <a href="#"><img src="../assets/img/wlogo.png" alt="Logo"></a>
        </div>
        <ul class="nav-links">
            <li><a href="index.html">Home</a></li>
            <li><a href="services.html">Services</a></li>
            <li  class="booking"><a href="Boking.html">Booking</a></li>
            <li><a href="review.html">Review</a></li>
            <li><a href="AboutUs.html">About</a></li>
            <li><a href="Packages.html">Packages</a></li>
        </ul>
        <div class="nav-icons">
            <a href="signin.html"><i class="fas fa-user"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
        <div class="hamburger">
            <i class="fas fa-bars"></i>
        </div>
    </nav>





    <footer class="footer">
        <div class="footer-container">
            <!-- Left Side: Logo and Contact Information -->
            <div class="footer-section contact-info">
                <div class="footer-logo">
                    <img src="../assets/img/wlogo.png" alt="Logo">
                </div>
                <div class="contact-details">
                    <p class="stfont"><i class="fas fa-envelope"></i> email@example.com</p>
                    <p class="stfont"><i class="fas fa-phone"></i> +92 300 1234567</p>
                </div>
            </div>
    
            <!-- Middle: Navigation Links -->
            <div class="footer-section links">
                <h4 class="fhead">Useful Links</h4>
                <ul>
                    <li><a class="stfont" href="#">Home</a></li>
                    <li><a class="stfont" href="#">Services</a></li>
                    <li><a class="stfont" href="#">Booking</a></li>
                    <li><a class="stfont" href="#">Review</a></li>
                    <li><a class="stfont" href="#">About</a></li>
                    <li><a class="stfont" href="#">Packages</a></li>
                </ul>
            </div>
    
            <!-- Right Side: Newsletter Signup -->
            <div class="footer-section newsletter">
                <h4 class="fhead">Subscribe to Our Newsletter</h4>
                <form>
                    <span><input type="email" placeholder="Enter your email" required>
                    <button type="submit">Subscribe</button>
                </span>
                </form>
                <h4 class="fhead">Get in Touch</h4>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </footer>
    

    <script src="../assets/js/script.js"></script>
</body>
</html>
