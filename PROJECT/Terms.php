<?php 
session_start();
include_once 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"> 
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="terms-style.css"/>
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
			<h1>Terms And Conditions</h1>
			</div>
			<div class="table">
				<table>
				<tr style=height:30px;></tr>
				<tr><td><h3>•	In the event of the doctor canceling an appointment, the hospital will give a fresh appointment or refund the doctor fees according to hospitals rules and regulations.</h3></td></tr>
			
				<tr><td><h3>•	No refunds or cancellations will be done at the bank branches under any circumstances</h3></td></tr>
			
				<tr><td><h3>•	All the payment related information is collected & kept with the relevant banks while the rest of the information that had been collected here is for hospital use only.</h3></td></tr>
			
				<tr><td><h3>•	Your payments will be waged through industry standard Secure Sockets Layer (SSL) with 128- bit encryption key ensuring high safety & security online. </h3></td></tr>
				<tr><td><h3>•	The customer consents to receive promotional and informational SMS from E-Channeling and/or from the respective hospital. The Customer may opt-out of this service by contacting E-channeling.</h3></td></tr>
				</table>
				</div>
				</div>
				
			</div>
			<div class="footer">
			
			</div>
	</div>
</body>	
</html>