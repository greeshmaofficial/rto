<?php
include 'dbconnect.php';
session_start();

unset($_SESSION['name']);
session_unset();
session_destroy();
header('location:login.php');

?>