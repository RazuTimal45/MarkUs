<?php
include 'connection.php';

$id = $_GET['id'];

$deletequery = "delete from register where id=$id ";

$query = mysqli_query($conn, $deletequery);

header('location:dashboard.php');

?>