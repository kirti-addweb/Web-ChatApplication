<?php

require "../model/db_connect.php";

session_start();

	$email=$_SESSION['Email'];

	$qry="SELECT * FROM addcontact WHERE Email='$email'";

	$con = new connection();
	$conn= $con->connectdb();

	$rs=mysqli_query($conn,$qry);
	$row=mysqli_fetch_assoc($rs);

	date_default_timezone_set('Asia/Kolkata');
	$t= date('h:i:s');

	$sid=$row['id'];
	$g_id=$_GET['g_id'];
		//$rid=$_GET['id'];
	$msg=$_POST['Message'];
	$isactive=1;

	$qry1="INSERT INTO group_message (g_id,Sid,Message,time_msg,isactive) VALUES ($g_id,$sid,'$msg','$t',$isactive)";
	$rs1=mysqli_query($conn,$qry1);

	$read_Update = ' UPDATE group_member set `is_read`="0"  WHERE g_id = '.$g_id;
	$rs2=mysqli_query($conn,$read_Update);
	//var_dump($rs1);

if($rs1)
{
	header("location:../view/group_chat.php?g_id=$g_id");
	exit();
}
else
{
	header("location:../view/group_chat.php?g_id=$g_id");
}
?>
