<?php 
session_start();
include_once 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"> 
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="AppointmentNo-style.css"/>
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
				
				<div class="faq_form">
				<div class="reg-title">
			
			</div>
			<div class="table">
				<table>
				<tr style=height:30px;></tr>
				
				<tr><td style="width:170px;"></td><td><h2>Payment SuccessFull.</h2></td></tr>
				<tr><td style="width:170px;"></td><td><h2>Your Appointment Number is:</h2></td><td><h2><?php $k=$_SESSION['A_ID'];
																	echo $k;
															?></h2>
				</td></tr>
				</table>
				</div>
				</div>
				
			</div>
			<div class="footer">
			
			</div>
	</div>
</body>	
</html>