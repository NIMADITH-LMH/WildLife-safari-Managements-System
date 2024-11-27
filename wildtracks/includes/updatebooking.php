<?php
require_once 'config.php';
require_once 'functions.php';

session_start();

$reservationid = $_SESSION['reservation_id'];
$tourtype = $_POST['tourtype'];
$tourtype =  str_replace('_', ' ', $tourtype);
$guestno = $_POST['guestno'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$specialrequests = $_POST['specialrequests'];

$sql = "UPDATE reservations SET Tour_type='$tourtype', number_of_guests='$guestno',
        checkin='$checkin', checkout='$checkout', special_requests='$specialrequests',
        status='Pending' WHERE reservation_id='$reservationid'";

    $conn->query($sql);
    header("Location: ../profilereservations.php");

?>