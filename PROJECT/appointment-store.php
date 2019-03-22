<?php
session_start();
if (isset($_POST['btnsubmit'])){
	
	$a=$_SESSION['P_group'];
	$b=$_SESSION['P_hospital'];
	$d=$_SESSION['P_doctor'];
	$e=$_SESSION['P_Email'];
	$f=$_SESSION['Fee'];
	
	include_once 'db_connect.php';
	
	$sql1 = "SELECT P_ID FROM patient WHERE P_Email='$e'";
	$result1 = mysqli_query($conn, $sql1);
	$resultCheck1 = mysqli_num_rows($result1);
	$row1 = mysqli_fetch_row($result1);
	$c = $row1[0];
	$_SESSION['P_ID']=$c;
	
	$sql3 = "SELECT A_ID FROM appointment WHERE Group_ID='$a' and P_ID='$c' and H_ID='$b' and D_ID='$d' and Fee='$f' and Active='yes'";
	$result3 = mysqli_query($conn, $sql3);
	$resultCheck3 = mysqli_num_rows($result3);
	$row3 = mysqli_fetch_row($result3);
	$q = $row3[0];
	
	if($resultCheck3<1){ 
	
	$sql="INSERT INTO appointment (Group_ID, P_ID, H_ID, D_ID, Fee, Active) VALUES ('$a', '$c', '$b', '$d', '$f', 'yes');";
	mysqli_query($conn, $sql);
	
	$sql2 = "SELECT A_ID FROM appointment WHERE Group_ID='$a' and P_ID='$c' and H_ID='$b' and D_ID='$d' and Fee='$f' and Active='yes'";
	$result2 = mysqli_query($conn, $sql2);
	$resultCheck2 = mysqli_num_rows($result2);
	$row2 = mysqli_fetch_row($result2);
	$k = $row2[0];
	
	$_SESSION['A_ID']=$k;
	
	header("Location: ../Appointment_No.php?Appointment=success");
	}else{
		header("Location: ../Home.php?Appointment=duplicate");
	}
	
	if(isset($_SESSION['P_group'])||isset($_SESSION['P_hospital'])||isset($_SESSION['P_doctor'])||isset($_SESSION['Fee']));
	{
		unset($_SESSION['P_group']);
		unset($_SESSION['P_hospital']);
		unset($_SESSION['P_doctor']);
		unset($_SESSION['Fee']);
	}
	
} else {
	header("Location: ../Home.php?appointment=error");
	exit();
}
?>