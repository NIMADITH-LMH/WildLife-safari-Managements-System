<?php
require_once 'config.php';
require_once 'functions.php';

if(isset($_POST['Sub'])){
    $fileName = $_FILES['image']['name'];
    $fileTmpName = $_FILES['image']['tmp_name']; // Temporary location

    $filDest = '../img/'.$fileName;

    move_uploaded_file($fileTmpName, $filDest);
    

}

$TourType = $_POST['Tour_type'];
$price = $_POST['price'];
$VehicleType = $_POST['VehicleType'];
$capacity = $_POST['capacity'];
$Fac = $_POST['fac'];
$More = $_POST['more'];
$description = $_POST['des'];
#$quantity = $_POST['quantity'];




if (TourTypeExists($conn, $TourType) === false) {
    $sql = "INSERT INTO tours (TourType, price,VehicleType,capacity,Includs,More_About_Tour,description,TourImage)
            VALUES ('$TourType','$price','$VehicleType','$capacity', '$Fac', '$More','$description','$fileName');";

    $conn->query($sql);
    header("Location: ../roommanagement.php");
}
else {
    header("Location: ../roommanagement.php?error=roomtypealreadyexists");
}


?>