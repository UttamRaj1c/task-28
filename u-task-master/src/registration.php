<?php
include 'config.php';
if(isset($_POST)){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pswd=$_POST['pswd'];
    $age=(int)$_POST['age'];
}
// adding the data in database
$stmt="INSERT into `user`(`id`,`name`,`email`,`pass` ,`age`) values (null,'$name','$email','$pswd','$age')";
$result=mysqli_query($conn,$stmt);
if( $result){
    echo true;
}
else{
   echo false;
}
