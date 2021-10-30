<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','library');
 
// get the post records
$title = mysqli_real_escape_string($con, $_POST['title']);
$year = $_POST['year'];
$author = mysqli_real_escape_string($con,$_POST['author_id']);

// database insert SQL code
$sql = "INSERT INTO `book` (`title`, `year`, `author_id`) VALUES ('$title', $year, $author)";
// insert in database 
$rs = mysqli_query($con, $sql);

if ($rs) {
	echo "New book inserted";
}

