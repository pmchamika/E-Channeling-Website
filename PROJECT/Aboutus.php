<?php 
session_start();
include_once 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"> 
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="Aboutus-style.css"/>
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
			<h1>About us.</h1>
			</div>
			<div class="table">
				<table>
				<tr style=height:30px;></tr>
				<tr><td><h2>e-Channelling TM is the software development and ICT service provider to the Healthcare industry in Sri Lanka. It is the one of the best company in Sri Lanka to offer a complete e-commerce based service </h2></td></tr>
			
				<tr><td><h2>The e-Channelling TM was launched to, tie up Doctors, Patients and Hospitals, leveraging the power of the Internet and ecommerce.</h2></td></tr>
			
				<tr><td><h2>According to the researches e-Channelling  TM is the No 1 E-channeling Local website in the country.</h2></td></tr>
			
				
				</table>
				</div>
				</div>
				
			</div>
			<div class="footer">
			
			</div>
	</div>
</body>	
</html>