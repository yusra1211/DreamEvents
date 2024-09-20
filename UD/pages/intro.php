<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/wlogo.png" type="image/x-icon">
    <title>Dream Events</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            height: 100%;
            width: 100%;
            background-color: #382A40; 
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .video-container {
            position: relative;
            width: 80%; 
            max-width: 400px; 
            height: auto;
        }

        .video-container video {
            width: 100%;
            height: auto; 
            border-radius: 50%;
        }

    </style>
</head>
<body>

    <div class="video-container">
        <video autoplay muted>
            <source src="../assets/img/Logotype Boutique Fashion Neon Logomark logo.mp4" type="video/mp4"> 
        </video>
    </div>

    <script>
        // Redirect to index.html after 5 seconds
        setTimeout(function() {
            window.location.href = 'index.php';
        }, 5000);
    </script>
</body>
</html>
