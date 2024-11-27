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
    <link rel="stylesheet" href="styles/touradditionform.css" />
  </head>
  <body>
    <?php include 'includes/header.php'; ?>
    <div class="tour_addition-form-container" id="tour_addition-form-container">
  <button onclick="popupreservationform()" class="close-btn">
  <img class="close-image" src="img/close-icon.jpg" alt="close-icon">
</button>
  <h1 class="main_heading">Tour Addition</h1>
  <p>Enhance Your Wild Life Safari Experience</p>
  <form class="tour_addition-form" action="" method="POST">
    <label class="label" for="TourType">Tour Type Name</label>
    <input
      type="text"
      name="TourType"
      id="TourType"
      class="input"
      required
    />
    <label class="label" for="price">Price ($)</label>
    <input
      type="number"
      name="price"
      id="price"
      class="input"
      required
    />
    <label class="label" for="size">Vehicle Type</label>
    <input
      type="text"
      name="size"
      id="size"
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
    <label class="label" for="bedtype">Includs</label>
    <input
      type="text"
      name="bedtype"
      id="bedtype"
      class="input"
      required
    />
    <label class="label" for="Includs">More About Tour</label>
    <input
      type="text"
      name="Includs"
      id="Includs"
      class="input"
      required
    />
    <label class="label" for="quantity">Quantity</label>
    <input
      type="number"
      name="quantity"
      id="quantity"
      class="input"
      required
    />
    <label class="label" for="Description">Description</label>
    <textarea class="input text-area" name="Description" id="Description" cols="30" rows="10"></textarea>
    <input class="input" type="file" accept="image/*" name="image" style="border: none;"/>
    <input class="submit-btn" type="submit" value="Add Tour">
  </form>
</div>
<script src="js/addtourform.js"></script>
  </body>
</html>
