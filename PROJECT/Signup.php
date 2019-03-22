<?php 
session_start();
include_once 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"> 
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="signup-style.css"/>
		<script type="text/javascript" src="reg-validate.js">
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
			<h2>Member Registration</h2>
			</div>
					<form name="myForms" method="POST" onsubmit="return formValidation()" Action="signup-db.php">
			<table style=margin-left:160px;>
		<tr>
		  <tr>
			<td>Status:</td>
			<td><select name="status" style="width:356px; height:30px;padding-left:16px;">
					<option value="Mr">Mr.</option>
					<option value="Mrs">Mrs.</option>
					<option value="Miss">Miss.</option>
				</select></td>
			<tr style=height:12px;></tr>
		 </tr>
		 <td>First Name:&nbsp; </td>
			<td><Input id="firstname" type="text" name="firstname" style="width:350px; height:25px;"/></td>
		 <tr style=height:12px;></tr>
		 </tr>
		 <tr>
		 <td>Last Name:&nbsp; </td>
			<td><Input id="lastname" type="text" name="lastname" style="width:350px; height:25px;"/></td>
		 <tr style=height:12px;></tr>
		 </tr>
		 <tr>
		  	<tr>
			<td>Email Address:&nbsp;</td>
			<td><input type="email" name="email" style="width:350px; height:25px; margin-left:3px;"/></td>
			<tr style=height:12px;></tr>
		</tr>
		 <td>Password: &nbsp;</td>
			<td><Input  type="password" name="password"  style="width:350px; height:25px;"/></td>
		 <tr style=height:12px;></tr>
		 </tr>
		   <tr>
		 <td>Confirm Password: &nbsp;</td>
			<td><Input type="password" name="Cpassword"  style="width:350px; height:25px;"/></td>
		 <tr style=height:12px;></tr>
		 </tr>
		<tr>
			<td>NIC: &nbsp;</td>
			<td><input type="text" name="nic" placeholder="    100022000V" style="width:350px; height:25px;"/></td>
		<tr style=height:12px;></tr>
		</tr>	
		 <tr>
		 <td>Date of Birth: &nbsp;</td>
			<td><Input type="text" name="dob" placeholder="    MM/DD/YYYY" style="width:350px; height:25px;"/></td>
		<tr style=height:12px;></tr>
			</tr>
		
		<tr>
			<td>Postal Address: &nbsp;</td>
			<td><textarea id="address" name="address" style="width:350px;height:60px;"></textarea>&nbsp;</td>
		<tr style=height:12px;></tr>
		</tr>	
		<tr>
		 <td>Contact Number: &nbsp;</td>
			<td>
			<table>
		     <tr>
			<td><Input id="usrtel1" type="tel" name="usrtel1" placeholder="    0110000000" style="width:350px; height:25px;"/></td>
			 </tr>	
			 <tr>
			 <td><Input id="usrtel2" type="tel" name="usrtel2" placeholder="    0770000000" style="width:350px; height:25px;"/></td>
			 </tr>	
			 </table>
			</td>
			<tr style=height:12px;></tr>
		 </tr>	
		
		  <tr><td><b>Payment Method</b></td><td></td></tr>
		  <tr style=height:12px;></tr>
		  <tr><td>Card Number: &nbsp;</td>
			<td><input type="text" name="accNo" placeholder="    0000-0000-0000-0000" style="width:350px; height:25px;"/></td></tr>
		<tr style=height:12px;></tr>
		 <tr>
		 <td>Valid Date: &nbsp;</td>
			<td><Input type="text" name="vDate" placeholder="    MM/DD/YYYY" style="width:350px; height:25px;"/></td>
		</tr>
			<tr style=height:12px;></tr>
		  <tr><td>Secret Code: &nbsp;</td>
			<td><input type="text" name="sCode" placeholder="    101" style="width:50px; height:25px;"/></td></tr>
		<tr style=height:12px;></tr>
		 <tr><td><a class="terms" href="Terms.php" ><font color="#071aef">Terms and Conditions</a></td></tr>
		<tr><td style="width:210px;">By clicking "Sign up",I agree to the Terms and Conditions of the service.</td></tr>
		<tr>
			<td><input name="submit" type="submit" Value="Sign up" style="width:70px;height:30px;background-color:#071aef;color:white;border-radius:9px;margin-top:10px;margin-left:60px;"/></td>
			<td><input type="button" Value="Sign in" onclick="location='Login.php'" style="width:70px;height:30px;background-color:#071aef;color:white;border-radius:9px;margin-top:10px;margin-left:160px;"/></td>
		<tr><td></td><td><p style="margin-left:120px;">Already have an account ?</p></td></tr>
		<tr style=height:12px;></tr>
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