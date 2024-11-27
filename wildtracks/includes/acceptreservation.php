<?php
require_once 'config.php';
require_once 'functions.php';
session_start();

$rid = $_GET['rid'];

$sql = "UPDATE reservations SET status='Accepted' WHERE reservation_id='$rid'";

$conn->query($sql);

header("Location: ../profilereservations.php");

?>