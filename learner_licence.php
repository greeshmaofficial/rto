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
	width: 1354px;
	height: 804px;
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
	height: 52px;
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
	width: 213px;
	height: 28px;
	z-index: 2;
	left: 420px;
	top: 162px;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 18px;
}
#apDiv5 {
	position: absolute;
	width: 372px;
	height: 590px;
	z-index: 4;
	left: 420px;
	top: 202px;
	text-align: justify;
}
#apDiv1 #apDiv5 table {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 16px;
	text-align: justify;
}
#apDiv1 #apDiv5 form table tr td {
	font-size: 14px;
}
#apDiv6 {
	position: absolute;
	width: 219px;
	height: 28px;
	z-index: 2;
	top: -40px;
	left: 217px;
}
</style>
</head>

<body background="images/i1.jpg">
<?php 
$date=date('Y-m-d');	
echo $date;
?>


<div id="apDiv1">
  <div id="apDiv5">
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <table width="368" height="584" border="0">
      <tr>
        <td width="95">Full Name</td>
        <td width="7">:</td>
        <td width="252"><label for="textfield"></label>
        <input type="text" name="fullname" id="textfield" placeholder="Your Full Name" required="required" /></td>
      </tr>
      <tr>
        <td>Father Name</td>
        <td>:</td>
        <td><input type="text" name="fname" id="textfield2" placeholder="Your Father's Name" required="required" /></td>
      </tr>
      <tr>
        <td>Address</td>
        <td>:</td>
        <td><input type="text" name="address" id="textfield3" placeholder="Your Full Address" required="required" /></td>
      </tr>
      <tr>
        <td>Email_Id</td>
        <td>:</td>
        <td><input type="text" name="email" id="textfield4" placeholder="Your Email_Id" required="required" /></td>
      </tr>
      <tr>
        <td>Phone No.</td>
        <td>:</td>
        <td><input type="text" name="contact" id="textfield5" placeholder="Your Contact No." required="required" /></td>
      </tr>
      <tr>
        <td>Licence Type</td>
        <td>:</td>
        <td><label for="select"></label>
          <select name="licence" id="select" required='required'>
          <option value="">Select Option</option>
			<option value="two">Two Wheeler</option>
			<option value="three">Three Wheeler</option>
            <option value="four">Four Wheeler</option>
            <option value="heavy">Heavy Motor Vehicle</option>
        </select></td>
      </tr>
      <tr>
        <td>Date of Birth</td>
        <td>:</td>
        <td><input type="text" name="dob" id="textfield6" placeholder="DD/MM/YYYY" required="required" /></td>
      </tr>
      <tr>
        <td>Gender</td>
        <td>:</td>
        <td><input type="radio" name="gender" id="radio" value="male" />Male
        <input type="radio" name="gender" id="radio" value="female" />Female
        

          <label for="radio"></label></td>
      </tr>
      <tr>
        <td>Blood Group</td>
        <td>:</td>
        <td><input type="text" name="blood" id="textfield7" placeholder="Eg:AB+,B+,etc" required="required" /></td>
      </tr>
      <tr>
        <td>Qualification</td>
        <td>:</td>
        <td><input type="text" name="qualification" id="textfield8" placeholder="HSLC,HS,GRADUATE,POST GRADUATE" required="required" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" id="button" value="Submit" />
          
          <input type="reset" name="button2" id="button2" value="Reset" /></td>
      </tr>
    </table>
    </form>
  </div>
<div id="apDiv4">Learner Licence Form:</div>

  
  <div id="apDiv3">
    <table width="1290" height="48" border="0">
      <tr>
        <td width="81" height="44" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="user_home.php">Profile</a></td>
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