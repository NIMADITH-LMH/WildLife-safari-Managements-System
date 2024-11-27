<?php
require_once 'config.php';
require_once 'functions.php';

session_start();

if(isset($_POST['Sub'])){
    $fileName = $_FILES['image']['name'];
    $fileTmpName = $_FILES['image']['tmp_name']; // Temporary location

    $filDest = '../img/'.$fileName;

    move_uploaded_file($fileTmpName, $filDest);
    

}

$oldtourtype = $_SESSION['TourType'];

$TourType = $_SESSION['Tour_type'];
$price = $_POST['price'];
$VehicleType = $_POST['VehicleType'];
$capacity = $_POST['capacity'];
$Fac = $_POST['fac'];
$More = $_POST['more'];
$description = $_POST['des'];
#$quantity = $_POST['quantity'];







if (TourTypeExists($conn, $TourType) === false or $oldtourtype === $TourType) {
    $sql = "UPDATE tours SET price='$price',
    capacity='$capacity',Includs='$Fac',More_About_Tour='$More',VehicleType='$VehicleType', description='$description'
    ,TourImage='$fileName' WHERE TourType='$oldtourtype'";

    $conn->query($sql);
    header("Location: ../roommanagement.php");
}
else {
    header("Location: {$_SERVER['HTTP_REFERER']}");
}



?>