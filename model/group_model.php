<?php

include('db_connect.php');

class group extends connection
{
	public $conn;

	public function __construct() 
	{ 
       	/*$dbcon = new parent(); 
       	$this->conn = $dbcon->connection();*/



         /*$con = new connection();
         $conn= $con->connectdb();*/
		//echo $conn;

     }
     public function holiday_add($id)
     { 	
     	echo $conn = new mysqli('localhost','vismay','root','chatapp') or die("can't connect to database");
		//session_start();
     	$group_name=$_POST['group_name'];

		 //echo $id;

     	$in=$conn->query("INSERT INTO groups (group_name,owner_id) VALUES ('$group_name','$id')");


     	if (mysqli_query($conn, $in))
     	{
     		$last_id = mysqli_insert_id($conn);
		  //echo "New record created successfully. Last inserted ID is: " . $last_id;
     	}
     	else
     	{
     		echo $last_id = $conn->insert_id;

     		$a=$conn->query("INSERT INTO group_member (g_id,m_id) VALUES ('$last_id','$id')");
			//echo "no";
     	}

     	$q = mysqli_query($conn,"");

     	if($q)
     	{
     		header("location:../view/group_chat.php?g_id=1");
     		exit();
     	}
     	else
     	{
     		header("location:../view/group_chat.php?g_id=1");
     	}
     } 

 }
 $h1 = new group();
//$data=$h1->holiday_add();

 ?>