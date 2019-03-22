<?php 
session_start();
include_once 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"> 
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="refund-style.css"/>
		<script type="text/javascript" src="refund-validate.js">
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
				<div class="reg-title">
			<h2>Claim Refund</h2>
			</div>
					<form name="myForms" method="POST" onsubmit="return formValidation()" action="refund-connect.php">
			<table style=margin-left:160px;>
			<tr style=height:12px;></tr>
			<tr style=height:12px;></tr>
			<tr>
			<td>Appointment Number &nbsp;</td>
			<td><input type="text" name="appointmentNo" placeholder="    Reference Number" style="width:350px; height:25px;"/></td>
		<tr style=height:12px;></tr>
		<tr style=height:12px;></tr>
		</tr>	
		<tr>
			<td>Refund Reason: &nbsp;</td>
			<td><textarea id="reason" name="reason" placeholder="  Refund Reason" style="width:350px;height:60px;"></textarea>&nbsp;</td>
		<tr style=height:12px;></tr>
		<tr style=height:12px;></tr>
		</tr>	
		<tr>
			<td>Account Holder Name: &nbsp;</td>
			<td><textarea id="name" name="holdername" placeholder="  Account Holder Name" style="width:350px;height:60px;"></textarea>&nbsp;</td>
		<tr style=height:12px;></tr>
		<tr style=height:12px;></tr>
		</tr>	
		<tr>
			<td>Bank Name and Branch: &nbsp;</td>
			<td><textarea id="bank" name="bank" placeholder="  Bank Name and Branch" style="width:350px;height:60px;"></textarea>&nbsp;</td>
		<tr style=height:12px;></tr>
		<tr style=height:12px;></tr>
		</tr>	
		<tr>
			<td>Bank Account Number: &nbsp;</td>
			<td><textarea id="accNo" name="accNo" placeholder="  Bank Account Number" style="width:350px;height:60px;"></textarea>&nbsp;</td>
		<tr style=height:12px;></tr>
		<tr style=height:12px;></tr>
		</tr>	
		<tr>
		<td></td>
		<td><input name="submit" type="submit" Value="Send Request" style="width:100px;height:40px;background-color:#071aef;color:white;border-radius:11px;margin-top:10px;margin-left:80px;"/></td>
		</tr>	
			</table>
			</form>
				</div>
				<div class="right_sidebar">
				
				</div>
			</div>
			<div class="footer">
			
			</div>
	</div>
</body>	
</html>