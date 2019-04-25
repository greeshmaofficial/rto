
<?php
include('dbconnect.php');
$addque=$_POST['addque'];	
$op1=$_POST['op1'];
$op2=$_POST['op2'];
$op3=$_POST['op3'];
$ans=$_POST['ans'];

	$sql="insert into questions (question ,op1,op2,op3,ans) values ('$addque','$op1','$op2','$op3','$ans')";
	$result=mysqli_query($con,$sql);
	//echo $sql;
	//echo $result;
	header("location:addqst.php");
?>
