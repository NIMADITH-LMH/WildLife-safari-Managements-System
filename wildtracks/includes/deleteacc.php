<?php
require_once 'config.php';
require_once 'functions.php';

$userId = $_GET['userid'];

$sql = "DELETE FROM users WHERE userid='$userId'";

$conn->query($sql);


session_start();
session_unset();
session_destroy();
header("Location: ../index.php");
exit();



?>