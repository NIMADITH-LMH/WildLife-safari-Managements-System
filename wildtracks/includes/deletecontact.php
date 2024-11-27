<?php
require_once 'config.php';
require_once 'functions.php';

$requestId = $_GET['requestId'];

$sql = "DELETE FROM contact WHERE requestId='$requestId'";

$conn->query($sql);

header("Location: ../userinquries.php");

?>