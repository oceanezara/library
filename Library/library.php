<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Libray</title>
        <link href="index.css" rel="stylesheet">
    </head>
    <body>
    
        <form action="" method="post">
            <input type="search" name="search">
            <input type="submit" name="submit" value="Search">
        </form>
        
        <h1>Bibliothèque</h1>
        
    <?php
$link = mysqli_connect("localhost", "root", "")
    or die("Impossible de se connecter : " . mysqli_error($link));
echo '';


$db_selected = mysqli_select_db($link, 'library');
if (!$db_selected) {
   die ('Impossible de sélectionner la base de données : ' . mysqli_error($link));
}

$sql = "SELECT book.id, book.title, book.year, author.lastname FROM book JOIN author on book.author_id = author.id ";


$result = $link->query($sql);


if ($result->num_rows == 0):
    echo "0 result";
else:
?>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Year</th>
            <th>Author</th>
            <th colspan="2">Request</th>
        </tr>

        <?php while ($row = $result->fetch_assoc()) : ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["title"]; ?></td>
                <td><?php echo $row["year"]; ?></td>
                <td><?php echo $row["lastname"]; ?></td>
                <td><a href="update.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
                <td><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
            </tr>
        <?php endwhile; ?>
    </table>
<?php endif; ?>

        <a href="create.php" class="create">Create book</a>

    </body>
</html>