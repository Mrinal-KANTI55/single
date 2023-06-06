<?php

include 'connection.php';

$id = $_GET['id'];

$q = " DELETE FROM `foodDetail` WHERE id = $id ";
$DeleteBlogInfo = " DELETE FROM `blogDetail` WHERE id = $id ";


mysqli_query($con, $q);
mysqli_query($con, $DeleteBlogInfo);


header('location:index.php');

?>