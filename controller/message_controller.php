<?php

	require "../model/db_connect.php";

	session_start();

/*	if(!isset($_SESSION['email']))
	{
		header("location:../login.php");
		exit();
	}*/

	$email=$_SESSION['Email'];
	echo $email;
	
	$qry="SELECT * FROM addcontact WHERE Email='$email'";

	$con = new connection();
	$conn= $con->connectdb();

	$rs=mysqli_query($conn,$qry);
	$row=mysqli_fetch_assoc($rs);
	
	date_default_timezone_set('Asia/Kolkata');
	$t= date('h:i:s');
	
	$sid=$row['id'];
	$rid=$_GET['rid'];
	$msg=$_POST['Message'];
	
	$isactive=1;

	echo $rid;

	/*if($msg=="")
	{
		header("location:../view/user_chat.php");
		exit();
	}
*/
	$qry1="INSERT INTO message (Sid,Rid,Message,time_msg,isactive) VALUES ($sid,$rid,'$msg','$t',$isactive)";
	$rs1=mysqli_query($conn,$qry1);

	if($rs1)
	{
		header("location:../view/chat.php?rid=$rid");
		exit();
	}
	else
	{
		header("location:../view/chat.php");
	}
?>
