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
    <title>Wild Tracks</title>
    <link rel="icon" type="image/x-icon" href="img/wildtrackslklogo.png" />
    <link rel="stylesheet" href="styles/header.css" />
    <link rel="stylesheet" href="styles/edittour.css" />
  </head>
  <body>
    <?php include 'includes/header.php' ?>
    <?php $row = $_GET; $_SESSION['TourType'] = $row['TourType']; ?>
    <div class="tour_addition-form-container" id="tour_addition-form-container">
  <h1 class="main_heading">Edit Tour Details</h1>
  <p>Enhance Your Tour Reservation Experience</p>
  <form class="tour_addition-form" action="includes/updatetour.php" method="POST" enctype="multipart/form-data">
  <label class="label" for="tourtype">Tour Type:</label>  
      <?php echo $row['TourType']."<br>"; $_SESSION['TourType'] = $row['TourType']; ?>
  
    <label class="label" for="price">Price ($)</label>
    <input
      type="number"
      name="price"
      id="price"
      class="input"
      required
    />
    <label class="label" for="VehicleType">Vehicle Type</label>
    <input
      type="text"
      name="VehicleType"
      id="VehicleType"
      class="input"
      required
    />
    <label class="label" for="capacity">Capacity</label>
    <input
      type="text"
      name="capacity"
      id="capacity"
      class="input"
      required
    />
    <label class="label" for="Fac">Includs</label>
    <input
      type="text"
      name="fac"
      id="fac"
      class="input"
      required
    />
    <label class="label" for="more">More About Tours</label>
    <input
      type="text"
      name="more"
      id="more"
      class="input"
      required
    />
   
    <label class="label" for="description">Description</label>
    <textarea class="input text-area" name="des" id="des" cols="30" rows="50"></textarea>

    <label class="label" for="image">Upload an image</label>
    <input class="input" type="file" accept="image/*" name="image" style="border: none;" required/>
    <input class="submit-btn" type="submit" name="Sub" value="Update">
  </form>
</div>
  </body>
</html>
