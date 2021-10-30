<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','library');
 
// get the post records
$id = $_GET['id'];
$title = mysqli_real_escape_string($con,$_GET['title']);
$year = $_GET['year'];
$author = mysqli_real_escape_string($con,$_GET['author_id']);

$sql = "UPDATE book set title='$title', `year`='$year', `author_id`=$author where id = $id";
$result =mysqli_query($con,$sql);
if ($result)
    echo "Updated";

else
    echo "error";
?> 