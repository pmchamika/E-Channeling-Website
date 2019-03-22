<?php
if (isset($_POST['submit'])){
	
	include_once 'db_connect.php';
	
	$status = mysqli_real_escape_string($conn, $_POST['status']);
	$fname = mysqli_real_escape_string($conn, $_POST['firstname']);
	$lname = mysqli_real_escape_string($conn, $_POST['lastname']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['password']);
	$nic = mysqli_real_escape_string($conn, $_POST['nic']);
	$dob = mysqli_real_escape_string($conn, $_POST['dob']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$tel1 = mysqli_real_escape_string($conn, $_POST['usrtel1']);
	$tel2 = mysqli_real_escape_string($conn, $_POST['usrtel2']);
	$accno = mysqli_real_escape_string($conn, $_POST['accNo']);
	$vdate = mysqli_real_escape_string($conn, $_POST['vDate']);
	$scode = mysqli_real_escape_string($conn, $_POST['sCode']);
	
	if(empty($status) || empty($fname) || empty($lname) || empty($email) || empty($pwd) || empty($nic) || empty($dob) || empty($address) || empty($tel1) || empty($tel2) || empty($accno) || empty($vdate) || empty($scode)) {
		header("Location: ../Signup.php?signup=empty");	
		exit();
		} else {
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../Signup.php?signup=email");	
				exit();
			} else {
					$sql = "SELECT * FROM patient where P_Email='$email'";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);
					
					if ($resultCheck > 0) {
						header("Location: ../Signup.php?signup=emailtaken");
						exit();
					} else {
						$hpwd=sha1($pwd);
						$sql = "INSERT INTO patient (P_Status, P_Fname, P_Lname, P_Email, P_Password, P_Nic, P_Dob, P_Address, P_Tele1, P_Tele2, P_AccNo, P_Expdate, P_AccCode) VALUES ('$status', '$fname', '$lname', '$email', '$hpwd', '$nic', '$dob', '$address', '$tel1', '$tel2', '$accno', '$vdate', '$scode');";
						mysqli_query($conn, $sql);
						header("Location: ../Signup.php?signup=success");
						exit();
			} 
		}

		
		}
	
} else {
	header("Location: ../signup.php");
	exit();
}
?>