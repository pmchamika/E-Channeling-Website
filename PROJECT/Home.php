<?php 
session_start();
include_once 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"> 
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="home-style.css"/>
	<script type="text/javascript" src="home-validate.js">
</script>	
</head>
<body>
	<div class="main">
		<div class="title">
		<?php
		if(isset($_SESSION['P_Email']) || isset($_SESSION['H_Email'])){
			echo'<a class="menu_side" href="Logout.php">Sign out</a>';
		
		}else{
			   	echo'<a class="menu_side" href="Login.php">Sign in</a>
				<a class="menu_side" href="Signup.php">Sign up</a>';
		}
		?>
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
			<div class="cover1">	
				<div class="slider">
						<div class='slide1'></div>
						<div class='slide2'></div>
						<div class='slide3'></div>
						<div class='slide4'></div>
						<div class='slide5'></div>
				</div>
			</div>
			<div class="search">
				<form name="myForms" method="POST" onsubmit="return formValidation()" action="search-connect.php">
			
					<table style="margin-left:450px;padding-top:90px;">
					<tr><td>Select a Doctor:&nbsp; </td><td><?php	$sql = "SELECT D_Name FROM doctor";
																	$result = mysqli_query($conn,$sql);
																	?>
																	
																	<select name='D_Name' style="width:356px; height:30px;padding-left:16px;border-radius:5px;">
																	 <option value="" disabled selected>--Select a doctor--</option>
																	<?php
																	while ($row = mysqli_fetch_array($result)) {
																	echo "<option value='" . $row['D_Name'] ."'>" . $row['D_Name'] ."</option>";
																	}
																	?>								
																</select>
															
													</td></tr>
					<tr style=height:30px;></tr>
					<tr><td>Select a Speciality:&nbsp; </td><td>
															<?php	$sql = "SELECT DISTINCT D_Speciality FROM doctor";
																	$result = mysqli_query($conn,$sql);
																	?>
																	
																	<select name='D_Speciality' style="width:356px; height:30px;padding-left:16px;border-radius:5px;">
																	 <option value="" disabled selected>--Select a speciality--</option>
																	<?php
																	while ($row = mysqli_fetch_array($result)) {
																	echo "<option value='" . $row['D_Speciality'] ."'>" . $row['D_Speciality'] ."</option>";
																	}
																	?>								
																</select>
													</td></tr>
					<tr style=height:30px;></tr>
					<tr><td>Select a Hospital:&nbsp; </td><td>
															<?php	$sql = "SELECT H_Name FROM hospital";
																	$result = mysqli_query($conn,$sql);
																	?>
																	
																	<select name='H_Name' style="width:356px; height:30px;padding-left:16px;border-radius:5px;">
																	 <option value="" disabled selected>--Select a hospital--</option>
																	<?php
																	while ($row = mysqli_fetch_array($result)) {
																	echo "<option value='" . $row['H_Name'] ."'>" . $row['H_Name'] ."</option>";
																	}
																	?>								
																</select>
													</td></tr>
					<tr style=height:30px;></tr>
					
					<tr><td></td><td><input name="submit" type="submit" Value="Search" style="width:70px;height:30px;background:linear-gradient(to bottom right, #1c4c89, #2282a3);color:white;border-radius:9px;margin-top:15px;margin-left:120px;"/></td></tr>
					</table>
				</form>
					
			</div>
			<div class="cover2_container">
			<div class="left_side">
			
			</div>
			<div class="cover2">
				<span id="slider-image-1"></span>
				<span id="slider-image-2"></span>
				<span id="slider-image-3"></span>
				<div class="image-holder">
					<img src="06.jpg" class="slider-image" />
					<img src="07.jpg" class="slider-image" />
					<img src="08.jpg" class="slider-image" />
				</div>
				<div class="button-holder">
					<a href="#slider-image-1" class="slider-change"></a>
					<a href="#slider-image-2" class="slider-change"></a>
					<a href="#slider-image-3" class="slider-change"></a>
				</div>
			</div>
			
			<div class="right_side">
			
			</div>
			</div>
			<div class="notice">
			<div class="help">
			<table style="margin-left:300px;font-size:18px;padding-top:50px;">
			<tr><td><h3>Help</h3></td></tr>
			<tr><td><a class="notice-links" href="Aboutus.php">About us</a></br></td></tr>
			<tr style=height:12px;></tr>
			<tr><td><a class="notice-links" href="Contact.php">Contact us</a></br><td></tr>
			<tr style=height:12px;></tr>
			<tr><td><a class="notice-links" href="Faq.php">FAQ</a></br></td></tr>
			</table>
			</div>
			<div class="follow">
			<table style="margin-left:600px;font-size:18px;padding-top:50px;">
			<tr><td><h3>Follow us</h3></td></tr>
			<tr><td><a class="notice-links" href="www.facebook.com">Facebook</a></br></td><td></td></tr>
			<tr style=height:12px;></tr>
			<tr><td><a class="notice-links" href="www.twitter.com">Twitter</a></br></td><td></td></tr>
			<tr style=height:12px;></tr>
			<tr><td><a class="notice-links" href="www.instagram.com">Instagram</a></br></td><td></td></tr>
			</table>
			</div>
			</div>
			<div class="footer">
			
			</div>
		</div>
	
</body
</html>
