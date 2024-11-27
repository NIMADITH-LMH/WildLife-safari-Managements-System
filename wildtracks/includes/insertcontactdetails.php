<?php
include 'config.php';

    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $Email = $_POST['Email'];
    $Mobile = $_POST['Mobile'];
    $Message = $_POST['Message'];
    
    $sql=" INSERT INTO contact (First_Name, Last_Name, Email, Mobile, Message) 
    VALUES('$First_Name','$Last_Name','$Email','$Mobile','$Message')";
    
    $conn->query($sql);

    header("Location: ../contact.php");
?>

