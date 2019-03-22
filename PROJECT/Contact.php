<?php 
session_start();
include_once 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"> 
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="Contact-style.css"/>
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
			<h1>Contact us.</h1>
			</div>
			<div class="table">
				<table>
				<tr style=height:30px;></tr>
				<tr style=height:30px;></tr>
				<tr><td><h2>If you have encountered any difficulties using this web site, please call 071 0400855 between 7.30 a.m. to 6.00 p.m. or the e-Channelling Hotline 071 0400696</h2></td></tr>
				<tr style=height:30px;></tr>
				<tr><td><h2><pre>   Address : No 80,Mihindu Road, Kurunegale.
   Colombo 07, Sri Lanka.
   Call Centre Hotline : 071 04008555
   Office Contact Number : 071 0458512
   Customer Care : 071 0445789
   e-mail : echanneling@gamil.com
   web : www.echannelling.com
</pre></h2></td></tr>
						
				</table>
				</div>
				</div>
				
			</div>
			<div class="footer">
			
			</div>
	</div>
</body>	
</html>