<header>
    <nav class="top-nav">
        <a class="link" href="index.php"
          ><img class="logo" src="img/wildtrackslklogo.png" alt="logo"
        /></a>
        <button class="btn menu-btn" onclick=popupmenu()>
          <img class="icon" src="img/menu_icon.png" alt="menu_icon" />
        </button>
        <ul class="top-nav-list">
          <li class="list-item"><a class="highlightbtn" href="index.php">Home</a></li>
          <li class="list-item"><a href="tours.php">Tours</a></li>
          <li class="list-item"><a href="facilities.php">Facilities</a></li>
          <li class="list-item"><a href="about.php">About Us</a></li>
          <li class="list-item"><a href="contact.php">Contact</a></li>
          <?php if (isset($_SESSION['username'])) {
            include 'profile.inc.php';
          }
          else {
            include 'signupandlogin.inc.php';
          }
          ?>
        </ul>
      </nav>
      <nav class="mobile-nav" id="mobile-nav">
      <ul class="mobile-nav-list">
        <?php if (isset($_SESSION['username'])) {
          echo '<li class="list-item"><a class="profile-container" href="userprofile.php"><img class="profile" src="img/ProfileUser-black.png" alt="ProfileUser">';
          echo getUsername($conn, $_SESSION['username']);
          echo '</a></li>';
        }
        else {
          echo '<li class="list-item"><a class=login-btn href="login.php">Login</a></li>';
          echo '<li class="list-item"><a class=signup-btn href="signup.php">Sign up</a></li>';
        }
        ?>
        <li class="list-item"><a class="highlight" href="index.php">Home</a></li>
        <li class="list-item"><a href="tours.php">Tours</a></li>
        <li class="list-item"><a href="about.php">About Us</a></li>
        <li class="list-item"><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
</header>
<script src="js/mobilenav.js"></script>