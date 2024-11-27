<?php
require_once 'config.php';
require_once 'functions.php';

$username = $_POST['userid'];
$password = $_POST['userpw'];

if (UserExists($conn, $username, $username) != false) {
    $row = UserExists($conn, $username, $username);
    if ($row['password'] === $password) {
        session_start();
        $_SESSION['username'] = $row['username'];
        $_SESSION['first_name'] = $row['first_name'];
        $_SESSION['last_name'] = $row['last_name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['phone_number'] = $row['phone_number'];
        header("location: ../index.php");
    }
    else {
        header("location: ../login.php?error=invalidentry");
    }
}
else {
    header("location: ../login.php?error=invalidentry");
}
