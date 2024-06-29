<?php
include('assets/inc/config.php');

$fname = isset($_POST['fname']) ? trim($_POST['fname']) : '';
$lname = isset($_POST['lname']) ? trim($_POST['lname']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$age = isset($_POST['age']) ? trim($_POST['age']) : '';
$mobile = isset($_POST['mobile']) ? trim($_POST['mobile']) : '';
$pass = isset($_POST['pass']) ? trim($_POST['pass']) : '';
$copass = isset($_POST['copass']) ? trim($_POST['copass']) : '';

$errors = [];

if (empty($fname)) {
    $errors['fname'] = 'Please enter First name';
}

if (empty($lname)) {
    $errors['lname'] = 'Please enter Last name';
}

if (empty($email)) {
    $errors['email'] = 'Please enter Email id';
}

if (empty($age)) {
    $errors['age'] = 'Please enter age';
}

if (empty($mobile)) {
    $errors['mobile'] = 'Please enter mobile no';
}

if (empty($pass)) {
    $errors['pass'] = 'Please enter Password';
}

if (empty($copass)) {
    $errors['copass'] = 'Please re-enter password';
}

if (!empty($errors)) {
    session_start();
    $_SESSION['errors'] = $errors;
    header("Location: registration.html");
    exit();
} else {
    $sql = "INSERT INTO passenger (fname, lname, email, age, mobile, pass, copass) VALUES ('$fname', '$lname', '$email', '$age', '$mobile', '$pass', '$copass')";

    if ($mysqli->query($sql) === TRUE) {
        echo "<script>alert('Registration successful...!!!')</script>";
        echo "<script>window.location.href = 'home.html';</script>";
    } else {
        echo "<script>alert('Registration failed...!!!')</script>";
        echo "<script>window.location.href = 'registration.html';</script>";
    }
}

$mysqli->close();
?>
