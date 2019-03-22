<?php
session_start();
if (isset($_POST['deletesubmit'])){
	
	include_once 'db_connect.php';
	
	$dname = mysqli_real_escape_string($conn, $_POST['D_Name']);
	$ddate = mysqli_real_escape_string($conn, $_POST['D_Date']);
	$dtime = mysqli_real_escape_string($conn, $_POST['D_Stime']);
	
	
	if(empty($dname) || empty($ddate) || empty($dtime)) {
		header("Location: ../Doctors.php?form=empty");	
		exit();
		} else {
					
					$sql1 = "SELECT D_ID FROM doctor WHERE D_Name='$dname'";
					$result1 = mysqli_query($conn, $sql1);
					$resultCheck1 = mysqli_num_rows($result1);
					$row1 = mysqli_fetch_row($result1);
					$x = $row1[0];
					
					$sql2 = "SELECT Group_ID FROM doctor_hospital WHERE D_ID='$x' and D_Date='$ddate' and D_Stime='$dtime'"; 
					$result2 = mysqli_query($conn, $sql2);
					$resultCheck2 = mysqli_num_rows($result2);
					$row2 = mysqli_fetch_row($result2);
					$y= $row2[0];
					
					if($resultCheck2=1){
					$sql3 = "UPDATE doctor_hospital SET Active='no' WHERE D_ID='$x' and D_Date='$ddate' and D_Stime='$dtime'"; 
					$result3 = mysqli_query($conn, $sql3);
					header("Location: ../Doctors.php?delete=success");
					}
					else{
						header("Location: ../Doctors.php?form=nodata");
					}
					
		}
					
	} else {
		
if (isset($_POST['viewubmit'])){
	
	include_once 'db_connect.php';
	
	$dname = mysqli_real_escape_string($conn, $_POST['D_Name']);
	$ddate = mysqli_real_escape_string($conn, $_POST['D_Date']);
	$dtime = mysqli_real_escape_string($conn, $_POST['D_Stime']);
	
	
	if(empty($dname) || empty($ddate) || empty($dtime)) {
		header("Location: ../Doctors.php?form=empty");	
		exit();
		} else {
					
					$sql1 = "SELECT D_ID FROM doctor WHERE D_Name='$dname'";
					$result1 = mysqli_query($conn, $sql1);
					$resultCheck1 = mysqli_num_rows($result1);
					$row1 = mysqli_fetch_row($result1);
					$x = $row1[0];
					
					$sql2 = "SELECT Group_ID FROM doctor_hospital WHERE D_ID='$x' and D_Date='$ddate' and D_Stime='$dtime'"; 
					$result2 = mysqli_query($conn, $sql2);
					$resultCheck2 = mysqli_num_rows($result2);
					$row2 = mysqli_fetch_row($result2);
					$y= $row2[0];
					
					if($resultCheck2>0){
					$sql3 = "SELECT * FROM appointment WHERE Group_ID='$y'"; 
					$result3 = mysqli_query($conn, $sql3);
					
					while($row3=mysqli_fetch_array($result3))
					{


?>

				<div>
				<table>
				<tr style=height:30px;></tr>
				<tr style=height:30px;></tr>
				<tr><td style="width:90px;"></td><td><h2>Appointment No:<h2></td><td style="width:120px;"><h2><?php echo $row3['A_ID'];
															?></h2>
				</td><td><h2>Patient NIC:<h2></td><td style="width:200px;"><h2><?php $p=$row3['P_ID'];
											$sql4 = "SELECT P_Nic FROM patient WHERE P_ID='$p'";
											$result4 = mysqli_query($conn, $sql4);
											$resultCheck4 = mysqli_num_rows($result4);
											$row4 = mysqli_fetch_row($result4);
											$h= $row4[0];
											echo $h;
											
											?></h2>
				</td>
				<td><h2>Patient Name:</h2></td><td style="width:50px;"><h2><?php $p=$row3['P_ID'];
											$sql5 = "SELECT P_Status FROM patient WHERE P_ID='$p'";
											$result5 = mysqli_query($conn, $sql5);
											$resultCheck5 = mysqli_num_rows($result5);
											$row5 = mysqli_fetch_row($result5);
											$n= $row5[0];
											echo $n;
											
											?></h2>
				</td><td style="width:170px;"><h2><?php $p=$row3['P_ID'];
											$sql6 = "SELECT P_Lname FROM patient WHERE P_ID='$p'";
											$result6= mysqli_query($conn, $sql6);
											$resultCheck6 = mysqli_num_rows($result6);
											$row6 = mysqli_fetch_row($result6);
											$m= $row6[0];
											echo $m;
											
											?></h2></td></tr>
				</table>
				
				
			</div>
	
		
					<?php }
					}
		
					else{
						header("Location: ../Doctors.php?schedule=error");
					}
					
		
		
		}		
	} else {
	header("Location: ../Doctors.php?schedule=error");
	exit();
}
	}
?>


					