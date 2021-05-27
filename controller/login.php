<?php

include_once('../model/db_connect.php');

if(!isset($_POST['submit']))
{
	header("location:../view/login.php");
	exit();
}

session_start();

$email=$_POST['email'];
$password=$_POST['password'];
$role=$_POST['role'];

//$password = md5($password);
$qry="SELECT * FROM addcontact WHERE email='$email' AND role='$role'";

$con = new connection();
$conn= $con->connectdb();

$rs=mysqli_query($conn,$qry);

$cnt=mysqli_num_rows($rs);

if($cnt==1)
{
	while($row=mysqli_fetch_assoc($rs))
	{
		//echo $row['password'];
		$name=$row['name'];
		$id=$row['id'];
		

		if($row['password']==$password)
		{
			$_SESSION['id']=$id;
			$_SESSION['name']=$name;
			$_SESSION['Email']=$email;
			$_SESSION['type']=$role;

			//echo $id;
			$q = " UPDATE addcontact set `isactive`='1' where id=".$id;
			
			if(mysqli_query($conn,$q))
			{
				header("location:../view/index.php");
				exit();
			}

			
		}
		else
		{
			header("location:../view/login.php");
			exit();
		}
	}
}
else
{
	header("location:../view/login.php");
	exit();
}
?>