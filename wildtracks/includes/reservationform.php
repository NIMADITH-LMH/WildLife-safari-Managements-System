<div class="reservation-form-container" id="reservation-form-container">
  <button onclick="popupreservationform()" class="close-btn">
  <img class="close-image" src="img/close-icon.jpg" alt="close-icon">
</button>
  <h1 class="booking_heading">Tour Booking</h1>
  <p>Experience something new every moment</p>
  <form class="reservation-form" action="includes/booking.php" method="POST">
    <div class="tourtype-section">
      <label class="label" for="tourtype">Tour Type:</label>  
      <?php echo $row['TourType']."<br>"; $_SESSION['TourType'] = $row['TourType']; ?>
    </div>
    
    <label class="label" for="checkin">Check-In for a Tour:</label>
    <input type="date" name="checkin" id="check_indate" class="input" onchange=updatedatefieldsinform() min="<?php echo date("Y-m-d"); ?>" required />
    <label class="label" for="checkout">Check-Out From a Tour:</label>
    <input type="date" name="checkout" id="check_outdate" class="input" disabled required />
    <label class="label" for="numOf_guests">Number of guests:</label>
    <input type="number" name="numOf_guests" id="num_guests" class="input" min="1" max="30" required >
    <label class="label" for="specialrequests">Special Requests:</label>
    <textarea class="input text-area" name="specialrequests" id="specialrequests" cols="30" rows="10"></textarea>
    <input class="submit-btn" type="submit" value="Book Now" />
  </form>
</div>
<script src="js/bookingform.js"></script>
