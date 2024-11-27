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
    <link rel="stylesheet" href="styles/editreservationform.css" />
  </head>
  <body>
    <?php include 'includes/header.php' ?>
    <?php $row = $_GET; $_SESSION['reservation_id'] = $row['reservation_id']; ?>
    <div class="reservation-form-container" id="reservation-form-container">
    <h1 class="booking_heading">Tour Booking</h1>
    <p>Experience something new every moment</p>
    <form class="reservation-form" action="includes/updatebooking.php" method="POST">
        <div class="tourtype-section">
        <label class="label" for="tourtype">Tour Type:</label>
        <select class="input" name="tourtype">
            <?php
            $sql = "SELECT * FROM tours";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($tour = $result->fetch_assoc()) {
                    echo "<option ";
                    if ($row['Tour_type'] === $tour['TourType']) echo "selected ";
                    echo "value=".str_replace(' ', '_', $tour['TourType']).">".$tour['TourType']."</option>";
                }
            }
            ?>
        </select>
        </div>
        <label class="label" for="guestno">Number of Guests:</label>
        <input
        type="number"
        name="guestno"
        id="guestno"
        class="input"
        value="<?php echo $row['number_of_guests']; ?>"
        min="1"
        required
        />
        <label class="label" for="checkin">Check-In for a Tour:</label>
        <input type="date" name="checkin" id="check_in-date" class="input" onchange=updatedatefields() min="<?php echo date("Y-m-d"); ?>" value="<?php echo $row['checkin']; ?>" required />
        <label class="label" for="checkout">Check-Out from a Tour:</label>
        <input type="date" name="checkout" id="check_out-date" class="input" value="<?php echo $row['checkout']; ?>" required />
        <label class="label" for="specialrequests">Special Requests:</label>
        <textarea class="input text-area" name="specialrequests" id="specialrequests" cols="30" rows="10" ><?php echo rtrim($row['special_requests'],";"); ?></textarea>
        <input class="submit-btn" type="submit" value="Update" />
    </form>
</div>
<script src=js/tourdetails.js></script>
  </body>
</html>
