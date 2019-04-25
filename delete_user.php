<?php

include 'dbconnect.php';

$id = $_GET['id'];

$q = " DELETE FROM tbl_user WHERE uid = '$id' ";

mysqli_query($con, $q);

header('location:userview.php');

?>