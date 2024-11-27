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
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="img/wildtrackslklogo.png" />
    <link rel="icon" type="image/x-icon" href="img/wildtrackslklogo.png" />
    <link rel="stylesheet" href="styles/loginpage.css" />
  </head>
  <body>
    <section class="login_component">
      <div class="left-section"></div>
      <div class="right-section">
        <a href="index.php"
          ><img class="logo" src="img/loginlogo.png" alt="Wild Tracks logo"
        /></a>
        <h1 class="main__heading">Welcome to WildTracks</h1>
        <form class="login-form" action="includes/login.inc.php" method="post">
          <label class="label" id="usernameLabel" for="userid"
            >Username or Email</label
          >
          <input
            type="text"
            name="userid"
            id="userid"
            class="input"
            onfocus="changeLabelColor1()"
            onblur="changeLabelColor2()"
          />
          <label class="label" id="passwordLabel" for="userpw">Password</label>
          <input
            type="password"
            name="userpw"
            id="userpw"
            class="input"
            onfocus="changeLabelColor3()"
            onblur="changeLabelColor4()"
          />
          <?php
            if (isset($_GET['error'])) {
              if ($_GET['error'] == "invalidentry") {
                echo "<p class=error-text>Invalid Username or Password!</p>";
              }
            }
          ?>
          <a class="recover-link" href="#">Forgot password?</a>
          <input
            class="submit-btn"
            name="submit"
            type="submit"
            value="Sign in"
          />
        </form>
        <span class="signup-text"
          >Don't have an account?
          <a class="signup-link" href="signup.php">Create Account</a></span
        >
      </div>
    </section>
    <script src="js/loginpage.js"></script>
  </body>
</html>
