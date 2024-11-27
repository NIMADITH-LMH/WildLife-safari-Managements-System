<?php
require_once 'config.php';
require_once 'functions.php';

session_start();

$currentpassword = $_POST['usercrtpw'];
$newpassword = $_POST['usernwpw'];
$confirmpassword = $_POST['usercfmpw'];

if (checkPassword($conn, $_SESSION['username'], $currentpassword) === false) {
    header("location: userprofile.php?error=invalidcurrentpassword");
}
else {
    if ($newpassword === $confirmpassword) {
        $sql = "UPDATE users SET password = '$newpassword' WHERE username = '$_SESSION[username]'";
        $conn->query($sql);
        header("location: ../userprofile.php");
    }
    else {
        header("location: ../userprofile.php?error=invalidconfirmpassword");
    }
}