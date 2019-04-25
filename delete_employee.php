<?php

include 'dbconnect.php';

$id = $_GET['id'];

$q = " DELETE FROM employee WHERE e_id = '$id' ";

mysqli_query($con, $q);

header('location:empview.php');

?>