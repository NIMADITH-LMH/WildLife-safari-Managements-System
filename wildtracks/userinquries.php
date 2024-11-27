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
    <link rel="stylesheet" href="styles/usermanagement.css" />
    <link rel="stylesheet" href="styles/header.css" />
  </head>
  <body>
    <?php include 'includes/header.php' ?>
    <div class="profile-component">
      <div class="navigation">
        <div class="profile-image-container"></div>
        <a href="userprofile.php" class="nav-btn">Account</a>
        <a href="profilereservations.php" class="nav-btn">Reservation Management</a>
        <a href="tourmanagement.php" class="nav-btn">Tour Management</a>
        <a href="usermanagement.php" class="nav-btn">User Management</a>
        <a href="userinquries.php" class="nav-btn highlight">Customer Inquiries</a>
        <a href="includes/logout.php" class="nav-btn logout-btn">Logout</a>
      </div>
      <div class="profile-content">
        <div class="user-management">
          <h2 class="main__heading">Customer Inquiries</h2>
          <table class="users_table">
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Message</th>
              <th class="actions">Actions</th>
              
            </tr>
            <?php
                $sql = "SELECT * FROM contact";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                      echo "<tr>";
                      echo "<td>".$row['First_Name']." ".$row['Last_Name']."</td>";
                      echo "<td>".$row['Email']."</td>";
                      echo "<td>".$row['Mobile']."</td>";
                      echo "<td>".$row['Message']."</td>";
                      echo "<td class=action-buttons id=action-buttons>";
                      //if (AdminExists($conn, $row['username']) === false) {
                      //  echo "<a href=k class=btn>Set Admin</a>";
                      //}
                     

                      if ($row['First_Name'] != $_SESSION['username']) {
                        echo "<a href=includes/deletecontact.php?requestId=$row[requestId] class=btn>Delete</a></td>";
                      }

                    
                      echo "</tr>";
                    }
                    }
                
                ?>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>