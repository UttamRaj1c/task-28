<?php
include_once 'config.php';
if(isset($_POST)){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pswd=$_POST['pswd'];
    $age=(int)$_POST['age'];
}
$stmt="update `user` set `name`='$name' , `email`='$email' , `pass`='$pswd' , `age`='$age' where `id`='$id' ";
$result = mysqli_query($conn, $stmt);
header('location:data.php');