<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<?php
include_once 'config.php';

$stmt = "SELECT * from `user` where `id`=".$_GET['id'];
$result = mysqli_query($conn, $stmt);
$row=$result->fetch_assoc();
?>
<div class='container m-3 p-2'>
    <h2 class='text-center'>Update data</h2>
<form action="update.php" method="post">
    id:
    <input type="text" value="<?php echo $row['id']?> " class="form-control" disabled>
    <input type="hidden" value="<?php echo $row['id']?> " name='id'>
    <br>
    age:
    <input type="text" class="form-control" value="<?php echo $row['age']?> " name='age'>
    <br>
    name:
    <input type="text" class="form-control" value="<?php echo $row['name']?> " name='name'>
    <br>
    email:
    <input type="text" class="form-control" value="<?php echo $row['email']?> " name='email'>
    <br>
    password:
    <input type="text" class="form-control" value="<?php echo $row['pass']?> " name='pass'>
    <br>
    <input type="submit" value='Update' class='btn btn-primary'>
</form>
</div>