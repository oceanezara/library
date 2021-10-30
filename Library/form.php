<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
<h2>Update Book</h2>
        <form action="change.php" method="post">
        Id :  <input type="text" name="id"><br>   
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
        <div>
            <button type="submit" name="update_data">Uptade data</button>
        </div>
        </form>
</body>
</html>