<?php

include 'connect.php';
$id = $_GET['id'];
$query = "SELECT * FROM feed WHERE id='$id'";
$run = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($run);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Post</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'nav.php' ?>
    <div class="form">
        <form action="set.php" method="post">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="text" name="uname" value="<?= $row['username'] ?>">
            <br><br>
            <textarea name="posts" cols="30" rows="10"><?= $row['posts'] ?></textarea>
            <br><br>
            <input type="submit" value="Update">
        </form>
    </div>
</body>
</html>
