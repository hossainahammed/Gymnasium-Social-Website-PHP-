<?php
include 'connect.php';
$uname = $_POST['uname'];
$posts = $_POST['posts'];
$query = "INSERT INTO feed(username, posts) VALUES('$uname', '$posts')";
$run = mysqli_query($con, $query);
if (!$run) {
    echo "submission failed!";
} else {
    header("location: list.php");
}
?>