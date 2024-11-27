<?php
require_once 'config.php';
require_once 'functions.php';

$reviewId = $_GET['reviewid'];

$sql = "DELETE FROM reviews WHERE reviewId = '$reviewId'";

$conn->query($sql);

header("Location: {$_SERVER['HTTP_REFERER']}");

?>