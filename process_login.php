<?php
include('assets/inc/config.php');

session_start();

$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$pass = isset($_POST['pass']) ? trim($_POST['pass']) : '';

$errors = [];

if (empty($email)) {
    $errors['email'] = 'Please enter Email id';
}

if (empty($pass)) {
    $errors['pass'] = 'Please enter Password';
}

if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    header("Location: authent_login.html");
    exit();
} else {
    $stmt = $mysqli->prepare("SELECT * FROM passenger WHERE email = '$email' AND pass = '$pass' ");
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>alert('Login successful...!!!')</script>";
        echo "<script>window.location.href = 'home1.php';</script>"; // Redirect to home page
    } else {
        echo "<script>alert('Invalid email or password...!!!')</script>";
        echo "<script>window.location.href = 'authent_login.html';</script>";
    }

    $stmt->close();
}

$mysqli->close();
?>
