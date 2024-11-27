<?php
require_once 'config.php';
require_once 'functions.php';

$username = $_POST['userid'];
$firstname = $_POST['userfname'];
$lastname = $_POST['userlname'];
$email = $_POST['useremail'];
$phonenumber = $_POST['userphno'];
$password = $_POST['userpw'];
$passwordrepeat = $_POST['userpwcnf'];

if (UserExists($conn, $username, $email) === false AND validatepassword($password, $passwordrepeat) === true) {
    $sql = "INSERT INTO users (username, first_name, last_name, email, phone_number, password) 
            VALUES ('$username', '$firstname', '$lastname', '$email', '$phonenumber', '$password');";

    $conn->query($sql);
    header("location: ../login.php");
}
else if (validatepassword($password, $passwordrepeat) === false) {
    header("location: ../signup.php?error=invalidconfirmationpassword");
}
else {
    header("location: ../signup.php?error=usernamealreadyexists");
}

?>