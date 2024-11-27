<?php
require_once 'config.php';
require_once 'functions.php';

session_start();

$oldusername = $_SESSION['username'];
$oldemail = $_SESSION['email'];

$newusername = $_POST['userid'];
$firstname = $_POST['userfname'];
$lastname = $_POST['userlname'];
$email = $_POST['useremail'];
$phonenumber = $_POST['userphno'];

if (UserExists($conn, $newusername, $newusername) === false or strtolower($newusername) === strtolower($oldusername)) {
        if (UserExists($conn, $email, $email) === false or $email === $oldemail) {
                $sql = "UPDATE users SET username = '$newusername', first_name = '$firstname',
                last_name = '$lastname', email = '$email', phone_number = '$phonenumber' 
                WHERE username = '$oldusername'";

                $conn->query($sql);

                $sql = "UPDATE reservations SET username = '$newusername' WHERE username = '$oldusername'";

                $conn->query($sql);

                $sql = "UPDATE admins SET username = '$newusername' WHERE username = '$oldusername'";

                $conn->query($sql);

                $sql = "UPDATE reviews SET username = '$newusername' WHERE username = '$oldusername'";

                $conn->query($sql);

                $_SESSION['username'] = $newusername;
                $_SESSION['first_name'] = $firstname;
                $_SESSION['last_name'] = $lastname;
                $_SESSION['email'] = $email;
                $_SESSION['phone_number'] = $phonenumber;
                header("location: ../userprofile.php");
        }
        else {
                header("location: ../userprofile.php?error=emailalreadyteken"); 
        }
}
else {
        header("location: ../userprofile.php?error=usernamealreadyteken"); 
}

?>