<?php
include 'config.php';
// getting data
if (isset($_POST)) {
    $email = $_POST['login_email'];
    $pswd = $_POST['login_pswd'];
}
// taking data from database
$stmt = "SELECT * from `user` where `email`='$email' and `pass`='$pswd'";
$result = mysqli_query($conn, $stmt);
// matching result set
if (mysqli_num_rows($result) > 0) {
    echo true;
} else {
    echo false;
    die;
}
