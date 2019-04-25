<?php 
include('dbconnect.php');

 //$u_name=$_POST['email'];
 //$u_pass=$_POST['pass'];
 //echo $u_name;
 $u_name = (isset($_POST['email']) ? $_POST['email'] : '');
  $u_pass = (isset($_POST['pass']) ? $_POST['pass'] : '');
//echo "hai show";
$sql="select * from login where u_name='".$u_name."'";
 //echo $sql;
 $result=mysqli_query($con,$sql);
//echo "found";
$row=mysqli_fetch_array($result);

if($row=0)
{
		$dbu_name=$row['u_name'];
		$dbu_pass=$row['u_pass'];
		$dbu_type=$row['u_type'];
        $dbu_roles=$row['status'];
		
		
		if($dbu_name==$u_name && $dbu_pass==$u_pass)
		{
			$_SESSION['u_name']=$dbu_name;
            $_SESSION['u_pass']=$dbu_pass;
 
			
			if($dbu_type==0)	
			{
				$_SESSION['type']="Admin";
                 
                          header("location:admin/admin.php");
			}
			else if($dbu_type==1)
			{
			$_SESSION['type']="Employee";

                          header("location:emp/employee.php");
						  }
			else if($dbu_type==2)
			{
				$_SESSION['type']="Dealer";

			header("location:../e-rto/dealer-home.php");
			}
			elseif($dbu_type==3)
			{
				$_SESSION['type']="User";
				
				header("location:..prjt/user_home.php");
			}
		}
 else
              {
			   header("location:../prjt/login.php?error=wrong password");
	           echo "wrong";
              }

?>