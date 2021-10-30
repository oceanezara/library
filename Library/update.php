<?php
    
$con = mysqli_connect("localhost", "root", "", "library")
or die("Impossible de se connecter : " . mysqli_error($con));


$sql = "SELECT id, lastname FROM author";
$res = mysqli_query($con, $sql);

$sql1 = "SELECT * FROM book WHERE id = " . $_GET['id'];
$res1 = mysqli_query($con, $sql1);

$book = $res1-> fetch_assoc();
   
  
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
        
        <h1>Update Book</h1>

        <form action="change.php" method="get">
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

            <div>
                <label for="title">Title :</label>
                <input type="text" name="title" id="title" value="<?php echo $book['title']; ?>">
            </div>

            <div>
                <label for="year">Year :</label>
                <input type="number" name="year" id="year" value="<?php echo $book['year']; ?>">
            </div>

            <select name="author_id">
                <?php while ($row = mysqli_fetch_array($res)): ?>
                    <option value="<?php echo $row['id']; ?>" 
                        <?php if ($row['id'] == $book['author_id']): ?>
                            selected="selected"
                        <?php endif; ?>
                    >
                        <?php echo $row['lastname']; ?>
                    </option>
                <?php endwhile; ?>
            </select>

            <button type="submit" name="create_data">Update data</button>
        </form>
    </body>
</html>
