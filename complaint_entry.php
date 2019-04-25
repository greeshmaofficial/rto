<?php
					include('dbconnect.php');
					if(isset($_POST['submit']))
					{
						$q1=$_POST['u_name'];
						$com=$_POST['cdes'];
						$date = date('Y-m-d');
						//echo $date;
						$sql="INSERT INTO complaint(u_name,cdate,cdes) VALUES('$q1','$date','$com')";
						$results=mysqli_query($con,$sql);
						
						
						echo "<script>window.onload=function(){alert('success...');window.location.href='index.php';}</script>";
					
					}
				?>
