<?php
require_once 'config.php';
require_once 'functions.php';
session_start();

if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        $roomtype = $_SESSION['TourType'];
        //$roomsno = $_POST['roomsno'];
        $checkin = $_POST['checkin'];
        $checkout = $_POST['checkout'];
        $noguest = $_POST['numOf_guests'];
        $specialrequests = $_POST['specialrequests'];


        $sql = "INSERT INTO reservations(username,Tour_type,checkin,checkout,number_of_guests,special_requests)
        VALUES ('$username','$roomtype','$checkin','$checkout','$noguest','$specialrequests')";

        $conn->query($sql);
        header("Location: {$_SERVER['HTTP_REFERER']}");
}
else {
        header("Location: login.php");
}

?>