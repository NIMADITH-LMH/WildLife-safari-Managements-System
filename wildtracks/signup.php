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
    <link rel="icon" type="image/x-icon" href="img/wildtrackslklogo.png" />
    <link rel="stylesheet" href="styles/signuppage.css" />
  </head>
  <body>
    <section class="login_component">
      <div class="left-section"></div>
      <div class="right-section">
        <a href="index.php"
          ><img class="logo" src="img/loginlogo.png" alt="Willd tracks logo"
        /></a>
        <h1 class="main__heading">Welcome to WildTracks</h1>
        <form class="login-form" action="includes/signup.inc.php" method="post">
          <label class="label" id="usernameLabel" for="userid">Username</label>
          <input
            type="text"
            name="userid"
            id="userid"
            class="input"
            onfocus="changeLabelColor1()"
            onblur="changeLabelColor2()"
            required
          />
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
            required
          />
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
            required
          />
          <label class="label" id="emailLabel" for="useremail">Email</label>
          <input
            type="email"
            name="useremail"
            id="useremail"
            class="input"
            onfocus="changeLabelColor5()"
            onblur="changeLabelColor6()"
            required
          />
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
            required
          />
          <label class="label" id="passwordLabel" for="userpw">Password</label>
          <input
            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
            type="password"
            name="userpw"
            id="userpw"
            class="input"
            onfocus="changeLabelColor7()"
            onblur="changeLabelColor8()"
            required
          />
          <label class="label" id="cnfpasswordLabel" for="userpwcnf"
            >Re-Type Password</label
          >
          <input
            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
            type="password"
            name="userpwcnf"
            id="userpwcnf"
            class="input"
            onfocus="changeLabelColor9()"
            onblur="changeLabelColor10()"
            required
          />
          <?php
            if (isset($_GET['error'])) {
              if ($_GET['error'] == "usernamealreadyexists") {
                echo "<p class=error-text>Username Already Exists!</p>";
              }
              else if ($_GET['error'] == "invalidconfirmationpassword") {
                echo "<p class=error-text>Invalid Confirmation Password!</p>";
              }
            }
          ?>
          <input class="submit-btn" type="submit" value="Sign up" />
        </form>
        <span class="signup-text"
          >Already have an account?
          <a class="signup-link" href="login.php">Log in</a></span
        >
      </div>
    </section>
    <script src="js/signuppage.js"></script>
  </body>
</html>
