<?php
require_once 'config.php';
require_once 'functions.php';

$row = $_GET;
$tourid = $row['TourId'];

$sql = "DELETE FROM tours WHERE TourId = '$tourid'";

$conn->query($sql);
header("Location: ../roommanagement.php")

?>