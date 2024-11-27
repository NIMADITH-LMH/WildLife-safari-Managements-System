<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- elements that are used to import external resources, specifically fonts, into an HTML document (google fonts) -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- Google Fonts Stylesheet Links -->
    <link
      href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- Google Fonts Stylesheet Links -->
    <link
      href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <title>TheThe Wild Tracks.lk</title>
    <link rel="icon" type="image/x-icon" href="img/wildtrackslklogo.png" />
    <link rel="stylesheet" href="styles/facilities.css" />
    <link rel="stylesheet" href="styles/header.css" />
    <link rel="stylesheet" href="styles/footer.css" />
</head>
<body>
<?php include 'includes/header.php' ?>
    <div class="center">
        <h1>TheThe Wild Tracks Safari...</h1>
        <h2>---The Best Safari Experience---</h2>
    </div>
    <!-- mini slide show -->
    <div class="slideshow-container">
        <div class="slide">
          <img src="img/2001.jpg" alt="Image 1">
        </div>
        <div class="slide">
          <img src="img/2002.jpg" alt="Image 2">
        </div>
        <div class="slide">
          <img src="img/2003.jpg" alt="Image 3">
        </div>
        <div class="slide">
          <img src="img/2004.jpg" alt="Image 4">
        </div>
        <div class="slide">
          <img src="img/2005.jpg" alt="Image 5">
        </div>
        <div class="slide">
          <img src="img/2006.jpg" alt="Image 5">
         </div>
         <div class="slide">
          <img src="img/2007.jpg" alt="Image 5">
        </div>
       
       <!-- facilities  -->
      </div>
    <div class="menu">
        <h1 class="title">....Discover Our Facilities....</h1>
        <ul class="colour">
          <li class = "c2">Water Park.....</li>
          <li>Petting Zoos or Animal Encounters.....</li>
          <li class = "c2">Photography and Viewing Platforms.....</li>
          <li>Environmental Conservation Initiatives.....</li>
          <li class = "c2">Guided Tours.....</li>
          <li>Large Area Car Park.....</li>
          <li class = "c2">Education and Research Facilities.....</li>
        </ul>  
        <ul class="colour1">
          <li>Safety Measures.....</li>
          <li class = "c2">Large Area Buffet.....</li>
          <li>Comfortable Vechical.....</li>
          <li class = "c2">Safari Rides.....</li>
          <li>Restaurants and Cafes.....</li> 
          <li class = "c2">Souvenir Shops.....</li> 
          <li>Bird Watching Areas.....</li>   
        </ul> 
    </div>
    <div class="box-cointainer">
        <div class="box1"></div>
        <div class="box2"></div>
        <div class="box3"></div>
        <div class="box4"></div>
        <div class="box5"></div>
    </div>
    <div class="box-content">
        <div class="box6"></div>
        <div class="box8">The Wild Tracks Safari</div>  
        <div class="box10"></div>
    </div>
    <div class="box-content1">
        <div class="box11"></div>
        <div class="box12"></div>
        <div class="box13"></div>
        <div class="box14"></div>
        <div class="box15"></div>
    </div>
    <!-- java script slide show -->
    <?php include 'includes/footer.php'; ?>
      <script src="js/facilities.js"></script>
</body>
</html>