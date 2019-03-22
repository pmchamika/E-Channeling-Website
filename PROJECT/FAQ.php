<?php 
session_start();
include_once 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"> 
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="FAQ-style.css"/>
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
			<h1>Frequently Asked Quetions</h1>
			</div>
			<div class="table">
				<table>
				<tr style=height:30px;></tr>
				<tr><td><h2>How do I channel through the internet?</h2></td></tr>
				<tr><td>
<h3>All you have to do is search for the doctor, using the search facility provided on this web site. After selecting the required session of the doctor.You will need a credit card to make the payment; any Visa, Master card or American Express credit card is accepted. 
				</h3></td></tr>
				<tr><td><h2>How do I cancel an appointment that I have made on the internet or at the bank?</h2></td></tr>
				<tr><td>
<h3>You cannot cancel an appointment made through e-Channelling and obtain a refund after the appointment date. However, you could request a refund before the commencement of the doctor's consultation session at the hospital .
				</h3></td></tr>
				<tr><td><h2>Whom should I call to get further information about doctors, my appointments or cancellations?</h2></td></tr>
				<tr><td>
<h3>Please visit the “Contact us” Page for contact information.</h3>
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