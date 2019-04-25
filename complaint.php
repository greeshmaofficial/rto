<?php
include 'dbconnect.php';
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
<body background="images/i1.jpg">
<!--<div id="apDiv1">
  <div id="apDiv6">
    <div id="apDiv7">
    <form>
      <table width="374" height="259" border="1">
        <tr>
          <td>Full Name</td>
          <td><?php echo $rs[0] ?></td>
        </tr>
        <tr>
          <td>Permanent Address</td>
          <td><?php echo $rs[1]?></td>
        </tr>
        <tr>
          <td>Contact Number</td>
          <td><?php echo $rs[2]?></td>
        </tr>
        <tr>
          <td>Email Id</td>
          <td><?php echo $rs[3]?></td>
        </tr>
        </table>
      </form>
    </div>
  </div>
  <div id="apDiv4">Welcome 
    <div id="apDiv5"></div>
  </div-->
 <div id="apDiv1">
    <table width="1290" height="56" border="0">
      <tr>
        <td width="81" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="#">Home</a></td>
        <td width="129" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="login.php">Login</a></td>
        <td width="182" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="signup.php">Sign Up</a></td>
        <td width="154" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="complaint.php">Complaint</a></td>
        <td width="218" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="gallery.php">Gallery</a></td>
        <td width="102" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="login.php">License</a></td>
        <td width="166" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="login.php">Vehicle Registration</a></td>
        
      </tr>
    </table>
  </div>
</div>
<br><br><br><br><br>
    <div class="student-w3ls">
      <div class="container">
        <div class="student-grids">
          <div class="col-md-6 student-grid">
			<form  method="post">
				<br><br><br>
				Username:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="uname" ><br><br>
				Compliant Description:<textarea rows="5" cols="50" name="cdesc" ></textarea><br><br><br>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit"  name="submit" onclick="return otp()" class="btn btn-primary">Submit</button>
			</form>
    </div>
<div class="clearfix"></div>
  </div>
</div>
</div>
<!--student-->
</div>
<!--content-->
<!--footer-->

</body>
</html>
<?php
					if(isset($_POST['submit']))
					{
						$q1=$_POST['aad'];
						$com=$_POST['cdesc'];
						$date = date('Y-m-d');
						echo $date;
						$sql="INSERT INTO complaint(aadhar,cdate,cdesc) VALUES('$q1','$date','$com')";

						$results2=mysqli_query($conn,$sql);
					if(!$results2)
					{
						echo "<script>alert(' unsuccessfull')</script>";
					}
					}
				?>