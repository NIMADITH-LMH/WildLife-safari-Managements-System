<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap"    
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />               <!--all font and colors website links-->
    <link
      href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;700&display=swap"
      rel="stylesheet"
    />

   <title>Wild Tracks</title>
    <link rel="stylesheet" href="styles/contact.css">    <!--contact css link-->
    <link rel="stylesheet" href="styles/header.css" />   <!--header css link-->
    <link rel="stylesheet" href="styles/footer.css" />   <!--footer css link-->
    <script src="js/contact.js"></script>   <!--contact js link-->
</head>

<body>
    <?php include 'includes/header.php' ?>   <!--header-->
    <div class="contactUs">
        <div class="title">
           <h2 styles = "color:green">Get in Touch With Us</h2>
           </div>
           <div class="box">
               <!--Form-->
               <div class="contact form">
                   <h3>Send a Message</h3>
                   <form action="includes/insertcontactdetails.php" method="POST">
                    <div class="formBox">
                     <div class="row50">
                      <div class="inputBox">
                       <span>First Name</span>
                       <input type="text" name="First_Name"  id="First_Name" placeholder="First Name">
                   </div>
                   <div class="inputBox">
                    <span>Last Name</span>
                    <input type="text" name="Last_Name" id="Last_Name" placeholder="Last Name">
                   </div>
                 </div>
                 <div class="row50">
                    <div class="inputBox">
                     <span>Email</span>
                     <input type="text" name="Email" id="Email" placeholder="Email Address">
                 </div>
                 <div class="inputBox">
                  <span>Mobile</span>
                  <input type="text" name="Mobile" id="Mobile"  placeholder="Telephone">
                 </div>
                </div>

                <div class="row100">
                    <div class="inputBox">
                     <span>Message</span>
                     <textarea name="Message" id="Message" placeholder="Write your message here ..."></textarea>
                  </div>
                 </div>

                 <div class="row100">
                    <div class="inputBox">
                     <input type="submit" value="send" onclick=" return submitForm()">
                 </div>
                 </div>
                </div> 
               </form>
              </div>
              <!--info Box-->
               <div class="contact info">
                 <h3>Contact Info</h3>
                  <div class="infoBox">
                    <div>
                        <span><ion-icon name="location-outline"></ion-icon></span>
                        <p>Wild Tracks LK, Colombo 12345 <br>SRI LANKA</p>
                    </div>
                    <div>
                        <span><ion-icon name="mail-outline"></ion-icon></span>
                        <a href="mailto:wildtrackslk@gmail.com">wildtrackslk@email.com</a>
                    </div>
                    <div>
                        <span><ion-icon name="call-outline"></ion-icon></span>
                        <a href="tel:+94118556775">+01 23456789</a>
                    </div>
                    <ul class="sci">
                        <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>         <!--Social media-->
                        <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>    
                        <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                        
                  </div>
            </div>
            <!--Map-->
            <div class="contact map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3960.
                6558961358205!2d79.84302699999999!3d6.9316682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13
                .1!2m1!1scolombo%205!5e0!3m2!1sen!2slk!4v1685610894366!5m2!1sen!2slk" style="border:0;" allowfullscreen="" 
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
            </div>
        </div>
     </div>
     
     <?php include 'includes/footer.php'; ?>    <!--footer-->   
  
</body>
</html>