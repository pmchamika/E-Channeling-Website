<?php 
session_start();
include_once 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"> 
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="login_style.css"/>
		<script type="text/javascript" src="login-validate.js">
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
				<div class="table">
				<div class="reg-title">
				<h1>Sign in</h1>
				</div>
				<form name="myForms" method="POST" onsubmit="return formValidation()" Action="login-db.php">
				<table>
				<tr style=height:12px;></tr>
			<tr>
			<td>Email:&nbsp;</td>
			<td><input type="email" name="email" style="width:250px; height:25px; margin-left:10px;"/></td>
			</tr>
			<tr style=height:12px;></tr>
			<tr style=height:6px;></tr>
			
			<tr>
			<td>Password:&nbsp;</td>
			<td><Input  type="password" name="password"  style="width:250px; height:25px; margin-left:10px;"/></td>
			</tr>
			<tr style=height:12px;></tr>
			<tr>
			<td></td><td><input name="submit" type="submit" Value="Sign in" style="width:70px;height:30px;background-color:#071aef;color:white;border-radius:9px;margin-top:10px;margin-left:60px;"/></td></tr>
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