<?php
include_once('../model/db_connect.php');

if (isset($_POST['submit'])) 

{

	$conn = new mysqli('localhost','vismay','root','chatapp') or die("can't connect to database");
	$m_ids=$_POST['m_id'];
	$g_id=$_POST['g_id'];
		//print_r($m_ids);
		//exit();
	count($m_ids);

	foreach ($m_ids as $m_id ) {

		echo $g_id;
		$a=$conn->query("INSERT INTO group_member (g_id,m_id) VALUES ('$g_id','$m_id')");

			//$q = mysqli_query($conn,"");

		if(!$a)
		{
			header("location:../view/group_chat.php");
		}
		

	}
	header("location:../view/group_chat.php?g_id=$g_id");
	exit();
}




?>