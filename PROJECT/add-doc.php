<?php
session_start();
if (isset($_POST['addsubmit'])){
	
	include_once 'db_connect.php';
		
	$dname = mysqli_real_escape_string($conn, $_POST['dname']);
	$date = mysqli_real_escape_string($conn, $_POST['date']);
	$stime = mysqli_real_escape_string($conn, $_POST['stime']);
	$etime = mysqli_real_escape_string($conn, $_POST['etime']);
	$fee = mysqli_real_escape_string($conn, $_POST['fee']);
	
		
	if(empty($dname) || empty($date) || empty($stime) || empty($etime) || empty($fee)) {
		header("Location: ../Doctors.php?form=empty");	
		exit();
		} else {
		
					$sql1 = "SELECT D_ID FROM doctor WHERE D_Name='$dname'";
					$result1 = mysqli_query($conn, $sql1);
					$resultCheck1 = mysqli_num_rows($result1);
					$row1 = mysqli_fetch_row($result1);
					$x = $row1[0];
					
					$b=$_SESSION['H_Email'];
					$sql2 = "SELECT H_ID FROM hospital WHERE H_Email='$b'";
					$result2 = mysqli_query($conn, $sql2);
					$resultCheck2 = mysqli_num_rows($result2);
					$row2 = mysqli_fetch_row($result2);
					$y = $row2[0];
					
					$sql3 = "SELECT Group_ID FROM doctor_hospital WHERE H_ID='$y' and D_ID='x' and D_Date='$date' and D_Stime='$stime' and D_Etime='$etime' and Active='yes'";
					$result3 = mysqli_query($conn, $sql3);
					$resultCheck3 = mysqli_num_rows($result3);
					
					if($resultCheck3<1){ 		
					
					$sql4="INSERT INTO doctor_hospital (H_ID, D_ID, D_Stime, D_Etime, D_Date, Fee, Active) VALUES ('$y', '$x', '$stime', '$etime', '$date', '$fee', 'yes');";
					$result4 = mysqli_query($conn, $sql4);
					header("Location: ../Doctors.php?form=success");
					
					}else{
						header("Location: ../Doctors.php?form=dupicate");
					}
		}
		
		
	} else {
	header("Location: ../Doctors.php?submit=error");
	exit();
	}
	?>