<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <!-- Linking to Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <!-- Setting page title and favicon -->
    <title>WildTracks</title>
    <link rel="icon" type="image/x-icon" href="img/wildtrackslklogo.png" />
    <!-- Linking to CSS styles -->
    <link rel="stylesheet" href="styles/styles.css" />
  </head>
  <body>
    <div class="background-image"></div>
    <header>
      <nav class="top-nav">
      <a class="link" href="index.php">
          <img class="logo" src="img/homelogo.png" alt="logo" />

        /></a>
        <button class="btn menu-btn" id="menu-btn" onclick=popupmenu()>
          <img class="icon" src="img/menu_icon.png" alt="menu_icon" />
        </button>
        <ul class="top-nav-list">
          <li class="list-item"><a class="highlight" href="index.php">Home</a></li>
          <li class="list-item"><a href="tours.php">Tours</a></li>
          <li class="list-item"><a href="facilities.php">Facilities</a></li>
          <li class="list-item"><a href="about.php">About Us</a></li>
          <li class="list-item"><a href="contact.php">Contact</a></li>
          <!-- Including different content based on session status -->
          <?php if (isset($_SESSION['username'])) {
            include 'includes/profile.inc.php';
          }
          else {
            include 'includes/signupandlogin.inc.php';
          }
          ?>
        </ul>
      </nav>
       <!-- Mobile navigation menu -->
      <nav class="mobile-nav" id="mobile-nav">
        <button onclick=popupmenu() class="btn"><img class="icon" src="img/close-icon.jpg" alt="close-icon"></button>
      <ul class="mobile-nav-list">
        <!-- Displaying different options based on session status -->
        <?php if (isset($_SESSION['username'])) {
          echo '<li class="list-item"><a class="profile-container" href="userprofile.php"><img class="profile" src="img/ProfileUser-black.png" alt="ProfileUser">';
          echo getUsername($conn, $_SESSION['username']);
          echo '</a></li>';
        }
        else {
          echo '<li class="list-item f-btn"><a href=login.php>Login</a></li>';
          echo '<li class="list-item f-btn"><a class=signup-btn href=signup.php>Sign up</a></li>';
        }
        ?>
        <li class="list-item"><a class="highlight" href="index.php">Home</a></li>
        <li class="list-item"><a href="tours.php">Tours</a></li>
        <li class="list-item"><a href="about.php">About Us</a></li>
        <li class="list-item"><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
    </header>
    <!-- Hero section -->
    <section class="hero-section">
       <!-- Background canvas -->
      <div class="canvas"></div>
      <div class="container">
        <div class="hero__content">
          <div class="hero__text">
            <p class="hero__body">
            IMMERSE YOURSELF IN THE THRILL OF THE WILD! EXPERIENCE THE LUXURY OF NATURE’S BOUNTY WITH AN UNFORGETTABLE WILDLIFE SAFARI ADVENTURE! 
            </p>
            <h1 class="hero__heading">FIND PEACE IN THE WILD! </h1>
            <a class="tours-link" href="tours.php">DIVE INTO US</a>
          </div>
        </div>
      </div>
    </section>
    <!-- About Us section -->
    <section class="aboutus__section">
      <div class="container">
        <div class="aboutus__content">
          <div class="aboutus__text">
            <span class="aboutus__title">ABOUT US</span>
            <h1 class="aboutus__heading">Wild Tracks LK</h1>
            <p class="aboutus__body p1">
            WELCOME TO OUR WILDLIFE SAFARI! We are a prime destination for nature enthusiasts seeking thrill, adventure, and unparalleled wildlife encounters. Our safari is nestled in the heart of the wilderness, offering easy access to the most diverse ecosystems, breathtaking landscapes, and exotic animal habitats. Experience the luxury of nature with us!
            </p>
            <p class="aboutus__body p2">
            WHEN IT COMES TO EMBARKING ON THE PERFECT WILDLIFE SAFARI, BE IT A LUXURY LODGE, TENTED CAMP, OR TREEHOUSE, WE’VE GOT YOU COVERED. EXPERIENCE THE WILD LIKE NEVER BEFORE!
            </p>
            <!-- Link to read more about the company -->
            <a class="aboutus__link" href="About.php">READ MORE</a>
          </div>
          <!-- About Us images -->
          <div class="aboutus__images">
            <div class="image__container">
              <img
                class="aboutus__image"
                src="img/home1.jpg"
                alt="aboutus__image"
              />
            </div>
            <div class="image__container">
              <img
                class="aboutus__image"
                src="img/home2.jpg"
                alt="aboutus__image"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services section -->
    <section class="services__section">
      <div class="container">
        <!-- Section title -->
        <span class="WhatWeDo__text">WHAT WE DO</span>
        <h3 class="main__services__heading">Discover Our Services</h3>
        <div class="services__grid">
          <div class="grid__item">
            <img
              class="icon-medium"
              src="img/car-parking.png"
              alt="car-parking-icon"
            />
            <h4 class="service__heading">Car Parking</h4>
            <p>
            Convenient on-site car parking available, ensuring hassle-free access and peace of mind during your stay or visit.
            </p>
          </div>
          <div class="grid__item">
            <img
              class="icon-medium"
              src="img/homecookedmeals.png"
              alt="home cooked meals-icon"
            />
            <h4 class="service__heading">Luxury Tent Accommodation</h4>
            <p>
            Indulge in luxury tent accommodation amidst stunning natural landscapes, blending comfort with adventure for an unforgettable wilderness retreat.
            </p>
          </div>
          <div class="grid__item">
            <img
              class="icon-medium"
              src="img/childrendaycare.jpg"
              alt="children day care-icon"
            />
            <h4 class="service__heading">Family Safaris</h4>
            <p>
            Embark on a family adventure in Africa's wilderness, filled with wildlife encounters, cultural experiences, and unforgettable memories for all.
            </p>
          </div>

    </section>
      <!-- Tours section -->
    <section class="tour_type__section"> 
        <span class="WhatWeDo__text">OUR TOURS</span>
        <h3 class="tour-type__heading">Featured Tours</h3>
        <div class="tours__grid">
          <div class="grid__item">
            <div class="tour-img-container">
              <img class="tour-img" src="img/premiumtour.jpg" alt="tour-1" />
            </div>
            <div class="tour__description">
              <h3 class="tour-type-heading">Premium tour</h3>
              <p class="tour-type-text">
              Exclusive guided tour showcasing Africa's wildlife and cultural treasures
               </p>
              <span class="WhatWeDo__text">$3000 / Day</span>
              <!-- Link to book the tour -->
              <a class="booknow-link" href="tours.php">BOOK NOW</a>
            </div>
          </div>
          <div class="grid__item">
            <div class="tour-img-container">
              <img class="tour-img" src="img/familytour.png" alt="tour-1" />
            </div>
            <div class="tour__description">
              <h3 class="tour-type-heading">Family tour</h3>
              <p class="tour-type-text">
              Family-friendly tour: wildlife, adventure, and cultural experiences for all ages
              </p>
              <span class="WhatWeDo__text">$5000 / day</span>
              <a class="booknow-link" href="tours.php">BOOK NOW</a>
            </div>
          </div>
          <div class="grid__item">
            <div class="tour-img-container">
              <img class="tour-img" src="img/deluxetour.png" alt="tour-1" />
            </div>
            <div class="tour__description">
              <h3 class="tour-type-heading">Deluxe tour</h3>
              <p class="tour-type-text">
              Exquisite luxury tour: lavish accommodations, VIP experiences, and personalized service
              </p>
              <span class="WhatWeDo__text">$2500 / Day</span>
              <a class="booknow-link" href="tours.php">BOOK NOW</a>
            </div>
          </div>
          <div class="grid__item">
            <div class="tour-img-container">
              <img class="tour-img" src="img/suitetour.jpg" alt="tour-1" />
            </div class="tour__description">
            <div>
              <h3 class="tour-type-heading">Suite tour</h3>
              <p class="tour-type-text">
              opulent accommodations, tailored experiences, and unparalleled luxury
              </p>
              <span class="WhatWeDo__text">$3500 / day</span>
              <a class="booknow-link" href="tours.php">BOOK NOW</a>
            </div>
          </div>
        </div>
    </section>
    <!-- Testimonials section -->
    <section class="testimonials__section">
      <div class="container">
        <!-- Section title -->
        <span class="WhatWeDo__text">TESTIMONIALS</span>
        <h3 class="testimonials__section__heading">What Customers Say?</h3>
        <!-- Grid of customer feedback -->
        <div class="feedback-grid">
          <!-- Individual feedback item -->
          <div class="feedback">
            <p class="comment">"Safari Travel Specialists handled every detail, from flights to safari bookings, making our trip seamless. Their customer service was excellent, and they offered helpful packing tips. We'd definitely book with them again."
            </p>
            <p class="customer_name">- Nethum</p>
          </div>
          <div class="feedback">
            <p class="comment"> "WildTracks provided an exceptional safari experience. Our guide was friendly and skilled at finding wildlife. The accommodations were comfortable, and the food was excellent."
            </p>
            <p class="customer_name">- Sisitha</p>
          </div>
          <div class="feedback">
            <p class="comment">"Safari Travel Specialists made our trip seamless, handling flights, accommodation, and safari bookings. Their customer service was excellent. We'd use them again for future safaris and Highly Recommended for everyone."
            </p>
            <p class="customer_name">- Prasandu</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer section -->
    <footer class="footer__section">
      <div class="footer__content">
        <div class="container">
          <div class="footer__description">
            <div class="about__block">
              <img class="logo" src="img/wildtrackslklogo.png" alt="logo" />
              <p style="color: #ffffff;">
  Explore our safari lodge's immersive experiences and authentic amenities, delve into our rustic yet luxurious tented accommodations and intimate bush camps.
</p>
            </div>
            <!-- Contact information -->
            <div class="contactus__block">
              <span class="contact__title">CONTACT US</span>
              <ul class="footer__contact-list">
                
              <li style="color: #ffffff;">(12) 3456789</li>
              <li style="color: #ffffff;">wildtrackslk@gmail.com</li>
              <li style="color: #ffffff;">Wild Tracks Lk, 123 Main Street, Cityville, State 12345, Colombo</li>

              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright and additional links -->
      <div class="copyright__content">
        <div class="container">
          <div class="copyright__option">
            <ul class="copyright__option-list">
              <li><a href="contact.php">Contact</a></li>
              <li><a href="terms.php">Terms & Conditions</a></li>
              <li><a href="privacy.php">Privacy Policy and Refund Policy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- JavaScript file for mobile navigation -->
    <script src="js/mobilenav.js"></script>
  </body>
</html>
