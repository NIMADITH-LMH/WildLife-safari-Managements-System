<?php
require_once 'config.php';
require_once 'functions.php';

session_start();

$username = $_SESSION['username'];
$TourId = $_SESSION['TourId'];
$review = $_POST['review'];
$date = date('dS M Y');

if ($review) {
    $sql = "INSERT INTO reviews (TourId, username, review, date) VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("ssss", $TourId, $username, $review, $date);

    $stmt->execute();
}

header("Location: {$_SERVER['HTTP_REFERER']}");

