<?php 
 
include("dbconnect.php");

 //$u_name=$_POST[''];
 //$u_pass=$_POST['pass'];
 //echo $u_name;
 $u_name = (isset($_POST['Username']) ? $_POST['Username'] : '');
 
  $u_pass = (isset($_POST['Password']) ? $_POST['Password'] : '');
  
//echo "hai show";
$sql="select * from login where u_name='".$u_name."'";

 $result=mysqli_query($con,$sql);
  //echo $sql;
 if(mysqli_num_rows($result))
{
	//echo "found";
while($row=mysqli_fetch_array($result))
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
				$_SESSION['u_type']="Admin";
                    echo "ok";
                          header("location:admin/admin.php");
			}
			else if($dbu_type==1)
			{
			$_SESSION['u_type']="Employee";

                          header("location:emp/index.php");
						  }
			else if($dbu_type==2)
			{
				$_SESSION['u_type']="Dealer";

			header("location:../e-rto/dealer-home.php");
			}
			elseif($dbu_type==3)
			{
				$_SESSION['u_type']="User";
				header("location:../prjt/user_home.php");
			}
			}
 else
              {
			   header("location:../prjt/login.php?error=wrong password");
	           echo "wrong";
              }
   }
   }

else
{
	echo "not found";	
}
?>
