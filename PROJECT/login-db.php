<?php
session_start();
if (isset($_POST['submit'])){
	
	include_once 'db_connect.php';
	
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['password']);
	
		
	if(empty($email) || empty($pwd)) {
		header("Location: ../Login.php?login=empty");
		exit();
			} else {
					$hpwd=sha1($pwd);
					$query = "SELECT * FROM patient WHERE P_Email='$email' and P_Password='$hpwd'";
 
					$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
					$count = mysqli_num_rows($result);
					
					if ($count == 1){
						header("Location: ../Home.php?login=success");
					$_SESSION['P_Email'] = $email;
					
					
					}
					
					elseif($count != 1){
					$query = "SELECT * FROM hospital WHERE H_Email='$email' and H_Password='$pwd'";
 
					$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
					$count = mysqli_num_rows($result);
					
					if ($count == 1){
						header("Location: ../Home.php?login=success");
						$_SESSION['H_Email'] = $email;
						
					}
					else{
					
					header("Location: ../Login.php?login=error");
					}
					}
			
					
			}	
			

} else {
	header("Location: ../Login.php?login=error");
	exit();
}
?>