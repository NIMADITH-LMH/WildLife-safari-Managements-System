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
    <title>WildTracks</title>
    <link rel="icon" type="image/x-icon" href="img/wildtrackslklogo.png" />
    <link rel="stylesheet" href="styles/userprofile.css" />
    <link rel="stylesheet" href="styles/header.css" />
  </head>
  <body>
    <?php include 'includes/header.php' ?>
    <div class="profile-component">
      <div class="navigation">
        <div class="profile-image-container">
        </div>
        <a href="#" class="nav-btn highlight">Account</a>
        <a href="profilereservations.php" class="nav-btn">Reservation Management</a>
        <?php
        $username = $_SESSION['username'];
        if (AdminExists($conn, $username) != false) {
          include 'includes/managementlink.php';
        }
        ?>
        <a href="includes/logout.php" class="nav-btn logout-btn">Logout</a>
      </div>
      <div class="profile-content">
        <div class="account-settings">
          <h2 class="settings-heading">Account Settings</h2>
          <form class="settings-form" action="includes/updatedetails.php" method="POST">
            <label class="label" id="usernameLabel" for="userid"
              >Username</label
            >
            <input
              type="text"
              name="userid"
              id="userid"
              class="input"
              onfocus="changeLabelColor1()"
              onblur="changeLabelColor2()"
              value="<?php echo getUsername($conn, $_SESSION['username']);  ?>"
              required
            />
            <div class="name-fields">
              <div class="name">
                <label class="label" id="firstnameLabel" for="userfname"
                  >First Name</label
                >
                <input
                  type="text"
                  name="userfname"
                  id="userfname"
                  class="input"
                  onfocus="changeLabelColor1()"
                  onblur="changeLabelColor2()"
                  value="<?php echo getFirstName($conn, $_SESSION['username']); ?>"
                  required
                />
              </div>
              <div class="name">
                <label class="label" id="lastnameLabel" for="userlname"
                  >Last Name</label
                >
                <input
                  type="text"
                  name="userlname"
                  id="userlname"
                  class="input"
                  onfocus="changeLabelColor1()"
                  onblur="changeLabelColor2()"
                  value="<?php echo getLastName($conn, $_SESSION['username']);  ?>"
                  required
                />
              </div>
            </div>
            <div class="contact-fields">
              <div class="email">
                <label class="label" id="emailLabel" for="useremail"
                  >Email</label
                >
                <input
                  type="email"
                  name="useremail"
                  id="useremail"
                  class="input"
                  onfocus="changeLabelColor1()"
                  onblur="changeLabelColor2()"
                  value="<?php echo getEmail($conn, $_SESSION['username']);  ?>"
                  required
                />
              </div>
              <div class="phno">
                <label class="label" id="phnoLabel" for="userphno"
                  >Phone number</label
                >
                <input
                  type="number"
                  name="userphno"
                  id="userphno"
                  class="input"
                  onfocus="changeLabelColor1()"
                  onblur="changeLabelColor2()"
                  value="<?php echo getPhoneNumber($conn, $_SESSION['username']);  ?>"
                  required
                />
              </div>
            </div>
            <input class="update-btn" type="submit" value="Update" />
          </form>
        </div>
        <div class="delete-btn">
    <?php
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row['username'] == $_SESSION['username'] && (AdminExists($conn, $username) != true)) {
                echo '<a href="includes/deleteacc.php?userid=' . $row['userid'] . '"><button class="button1">Delete Account</button></a>';
            }
        }
    }
    ?>
</div>
        <div class="account-security">
          <h2 class="security-heading">Account Security</h2>
          <form class="security-form" action="includes/updatepassword.php" method="POST">
            <div>
              <label class="label" id="crtpwLabel" for="usercrtpw"
                >Current Password</label
              >
              <input
                type="password"
                name="usercrtpw"
                id="usercrtpw"
                class="input"
                onfocus="changeLabelColor1()"
                onblur="changeLabelColor2()"
                required
              />
              <label class="label" id="nwpwLabel" for="usernwpw"
                >New Password</label
              >
              <input
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                type="password"
                name="usernwpw"
                id="usernwpw"
                class="input"
                onfocus="changeLabelColor1()"
                onblur="changeLabelColor2()"
                required
              />
              <label class="label" id="cfmpwLabel" for="usercfmpw"
                >Confirm Password</label
              >
              <input
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                type="password"
                name="usercfmpw"
                id="usercfmpw"
                class="input"
                onfocus="changeLabelColor1()"
                onblur="changeLabelColor2()"
                required
              />
            </div>
            <input class="update-btn" type="submit" value="Update" />
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
