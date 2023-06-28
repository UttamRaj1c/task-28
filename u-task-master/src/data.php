<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<?php
include_once 'config.php';
$stmt = "SELECT * from `user`";
$result = mysqli_query($conn, $stmt);
echo "<table class='table table-bordered table-bordered-primary text-center'><thead><tr class='bg-info'><th>Id</th><th>Name</th><th>Email</th><th>Actions</th></tr><tbody>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>$row[id]</td><td>$row[name]</td><td>$row[email]</td><td><a href='edit.php?id=$row[id]' class='btn btn-info mx-1'>Edit</a><a href='./delete.php?id=$row[id]' class='btn btn-danger'>Delete</a></td></tr>";
}
echo "</tbody></table>";
