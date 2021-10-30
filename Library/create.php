
<?php
    
    $con = mysqli_connect("localhost", "root", "", "library")
    or die("Impossible de se connecter : " . mysqli_error($con));

    $sql = "Select id, lastname FROM author";
    $res = mysqli_query($con, $sql);
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>New Book</h2>
        <form action="welcome.php" method="post">
        Title: <input type="text" name="title"><br>
        Year: <input type="text" name="year"><br>
        <select name = "author_id">
            <?php while ($row = mysqli_fetch_array($res)){
            ?>
            <option value="<?php echo $row['id']; ?>"><?php echo $row['lastname']; ?></option>
            <?php
            }
            ?>
        </select>
        <input type="submit">
        </form>
</body>
</html>