<?php 
session_start();
include_once 'db_connect.php';







?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"> 
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="doctors-style.css"/>
	<script type="text/javascript" src="doctor-delete-validate.js">
</script>
<script type="text/javascript" src="doctor-add-validate.js">
</script>
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
				<div class="delete">
				<div class="delete-title">
				<h1>Delete & View Schedules</h1>
				</div>
				<form name="myForms" method="POST" onsubmit="return form1Validation()" action="deleteAndview-doc.php">
					<table style="margin-left:20px;padding-top:30px;">
					
					<tr><td>Select the Doctor:&nbsp; </td><td><?php	$sql = "SELECT D_Name FROM doctor";
																	$result = mysqli_query($conn,$sql);																																	
																	?>
																	
																	<select name='D_Name' style="width:364px; height:30px;padding-left:16px;border-radius:5px;margin-left:55px;">
																	 <option value="" disabled selected>--Select a doctor--</option>
																	<?php
																	while ($row = mysqli_fetch_array($result)) {
																	echo "<option value='" . $row['D_Name'] ."'>" . $row['D_Name'] ."</option>";
																	}
																	?>								
																</select>
															
													</td></tr>
													<tr style=height:30px;></tr>
					<tr><td>Select the Date:&nbsp; </td><td><?php	$a=$_SESSION['H_Email'];
																	$sql1 = "SELECT H_ID FROM hospital WHERE H_Email='$a'";
																	$result1 = mysqli_query($conn, $sql1);
																	$resultCheck1 = mysqli_num_rows($result1);
																	$row1 = mysqli_fetch_row($result1);
																	$b = $row1[0];
																	
																	$sql = "SELECT DISTINCT D_Date FROM doctor_hospital WHERE Active='yes' and H_ID='$b'";
																	$result = mysqli_query($conn,$sql);																																	
																	?>
																	
																	<select name='D_Date' style="width:364px; height:30px;padding-left:16px;border-radius:5px;margin-left:55px;">
																	 <option value="" disabled selected>--Select the Date--</option>
																	<?php
																	while ($row = mysqli_fetch_array($result)) {
																	echo "<option value='" . $row['D_Date'] ."'>" . $row['D_Date'] ."</option>";
																	}
																	?>								
																</select>
															
													</td><td><input name="deletesubmit" type="submit" Value="Delete Schedule" style="width:140px;height:50px;background:linear-gradient(to bottom right, #1c4c89, #2282a3);color:white;border-radius:9px;margin-top:0px;margin-left:80px;"/></td></tr>
													<tr style=height:30px;></tr>
					<tr><td>Select the Time:&nbsp; </td><td><?php	$sql = "SELECT DISTINCT D_Stime FROM doctor_hospital WHERE Active='yes' and H_ID='$b'";
																	$result = mysqli_query($conn,$sql);																																	
																	?>
																	
																	<select name='D_Stime' style="width:364px; height:30px;padding-left:16px;border-radius:5px;margin-left:55px;">
																	 <option value="" disabled selected>--Select the Time--</option>
																	<?php
																	while ($row = mysqli_fetch_array($result)) {
																	echo "<option value='" . $row['D_Stime'] ."'>" . $row['D_Stime'] ."</option>";
																	}
																	?>								
																</select>
															
													</td><td><input name="viewubmit" type="submit" Value="View Appointments" style="width:140px;height:50px;background:linear-gradient(to bottom right, #1c4c89, #2282a3);color:white;border-radius:9px;margin-top:0px;margin-left:80px;"/></td></tr>								
			</table>
			</form>
			</div>
			<div class="delete-title">
				<h1>Add a Schedule</h1>
				</div>
			<div class="Add">
			<form name="form1" method="POST" onsubmit="return form2Validation()" action="add-doc.php">
					<table style="margin-left:20px;padding-top:30px;">
					<tr><td>Select the Doctor:&nbsp; </td><td><?php	$sql = "SELECT D_Name FROM doctor";
																	$result = mysqli_query($conn,$sql);																																	
																	?>
																	
																	<select name='dname' style="width:364px; height:40px;padding-left:16px;border-radius:5px;height:25px;">
																	 <option value="" disabled selected>--Select a doctor--</option>
																	<?php
																	while ($row = mysqli_fetch_array($result)) {
																	echo "<option value='" . $row['D_Name'] ."'>" . $row['D_Name'] ."</option>";
																	}
																	?>								
																</select>
														</td></tr>
													<tr style=height:30px;></tr>
					<tr><td>Enter the Date:&nbsp; </td><td><Input id="date" type="text" name="date" style="width:356px; height:25px;"/>
															
													</td></tr>
													<tr style=height:30px;></tr>
					<tr><td>Enter the Start Time:&nbsp; </td><td><Input id="stime" type="text" name="stime" style="width:356px; height:25px;"/>
															
													</td><td><input name="addsubmit" type="submit" Value="Add Schedule" style="width:140px;height:50px;background:linear-gradient(to bottom right, #1c4c89, #2282a3);color:white;border-radius:9px;margin-top:0px;margin-left:80px;"/></td></tr>
													<tr style=height:30px;></tr>
					<tr><td>Enter the End Time:&nbsp; </td><td><Input id="etime" type="text" name="etime" style="width:356px; height:25px;"/>
															
													</td></tr>
													<tr style=height:30px;></tr>	
					<tr><td>Enter the Channeling Fee:&nbsp; </td><td><Input id="fee" type="text" name="fee" style="width:356px; height:25px;"/>
															
													</td></tr>
													<tr style=height:30px;></tr>									
			</table>
			</form>
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