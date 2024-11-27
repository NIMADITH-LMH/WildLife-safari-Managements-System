<?php
require_once 'config.php';
require_once 'functions.php';

$row = $_GET;
$reservationid = $row['reservation_id'];

$sql = "DELETE FROM reservations WHERE reservation_id = '$reservationid'";

$conn->query($sql);
header("Location: ../profilereservations.php")

?>includes\