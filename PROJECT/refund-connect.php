<?php
if (isset($_POST['submit'])){
	
	include_once 'db_connect.php';
	
	$appno = mysqli_real_escape_string($conn, $_POST['appointmentNo']);
	$reason = mysqli_real_escape_string($conn, $_POST['reason']);
	$hname = mysqli_real_escape_string($conn, $_POST['holdername']);
	$bank = mysqli_real_escape_string($conn, $_POST['bank']);
	$accno = mysqli_real_escape_string($conn, $_POST['accNo']);
		
	if(empty($appno) || empty($reason) || empty($hname) || empty($bank) || empty($accno)) {
		header("Location: ../Refund.php?refund=empty");	
		exit();
		} else {
					$sql = "INSERT INTO refund (A_ID, Reason, Name, Bank, Acc_No) VALUES ('$appno', '$reason', '$hname', '$bank', '$accno');";
					mysqli_query($conn, $sql);
					header("Location: ../Home.php?refund=success");
					exit();
			} 

	
} else {
	header("Location: ../Refund.php");
	exit();
}
?>