<?php session_start(); 
include('dbconnect.php');
$u_name=$_SESSION['u_name'];
$u_pass=$_SESSION['u_pass'];
$sql="select * from login where u_name='$u_name' and u_pass='$u_pass'";
$result=mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($result);
if($rowcount!=0)
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 1372px;
	height: 634px;
	z-index: 1;
	left: -10px;
	top: 3px;
	text-align: center;
}
#apDiv2 {
	position: absolute;
	width: 557px;
	height: 61px;
	z-index: 2;
	left: 350px;
	top: 11px;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 36px;
	text-align: center;
	color: #009;
}
#apDiv3 {
	position: absolute;
	width: 1293px;
	height: 59px;
	z-index: 3;
	left: 43px;
	top: 98px;
}
#apDiv1 #apDiv3 table {
	font-family: Verdana, Geneva, sans-serif;
}
#apDiv3 table {
	font-size: 24px;
}
#apDiv3 table {
	font-size: 16px;
}
#apDiv3 table {
	text-align: center;
	font-weight: bold;
}
#apDiv3 table {
	font-weight: normal;
}

#apDiv4 {
	position: absolute;
	width: 323px;
	height: 35px;
	z-index: 4;
	left: 45px;
	top: 198px;
	text-align: justify;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 18px;
}
#apDiv5 {
	position: absolute;
	width: 234px;
	height: 27px;
	z-index: 2;
	top: 2px;
}
#apDiv6 {
	position: absolute;
	width: 411px;
	height: 277px;
	z-index: 5;
	left: 385px;
	top: 266px;
}
#apDiv7 {
	position: absolute;
	width: 390px;
	height: 259px;
	z-index: 1;
	left: 10px;
	top: 6px;
}
</style>
</head>

<body>
<div id="apDiv1">
  <div id="apDiv6">
    <div id="apDiv7">
    <?php
$u_nmae=$_SESSION['u_name'];
$sql="select * from tbl_user where uemail='$u_name'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{

	$name=$row['uname'];
	$ph=$row['uphone'];
	$mail=$row['uemail'];	
?>
<form  name="frm" action="update.php" method="POST" >
<table border=0 bgcolor=white><br><br>
<tr>
    <td align='center'>Name:</td>
    <td><input type='text' name='uname' value= <?php echo $name; ?> required><br><br></td>
</tr>

<tr>
    <td align='center'>Phone:</td>
    <td><input type='text' name='uphone' value=<?php echo $ph; ?> required><br><br></td>
</tr>
<tr>
    <td align='center'>Email:</td>
    <td><input type='Email' name='uemail' value=<?php echo $mail; ?> required><br><br></td>
</tr></table>
<br><br>
<table>
<center><tr><td><input type='submit' name='UPDATE' value="Update">
</td></tr>
</table>
<?php
}
}
else
	header("location:../prjt/index.php");
?>
</form>
</body>
</html>
  <div id="apDiv3">
    <table width="1290" height="56" border="0">
      <tr>
        <td width="81" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="#">Profile</a></td>
        <td width="129" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="license.php">Licence</a></td>
        <td width="182" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="status.php">Status of Licence</a></td>
        <td width="154" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="registration.php">Registration</a></td>
        <td width="218" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="statusr.php">Status of Registration</a></td>
        <td width="102" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="tax.php">Tax</a></td>
        <td width="166" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="statust.php">Status of Tax</a></td>
        <td width="107" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="renewal.php">Renewal</a></td>
        <td width="93" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="user_logout.php">Logout</a></td>
      </tr>
    </table>
  </div>
<div id="apDiv2">RTO Management System</div>
</div>
</body>
</html>