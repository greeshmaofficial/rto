<?php session_start(); 
include('dbconnect.php');
//$u_id=$_SESSION['u_id'];
//$u_pass=$_SESSION['u_pass'];
//$sql="select * from login where u_id='$u_id' and u_pass='$u_pass'";
//$result=mysql_query($sql,$con);
//$rowcount=mysql_num_rows($result);
//if($rowcount!=0)
//{
    $fname=$row['fname'];
	$photo=$row['photo'];
	$address=$row['address'];
	$phn=$row['phn'];
	$email=$row['email'];	
	$des=$row['des'];
	$salary=$row['salary'];
$sql="update employee set fname='fname',photo='$photo',address='$address',phn='$phn',email='$email',des='$des',salary='$salary'where email='$u_name'";
$result=mysqli_query($con,$sql);
$sql1="update  login set u_name'$email'where u_name='$u_name'";
$result1=mysqli_query($con,$sql1);

header("location:employee.php");
?>