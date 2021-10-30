<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','library');
 
// get the post records
$id = $_GET['id'];



$sql = "DELETE FROM book where id = $id";
$result =mysqli_query($con,$sql);
if ($result)
    echo "Updated";

else
    echo "error";
?> 