<?php
$email = "sulthanizza@gmail.com";
$password = "123";

$user_email = $_POST['email'];
$user_password = $_POST['password'];

if ($user_email == $email && $user_password == $password) {
    header("Location: staticproduct.php");
    exit();
} else {
    header("Location: index.php?error=1");
    exit();
}
?>