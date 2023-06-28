<?php
include_once 'config.php';
$stmt='delete from `user` where `id`='.$_GET['id'];
mysqli_query($conn, $stmt);
header('location:data.php');