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
    <link rel="stylesheet" href="styles/profilereservations.css" />
    <link rel="stylesheet" href="styles/header.css" />
    <link rel="stylesheet" href="styles/reservationform.css" />
  </head>
  <body>
  <?php include 'includes/header.php' ?>
    <div class="profile-component">
        <div class="navigation">
            <a href="userprofile.php" class="nav-btn">Account</a>
            <a href="" class="nav-btn highlight">Reservation Management</a>
            <?php
            $username = $_SESSION['username'];
            if (AdminExists($conn, $username) != false) {
              include 'includes/managementlink.php';
            }
            ?>
            <a href="includes/logout.php" class="nav-btn logout-btn">Logout</a>
        </div>
        <div class="profile-content">
          <div class="reservation-management">
            <h2 class="main__heading">Reservation Management</h2>
            <table class="reservation__table">
                <tr>
                    <?php if (AdminExists($conn, $username) != false) echo "<th>Username</th>"; ?>
                    <th>Tour Type</th>
                    <th>Number of Guest</th>
                    <th>Check-in</th>
                    <th>Check-out</th>
                    <th>Special Requests</th>
                    <th>Status</th>
                    <th class="actions">Actions</th>
                </tr>
                <?php
                if (AdminExists($conn, $username) != false) {
                  $sql = "SELECT * FROM reservations";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                      echo "<tr>";
                      echo "<td>".$row['username']."</td>";
                      echo "<td>".$row['Tour_type']."</td>";
                      echo "<td>".$row['number_of_guests']."</td>";
                      echo "<td>".$row['checkin']."</td>";
                      echo "<td>".$row['checkout']."</td>";
                      echo "<td>".$row['special_requests']."</td>";
                      echo "<td>".$row['status']."</td>";
                      $queryString = http_build_query($row);
                      echo "<td class=action-buttons id=action-buttons><a href=includes/acceptreservation.php?rid=$row[reservation_id] class=btn>Accept</a><a href=includes/declinereservation.php?rid=$row[reservation_id] class=btn>Decline</a><a href=editreservation.php?$queryString; class=btn>Update</a><a href=includes/deletereservation.php?$queryString; class=btn>Delete</a></td>";
                      echo "</tr>";
                    }
                  }
                }
                else {
                  $sql = "SELECT * FROM reservations WHERE username='$_SESSION[username]'";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>".$row['Tour_type']."</td>";
                        echo "<td>".$row['number_of_guests']."</td>";
                        echo "<td>".$row['checkin']."</td>";
                        echo "<td>".$row['checkout']."</td>";
                        echo "<td>".$row['special_requests']."</td>";
                        echo "<td>".$row['status']."</td>";
                        $queryString = http_build_query($row);
                        echo "<td class=action-buttons id=action-buttons><a href=editreservation.php?$queryString; class=btn>Update</a><a href=includes/deletereservation.php?$queryString; class=btn>Delete</a></td>";
                        echo "</tr>";
                      }
                  }
                }
                
                ?>
            </table>
        </div>
      </div>
    </div>
    <script src="js\bookingform.js"></script>
  </body>
</html>

