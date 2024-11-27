<?php
require_once 'config.php';
require_once 'functions.php';
echo '<li class="list-item"><a class="profile-container" href="userprofile.php"><img class="profile" src="img/ProfileUser.png" alt="ProfileUser">';
echo getUsername($conn, $_SESSION['username']);
echo '</a></li>';

?>