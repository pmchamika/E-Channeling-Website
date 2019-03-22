<?php
session_start();
if (isset($_POST['submit'])){
	
	include_once 'db_connect.php';
	
	$dname = mysqli_real_escape_string($conn, $_POST['D_Name']);
	$speciality = mysqli_real_escape_string($conn, $_POST['D_Speciality']);
	$hname = mysqli_real_escape_string($conn, $_POST['H_Name']);
	
	
	if(empty($dname) || empty($speciality) || empty($hname)) {
		
		
		
		$msg="Please Select a Doctor , Speciality and a Hospiatal";
		echo "<script type'text/javascript'>alert('$msg');</script>";
		header("Location: ../Home.php?form=empty");	
		} else {
					
					$sql1 = "SELECT H_ID FROM hospital WHERE H_Name='$hname'";
					$result1 = mysqli_query($conn, $sql1);
					$resultCheck1 = mysqli_num_rows($result1);
					$row1 = mysqli_fetch_row($result1);
					$x = $row1[0];
					
					$sql2 =  "SELECT D_ID FROM doctor WHERE D_Name='$dname'and D_Speciality='$speciality'";
					$result2 = mysqli_query($conn, $sql2);
					$resultCheck2 = mysqli_num_rows($result2);
					$row2 = mysqli_fetch_row($result2);
					$y = $row2[0];	
					
					$sql3 =  "SELECT D_Date FROM doctor_hospital WHERE H_ID='$x'and D_ID='$y' and Active='yes' ";
					$result3 = mysqli_query($conn, $sql3);
					$resultCheck3 = mysqli_num_rows($result3);
					$row3 = mysqli_fetch_row($result3);
					if($resultCheck3 == 1){
					$r1 = $row3[0];
					
					$sql4 =  "SELECT D_Stime FROM doctor_hospital WHERE H_ID='$x'and D_ID='$y' and Active='yes' ";
					$result4 = mysqli_query($conn, $sql4);
					$resultCheck4 = mysqli_num_rows($result4);
					$row4 = mysqli_fetch_row($result4);
					$r2 = $row4[0];
					
					$sql5 =  "SELECT D_Etime FROM doctor_hospital WHERE H_ID='$x'and D_ID='$y' and Active='yes' ";
					$result5 = mysqli_query($conn, $sql5);
					$resultCheck5 = mysqli_num_rows($result5);
					$row5 = mysqli_fetch_row($result5);
					$r3 = $row5[0];
					
					$sql6 =  "SELECT Group_ID FROM doctor_hospital WHERE H_ID='$x'and D_ID='$y' and Active='yes' ";
					$result6 = mysqli_query($conn, $sql6);
					$resultCheck6 = mysqli_num_rows($result6);
					$row6 = mysqli_fetch_row($result6);
					$r4 = $row6[0];
					
					$sql7 =  "SELECT Fee FROM doctor_hospital WHERE H_ID='$x'and D_ID='$y' and Active='yes' ";
					$result7 = mysqli_query($conn, $sql7);
					$resultCheck7 = mysqli_num_rows($result7);
					$row7 = mysqli_fetch_row($result7);
					$r5 = $row7[0];
					
					$doctor=$dname;
					$special=$speciality;
					$hospital=$hname;
					}else{
							$doctor=$special=$hospital=$r1=$r2=$r3=$r5='No Search results Available';
					}
						 
			} 
		

		
		
	
} else {
	header("Location: ../Home.php");
	exit();
}
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"> 
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="search-style.css"/>
	</head>
<body>
	<div class="main">
		<div class="title">
			   
				
		</div>
			<div class="top_menu">
				<a class="menu1" href="Home.php">Home</a>
				<?php
				if(isset($_SESSION['H_Email'])){
				echo'<a class="menu2" href="Doctors.php">Change Schedule</a>';
				}
				?>
				<a class="menu3" href="Refund.php">Refund</a>
				<a class="menu4" href="Contact.php">Contact</a>
				<a class="menu5" href="Aboutus.php">About</a>
				
			</div>	
			<div>
				<div class="left_sidebar">
				
				</div>
				<div class="reg_form">
				<div class="table">
				<table>
				<tr><td>Doctor Name:&nbsp;</td><td><?php echo $doctor; ?></td></tr>
				<tr style=height:30px;></tr>
				<tr><td>Speciality:&nbsp;</td><td><?php echo $special ?></td></tr>
				<tr style=height:30px;></tr>
				<tr><td>Available Hospital:&nbsp;</td><td><?php echo $hospital ?></td></tr>
				<tr style=height:30px;></tr>
				<tr><td>Next Available Day:&nbsp;</td><td><?php echo $r1; ?></td></tr>
				<tr style=height:30px;></tr>
				<tr><td>Available Time&nbsp;</td><td></td></tr>
				<tr><td>From:&nbsp;</td><td><?php echo $r2; ?></td></tr>
				<tr style=height:30px;></tr>
				<tr><td>To:&nbsp;</td><td><?php echo $r3; ?></td></tr>
				<tr style=height:30px;></tr>
				<tr><td>Channeling Fee:&nbsp;</td><td><?php echo $r5; ?></td></tr>
				</table>
				<table>
				
				<form method="POST" action="appointment-store.php">
				
				
				<tr><td></td><td><?php if($r1 !=='No Search results Available'){
				if(isset($_SESSION['P_Email'])){
				$_SESSION['P_hospital']	=$x;
				$_SESSION['P_doctor']=$y;
				$_SESSION['P_group']=$r4;
				$_SESSION['Fee']=$r5;
				
				echo'<input name="btnsubmit" type="submit" Value="Make an Appointment" style="width:150px;height:60px;background:linear-gradient(to bottom right, #1c4c89, #2282a3);color:white;border-radius:9px;margin-top:40px;margin-left:60px;"/>';}} ?></td></tr>
				
				</form>
				</table>
				
				</div>
				</div>
				<div class="right_sidebar">
				
				</div>
			</div>
			<div class="footer">
			
			</div>
	</div>
</body>	
</html>