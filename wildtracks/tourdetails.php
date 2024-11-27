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
    <link rel="stylesheet" href="styles/tourdetails.css" />
    <link rel="stylesheet" href="styles/header.css" />
    <link rel="stylesheet" href="styles/footer.css" />
    <link rel="stylesheet" href="styles/reservationform.css" />
  </head>
  <body>
    <?php 
    $TourId = $_GET['TourId'];
    $sql = "SELECT * FROM tours WHERE TourId='$TourId'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    ?>
    <?php include 'includes/header.php'; ?>
    <?php include 'includes/reservationform.php'; ?>
    <div class="container">
      <div class="tour_details-component">
      <img class="tour-image" src="<?php echo "img/".rtrim($row['TourImage'],";"); ?>" alt="tour-1" />
        <div class="section-1">
          <h1 class="tour_type-heading"><?php echo $row['TourType']; ?></h1>
          <button onclick="popupreservationform()" class="book-btn">BOOK NOW</button>
        </div>
        <span class="price"><?php echo $row['price']; ?>$</span>
        <table class="tour-facilities-table">
          <tr>
            <th>Vehicle Type:</th>
            <td><?php echo $row['VehicleType']; ?> </td>
          </tr>
          <tr>
            <th>Capacity:</th>
            <td><?php echo $row['capacity']; ?></td>
          </tr>
          <tr>
            <th>More About Tour:</th>
            <td><?php echo $row['More_About_Tour']; ?></td>
          </tr>
          <tr>
            <th>Facilities:</th>
            <td><?php echo $row['Includs']; ?></td>
          </tr>
        </table>
        <p class="description">
        <?php echo $row['description']; ?>
        </p>
      </div>
      <div class="availability_checking-component">
        <form action="">
          <label class="label" for="check-in">Check-In For a Tour:</label>
          <input class="input" id="check_in-date" type="date" onchange=updatedatefields() min="<?php echo date("Y-m-d"); ?>" required/>
          <label class="label" for="check-out">Check-Out From a Tour:</label>
          <input class="input" id="check_out-date" type="date" disabled required/>
          <input class="check-btn" type="submit" value="Check Availability" />
        </form>
      </div>
    </div>
    <div class="containerv2">
      <h2 class="reviews__heading">Reviews & Comments</h2>
      <?php
      $_SESSION['TourId'] = $row['TourId'];
      $sql = "SELECT * FROM reviews WHERE TourId='$row[TourId]'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo "<div class=reviews>";
          echo "<div class=profile-pic>";
          echo "<img class=profile-icon src=img/ProfileUser-black.png alt=ProfileUser>";
          echo "</div>";
          echo "<div class=review-text>";
          echo "<span>".$row['date']."</span>";
          if (isset($_SESSION['username'])) {
            if ($_SESSION['username'] === $row['username'] or AdminExists($conn, $_SESSION['username']) != false) {
              echo "<a class=delete_review-btn href=includes/deletereview.php?reviewid=$row[reviewId]>Delete</a>";
            }
          }
          echo "<h3 class=profile-name>".$row['username']."</h3>";
          echo "<p>".$row['review']."</p>";
          echo "</div>";
          echo "</div>";
        }
      }
      if (isset($_SESSION['username'])) {
        include 'includes/addreviewscomponent.php';
      }
      ?>
    </div>
    <?php include 'includes/footer.php'; ?>
    <script src="js/tourdetails.js"></script>
  </body>
</html>

