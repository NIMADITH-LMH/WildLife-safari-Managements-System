<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head> <!-- page css link and import external resources, specifically fonts, into an HTML document(google font)-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- specified font families and weights in our webpage -->
    <link
      href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- specified font families and weights in our webpage -->
    <link
      href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <title>Wild Tracks</title>
    <!--css file links -->
    <link rel="icon" type="image/x-icon" href="img/wildtrackslklogo.png" />
   <link rel="stylesheet" href="styles/About.css">
   <link rel="stylesheet" href="styles/header.css" />
   <link rel="stylesheet" href="styles/footer.css" />
    <script src="https://kit.fontawesome.com/7c40190028.js" crossorigin="anonymous"></script>
</head>

<body>
<?php include 'includes/header.php' ?>
<div class="maine-about-image">
<h1>ABOUT US</h1>
</div>

<div class="about-main">
    <div class="about-details">
       <h1>A Luxuries Safari with Nature</h1>
       <p>The story of the Serengeti Safari Experience, which began its journey in 1984, is a remarkable narrative of constant enhancement of services and the highest standards of quality in wildlife tourism.<br>

<br>Having accumulated over three decades of expertise in the field of safari adventures, our vision and beliefs are deeply rooted in providing a truly personalized service to all our guests, intertwined with an unforgettable wildlife safari experience.<br>

<br>The brand has attracted numerous distinguished personalities from around the globe, including heads of state, prime ministers of prominent nations, royalty, renowned sports and entertainment personalities, and many more. Each one has been captivated by the breathtaking beauty of the wild and the thrilling encounters with nature in its purest form. Our commitment to conservation and passion for wildlife continues to inspire and offer an unparalleled safari experience.
         </p>
        
    </div>
    
    <div class="container1">
       <div class="item-img1"><img src="img/about1.jpg" alt="describing about"></div>
       <div class="item-img2"><img src="img/about2.jpg" alt="describing about"></div>
    </div>
</div>
<div class="divider"></div>



<div class="title">
    <h2>Facilities</h2>
    <div class="underline"></div>
</div>
<section class="features">
    <div class="icon1">
        <img src="img/bar-counter.png" alt="">
        <h2>Bar</h2>
    </div>
    <div class="icon1">
        <img src="img/bathtub.png" alt="">
        <h2>Hot Water</h2>
    </div>
    <div class="icon1">
        <img src="img/parking.png" alt="">
        <h2>Car Park</h2>
    </div>
    <div class="icon1">
        <img src="img/shield.png" alt="">
        <h2>Safety</h2>
    </div>
    

    <div class="offer-gallery-title title">
        <h2><Br>We Offer to Our Guest</h2>
        <div class="underline"></div>

    </div>
    <div class="offer">
        <div class="offer-img">
            <div class="offer-img-div">
                <img src="img/havi2.jpg" alt="">
               
            </div>
            <div class="offer-overlay">
                <div class="offer-overlay-txt">
                    
                </div>
            </div>
        </div>
        <div class="offer-img">
            <div class="offer-img-div">
                <img src="img/havi1.jpg">
               
            </div>
            <div class="offer-overlay">
                <div class="offer-overlay-txt">
                    
                    
                </div>
            </div>
        </div>
        <div class="offer-img">
            <div class="offer-img-div">
                <img src="img/havi3.jpg" alt="">
                
            </div>
            <div class="offer-overlay">
                <div class="offer-overlay-txt">
                    
                </div>
            </div>
        </div>
    </div>
</section>
    <?php include 'includes/footer.php'; ?>
</body>
</html>