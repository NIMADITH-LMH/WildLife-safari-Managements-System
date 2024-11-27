<?php
function UserExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE username='$username' OR email='$email';";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    }
    else {
        return false;
    }
}

function AdminExists($conn, $username) {
    $sql = "SELECT * FROM admins WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    }
    else {
        return false;
    }
}

function TourTypeExists($conn, $Tour_type) {
    $sql = "SELECT * FROM reservations WHERE Tour_type='$Tour_type'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    }
    else {
        return false;
    }
}

function getUsername($conn, $username) {
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);

    return $row['username']; 
}

function getFirstName($conn, $username) {
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);

    return $row['first_name']; 
}

function getLastName($conn, $username) {
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);

    return $row['last_name']; 
}

function getEmail($conn, $username) {
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);

    return $row['email']; 
}

function getPhoneNumber($conn, $username) {
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);

    return $row['phone_number']; 
}

function checkPassword($conn, $username, $password) {
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);

    if ($row['password'] === $password) {
        return true;
    }
    else {
        return false;
    }
}

function validatePassword($password, $passwordrepeat) {
    if ($password === $passwordrepeat) return true;
    else return false;
}